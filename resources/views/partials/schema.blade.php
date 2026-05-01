@php
    $schemaUrl = config('app.url', 'https://anbias.com');
    $schemaLogo = asset('images/anbias-logo.svg');
    $socialLinks = [
        'https://www.linkedin.com/company/anbias',
        'https://www.instagram.com/anbias',
        'https://x.com/anbias',
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
        'areaServed' => ['Raipur', 'Bilaspur', 'Durg', 'Bhilai', 'Korba', 'Rajnandgaon', 'Jagdalpur', 'Chhattisgarh', 'IN'],
        'sameAs' => $socialLinks,
    ];

    $homeFaqSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => 'Is the free consultancy really free?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Yes — 100% free. No credit card, no contracts, no pressure. We believe in earning your trust before asking for your business. Our consultancy is a genuine service where we review your site and give you real, actionable feedback.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'How do you use AI in development?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'We use AI at every stage — for generating unique design concepts, writing code, auto-testing for errors, and creating SEO content. Everything is reviewed and refined by senior developers, so you get the speed of AI with the quality of human expertise.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Do you work with businesses outside Raipur — Bilaspur, Durg, Bhilai?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Absolutely. We serve businesses across the entire state of Chhattisgarh — Raipur, Bilaspur, Durg, Bhilai, Korba, Rajnandgaon, Jagdalpur, and beyond. All engagements are managed remotely via video calls, shared project boards, and WhatsApp with no quality compromise.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'How long does a typical project take?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'A standard 5–8 page website takes 7–14 days thanks to our AI workflow. Complex web applications typically ship in 4–8 weeks. We\'ll give a precise timeline after the discovery call.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'What is VAPT and do I need it?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'VAPT stands for Vulnerability Assessment and Penetration Testing. If your site handles user data, payments, or logins, you need it. We recommend it for every business with more than 500 monthly users.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'What industries do you specialize in?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'We work with businesses across real estate, education, retail, manufacturing, healthcare, and professional services in Raipur and Chhattisgarh. Our AI-powered workflow allows us to rapidly absorb any domain regardless of niche.',
                ],
            ],
        ],
    ];
@endphp
<script type="application/ld+json">{!! json_encode($organizationSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
<script type="application/ld+json">{!! json_encode($homeFaqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
