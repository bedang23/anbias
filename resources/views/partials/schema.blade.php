@php
    $schemaUrl = config('app.url', 'https://anbias.com'); // Placeholder: configure APP_URL in production.
    $schemaLogo = asset('images/anbias-logo.svg'); // Placeholder: replace with final absolute logo URL if needed.
    $socialLinks = [
        'https://www.linkedin.com/company/anbias', // Placeholder
        'https://www.instagram.com/anbias', // Placeholder
        'https://x.com/anbias', // Placeholder
    ];

    $organizationSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Anbias',
        'legalName' => 'Anbias',
        'url' => $schemaUrl,
        'logo' => $schemaLogo,
        'email' => 'contact@anbias.com',
        'telephone' => '+91-8109109960',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => '23 SBI Colony, Tagore Nagar',
            'addressLocality' => 'Raipur',
            'addressRegion' => 'Chhattisgarh',
            'addressCountry' => 'IN',
        ],
        'areaServed' => ['US', 'AE', 'IN', 'Pune'],
        'sameAs' => $socialLinks,
    ];
@endphp
<script type="application/ld+json">{!! json_encode($organizationSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
