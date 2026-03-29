<?php

namespace App\Mail;

use App\Models\ContactEnquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnquiryAdminNotificationMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(public ContactEnquiry $enquiry)
    {
    }

    public function envelope(): Envelope
    {
        $type = ucfirst($this->enquiry->enquiry_type ?: 'contact');

        return new Envelope(
            subject: "New {$type} enquiry from {$this->enquiry->full_name}",
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.enquiry-admin',
        );
    }
}
