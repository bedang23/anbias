<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>We received your enquiry</title>
</head>
<body style="font-family:Arial,Helvetica,sans-serif;color:#141414;line-height:1.5;">
  <h2 style="margin:0 0 12px;">Thanks for contacting Anbias</h2>
  <p style="margin:0 0 12px;">Hi {{ $enquiry->full_name }},</p>
  <p style="margin:0 0 12px;">We have received your enquiry and our team will review it shortly. We usually respond within 24 hours.</p>
  <p style="margin:0 0 12px;">Reference details:</p>
  <ul style="margin:0 0 12px 18px;padding:0;">
    <li>Enquiry type: {{ ucfirst($enquiry->enquiry_type ?: 'contact') }}</li>
    <li>Submitted email: {{ $enquiry->email }}</li>
    <li>Submitted phone: {{ $enquiry->phone_number ?: '—' }}</li>
  </ul>
  <p style="margin:0 0 12px;">If you need to add more context, simply reply to this email.</p>
  <p style="margin:0;">Regards,<br>Anbias Team</p>
</body>
</html>
