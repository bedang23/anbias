<?php

namespace App\Http\Controllers;

use App\Models\ContactEnquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactEnquiryController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $payload = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'website_url' => ['nullable', 'url', 'max:255'],
            'company_name' => ['nullable', 'string', 'max:255'],
            'tech_stack' => ['nullable', 'string', 'max:1000'],
            'primary_goal' => ['required', 'string', 'max:100'],
            'budget_range' => ['nullable', 'string', 'max:100'],
            'timeline' => ['nullable', 'string', 'max:100'],
            'message' => ['required', 'string', 'min:20', 'max:5000'],
            'preferred_contact' => ['nullable', 'string', 'max:50'],
            '_hp_field' => ['nullable', 'max:0'],
        ]);

        unset($payload['_hp_field']);

        $payload['ip_address'] = $request->ip();
        $payload['user_agent'] = $request->userAgent();

        ContactEnquiry::query()->create($payload);

        return back()->with('status', 'Thanks. Your strategy session request has been received.');
    }
}
