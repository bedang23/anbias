<?php

namespace App\Mail;

use App\Models\ContactEnquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnquiryUserAcknowledgementMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(public ContactEnquiry $enquiry)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'We received your enquiry | Anbias',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.enquiry-user',
        );
    }
}
