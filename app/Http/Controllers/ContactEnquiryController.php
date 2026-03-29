<?php

namespace App\Http\Controllers;

use App\Mail\EnquiryAdminNotificationMail;
use App\Mail\EnquiryUserAcknowledgementMail;
use App\Models\ContactEnquiry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class ContactEnquiryController extends Controller
{
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        $payload = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone_number' => ['required', 'string', 'max:40', 'regex:/^[0-9+()\\-\\s]{7,40}$/'],
            'website_url' => ['nullable', 'url', 'max:255'],
            'company_name' => ['nullable', 'string', 'max:255'],
            'tech_stack' => ['nullable', 'string', 'max:1000'],
            'primary_goal' => ['required', 'string', 'max:100'],
            'budget_range' => ['nullable', 'string', 'max:100'],
            'timeline' => ['nullable', 'string', 'max:100'],
            'message' => ['required', 'string', 'min:20', 'max:5000'],
            'preferred_contact' => ['nullable', 'string', 'max:50'],
            'form_started_at' => ['nullable', 'integer'],
            '_hp_field' => ['nullable', 'max:0'],
        ]);

        $this->applySpamGuards(
            request: $request,
            type: 'contact',
            message: (string) ($payload['message'] ?? ''),
            email: (string) ($payload['email'] ?? ''),
            startedAt: $payload['form_started_at'] ?? null,
        );

        unset($payload['_hp_field']);
        unset($payload['form_started_at']);

        $payload['ip_address'] = $request->ip();
        $payload['user_agent'] = $request->userAgent();
        $payload['enquiry_type'] = 'contact';

        $enquiry = ContactEnquiry::query()->create($payload);
        $this->sendEnquiryEmails($enquiry);

        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'Thank you for contacting us. We will get back to you soon.',
            ]);
        }

        return back()->with('status', 'Thanks. Your strategy session request has been received.');
    }

    public function storeService(Request $request): JsonResponse|RedirectResponse
    {
        $payload = $request->validate([
            'first_name' => ['required', 'string', 'max:120'],
            'last_name' => ['nullable', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:255'],
            'phone_number' => ['required', 'string', 'max:40', 'regex:/^[0-9+()\\-\\s]{7,40}$/'],
            'website_url' => ['nullable', 'url', 'max:255'],
            'project_type' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'min:20', 'max:5000'],
            'form_started_at' => ['nullable', 'integer'],
            '_hp_field' => ['nullable', 'max:0'],
            'service_slug' => ['required', 'string', Rule::in([
                'web-development',
                'web-security',
                'ai-development',
                'seo',
                'ecommerce',
                'maintenance',
            ])],
        ]);

        $this->applySpamGuards(
            request: $request,
            type: 'service',
            message: (string) ($payload['message'] ?? ''),
            email: (string) ($payload['email'] ?? ''),
            startedAt: $payload['form_started_at'] ?? null,
        );

        $fullName = trim(($payload['first_name'] ?? '').' '.($payload['last_name'] ?? ''));

        $enquiry = ContactEnquiry::query()->create([
            'full_name' => $fullName,
            'email' => $payload['email'],
            'phone_number' => $payload['phone_number'],
            'website_url' => $payload['website_url'] ?? null,
            'primary_goal' => $payload['project_type'],
            'message' => $payload['message'],
            'enquiry_type' => 'service',
            'service_slug' => $payload['service_slug'],
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);
        $this->sendEnquiryEmails($enquiry);

        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'Thank you for contacting us. We will get back to you soon.',
            ]);
        }

        return back()->with('status', 'Thanks. Your request has been received.');
    }

    private function applySpamGuards(
        Request $request,
        string $type,
        string $message,
        string $email,
        mixed $startedAt
    ): void {
        $rateKey = sprintf('enquiry:%s:%s', $type, (string) $request->ip());
        if (RateLimiter::tooManyAttempts($rateKey, 5)) {
            throw ValidationException::withMessages([
                'form' => 'Too many submissions. Please try again after some time.',
            ]);
        }

        if ($this->isLikelySpam($message, $email)) {
            throw ValidationException::withMessages([
                'form' => 'Your message could not be submitted. Please review and try again.',
            ]);
        }

        if (is_numeric($startedAt)) {
            $elapsedSeconds = time() - (int) $startedAt;
            if ($elapsedSeconds >= 0 && $elapsedSeconds < 3) {
                throw ValidationException::withMessages([
                    'form' => 'Your message could not be submitted. Please try again.',
                ]);
            }
        }

        RateLimiter::hit($rateKey, 60 * 15);
    }

    private function isLikelySpam(string $message, string $email): bool
    {
        $urlCount = preg_match_all('/https?:\\/\\/|www\\./i', $message);
        if ($urlCount !== false && $urlCount >= 3) {
            return true;
        }

        if (preg_match('/(.)\\1{14,}/', $message) === 1) {
            return true;
        }

        if (preg_match('/@(mailinator|guerrillamail|10minutemail|tempmail)\\./i', $email) === 1) {
            return true;
        }

        return false;
    }

    private function sendEnquiryEmails(ContactEnquiry $enquiry): void
    {
        $notificationEmail = config('mail.enquiry_notification_to');

        if (!empty($notificationEmail)) {
            Mail::to($notificationEmail)->send(new EnquiryAdminNotificationMail($enquiry));
        }

        Mail::to($enquiry->email)->send(new EnquiryUserAcknowledgementMail($enquiry));
    }
}
