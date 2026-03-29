<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Enquiry</title>
</head>
<body style="font-family:Arial,Helvetica,sans-serif;color:#141414;line-height:1.5;">
  <h2 style="margin:0 0 12px;">New {{ ucfirst($enquiry->enquiry_type ?: 'contact') }} enquiry received</h2>

  <p style="margin:0 0 12px;"><strong>Name:</strong> {{ $enquiry->full_name }}</p>
  <p style="margin:0 0 12px;"><strong>Email:</strong> {{ $enquiry->email }}</p>
  <p style="margin:0 0 12px;"><strong>Phone:</strong> {{ $enquiry->phone_number ?: '—' }}</p>
  <p style="margin:0 0 12px;"><strong>Website:</strong> {{ $enquiry->website_url ?: '—' }}</p>
  <p style="margin:0 0 12px;"><strong>Goal / Project Type:</strong> {{ $enquiry->primary_goal ?: '—' }}</p>
  <p style="margin:0 0 12px;"><strong>Service Slug:</strong> {{ $enquiry->service_slug ?: '—' }}</p>
  <p style="margin:0 0 12px;"><strong>Preferred Contact:</strong> {{ $enquiry->preferred_contact ?: '—' }}</p>

  <p style="margin:16px 0 6px;"><strong>Message</strong></p>
  <p style="margin:0 0 12px;white-space:pre-wrap;">{{ $enquiry->message }}</p>

  <hr style="border:0;border-top:1px solid #ddd;margin:16px 0;">
  <p style="margin:0;color:#666;">Submitted at: {{ $enquiry->created_at?->format('Y-m-d H:i:s') }}</p>
</body>
</html>
