<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ServicePageController extends Controller
{
    /**
     * @return array<string, array<string, mixed>>
     */
    private function serviceMap(): array
    {
        return [
            'web-development' => [
                'name' => 'Web Development',
                'meta_title' => 'Web Development Services – Anbias | React, Next.js, WordPress & More',
                'meta_description' => 'AI-powered web development by Anbias — React, Next.js, WordPress, custom web apps and eCommerce delivery for US and India markets.',
                'eyebrow' => 'Service — Web Development',
                'eyebrow_tail' => 'AI-Accelerated Delivery',
                'line_one' => 'Code That',
                'line_lime' => 'Converts.',
                'line_outline' => 'Ships Fast.',
                'hero_desc' => 'We engineer production-grade websites and web applications using modern stacks — powered by AI for 4× faster delivery, cleaner code, and Lighthouse scores above 90. No bloat, no delays.',
                'stats' => [
                    ['value' => '7–14', 'suffix' => '', 'label' => 'Days to Launch'],
                    ['value' => '90', 'suffix' => '+', 'label' => 'Lighthouse Score'],
                    ['value' => '96', 'suffix' => '%', 'label' => 'Bug-Free Deploys'],
                ],
                'badges' => [
                    ['label' => 'React', 'version' => 'v18'],
                    ['label' => 'Next.js', 'version' => '14'],
                    ['label' => 'Node.js', 'version' => 'LTS'],
                    ['label' => 'TypeScript', 'version' => '5.x'],
                    ['label' => 'Tailwind CSS', 'version' => 'v3'],
                    ['label' => 'PostgreSQL', 'version' => '16'],
                ],
                'marquee' => ['React & Next.js', 'Custom Web Apps', 'WordPress & CMS', 'Headless Architecture', 'API Integrations', 'eCommerce Builds', 'Mobile-First Design', 'Core Web Vitals 90+', 'CI/CD & DevOps', 'US & India Timezones'],
                'consult_label' => 'Book Free Development Consult',
                'secondary_cta' => 'See What We Build',
            ],
            'web-security' => [
                'name' => 'Web Security / VAPT',
                'meta_title' => 'Web Security & VAPT Services – Anbias | OWASP, Pentesting, Hardening',
                'meta_description' => 'Comprehensive web security and VAPT services by Anbias — OWASP testing, penetration testing, remediation and continuous monitoring.',
                'eyebrow' => 'Service — Web Security / VAPT',
                'eyebrow_tail' => 'Security-First Execution',
                'line_one' => 'Protect What',
                'line_lime' => 'You Build.',
                'line_outline' => 'Before It Breaks.',
                'hero_desc' => 'We run practical, business-focused security assessments to detect exploitable vulnerabilities early and harden your systems before attackers find them.',
                'stats' => [
                    ['value' => '24', 'suffix' => 'h', 'label' => 'Critical Alert Window'],
                    ['value' => '100', 'suffix' => '%', 'label' => 'Manual + Automated Coverage'],
                    ['value' => '0', 'suffix' => '', 'label' => 'Security Guesswork'],
                ],
                'badges' => [
                    ['label' => 'OWASP', 'version' => 'Top 10'],
                    ['label' => 'VAPT', 'version' => 'Full'],
                    ['label' => 'Pentest', 'version' => 'Manual'],
                    ['label' => 'NIST', 'version' => 'Aligned'],
                    ['label' => 'Hardening', 'version' => 'Prod'],
                    ['label' => 'Reports', 'version' => 'Actionable'],
                ],
                'marquee' => ['OWASP Audits', 'Penetration Testing', 'Threat Modeling', 'Security Hardening', 'Compliance Mapping', 'Incident Readiness', 'Remediation Plans', 'Zero Trust Baselines', 'AppSec Reviews', 'Continuous Monitoring'],
                'consult_label' => 'Book Free Security Consult',
                'secondary_cta' => 'See Security Scope',
            ],
            'ai-development' => [
                'name' => 'AI-Powered Development',
                'meta_title' => 'AI-Powered Development Services – Anbias | Faster Product Delivery',
                'meta_description' => 'Ship faster with AI-powered product development by Anbias. Human-reviewed, production-grade systems delivered at startup speed.',
                'eyebrow' => 'Service — AI-Powered Development',
                'eyebrow_tail' => 'Human-Reviewed AI Pipeline',
                'line_one' => 'Build With',
                'line_lime' => 'AI Speed.',
                'line_outline' => 'Human Quality.',
                'hero_desc' => 'We combine proven engineering workflows with AI acceleration to reduce delivery cycles without compromising architecture, reliability, or maintainability.',
                'stats' => [
                    ['value' => '4', 'suffix' => '×', 'label' => 'Faster Iterations'],
                    ['value' => '60', 'suffix' => '%', 'label' => 'Revision Reduction'],
                    ['value' => '96', 'suffix' => '%', 'label' => 'Clean Deploy Rate'],
                ],
                'badges' => [
                    ['label' => 'Claude', 'version' => 'Latest'],
                    ['label' => 'Copilot', 'version' => 'Pro'],
                    ['label' => 'v0', 'version' => 'UI'],
                    ['label' => 'Cursor', 'version' => 'IDE'],
                    ['label' => 'Automation', 'version' => 'CI'],
                    ['label' => 'Review', 'version' => 'Senior'],
                ],
                'marquee' => ['AI-Assisted Coding', 'Rapid Prototyping', 'Automated QA', 'Architecture Reviews', 'Production Readiness', 'Prompt-Driven Workflows', 'Human Code Review', 'Scalable Systems', 'Faster Delivery', 'Better Accuracy'],
                'consult_label' => 'Book Free AI Dev Consult',
                'secondary_cta' => 'See AI Workflow',
            ],
            'seo' => [
                'name' => 'SEO & Rankings',
                'meta_title' => 'SEO & Ranking Services – Anbias | Technical SEO for US & India',
                'meta_description' => 'Technical SEO, content architecture, and ranking growth services by Anbias for competitive US and India search markets.',
                'eyebrow' => 'Service — SEO & Rankings',
                'eyebrow_tail' => 'Technical SEO Precision',
                'line_one' => 'Rank With',
                'line_lime' => 'Intent.',
                'line_outline' => 'Grow Reliably.',
                'hero_desc' => 'We optimize technical foundations, content structure, and performance signals so your website can consistently rank and convert in competitive search verticals.',
                'stats' => [
                    ['value' => '3', 'suffix' => '–6', 'label' => 'Month Growth Window'],
                    ['value' => '90', 'suffix' => '+', 'label' => 'Technical Health Targets'],
                    ['value' => '2', 'suffix' => 'x', 'label' => 'Organic Visibility Lift'],
                ],
                'badges' => [
                    ['label' => 'Tech SEO', 'version' => 'Core'],
                    ['label' => 'Schema', 'version' => 'JSON-LD'],
                    ['label' => 'CWV', 'version' => 'Optimized'],
                    ['label' => 'SERP', 'version' => 'Tracking'],
                    ['label' => 'Content', 'version' => 'Structured'],
                    ['label' => 'Local SEO', 'version' => 'GEO'],
                ],
                'marquee' => ['Technical SEO', 'Core Web Vitals', 'Keyword Strategy', 'Search Intent Mapping', 'Schema Markup', 'Content Hubs', 'On-Page SEO', 'Performance SEO', 'US/India Markets', 'Rank Tracking'],
                'consult_label' => 'Book Free SEO Consult',
                'secondary_cta' => 'See SEO Scope',
            ],
            'ecommerce' => [
                'name' => 'eCommerce Development',
                'meta_title' => 'eCommerce Development Services – Anbias | Shopify, WooCommerce, Headless',
                'meta_description' => 'eCommerce website development services by Anbias — Shopify, WooCommerce and custom storefronts optimized for conversion.',
                'eyebrow' => 'Service — eCommerce Development',
                'eyebrow_tail' => 'Conversion-Driven Commerce',
                'line_one' => 'Sell Better.',
                'line_lime' => 'Scale Faster.',
                'line_outline' => 'Operate Smarter.',
                'hero_desc' => 'From storefront UX to checkout reliability and backend operations, we build commerce systems engineered for higher conversion and sustainable growth.',
                'stats' => [
                    ['value' => '38', 'suffix' => '%', 'label' => 'Avg CRO Lift'],
                    ['value' => '99', 'suffix' => '%', 'label' => 'Checkout Reliability'],
                    ['value' => '24', 'suffix' => '/7', 'label' => 'Revenue Availability'],
                ],
                'badges' => [
                    ['label' => 'Shopify', 'version' => 'Plus'],
                    ['label' => 'WooCommerce', 'version' => 'Core'],
                    ['label' => 'Headless', 'version' => 'Next.js'],
                    ['label' => 'Payments', 'version' => 'Secure'],
                    ['label' => 'Catalog', 'version' => 'Scaled'],
                    ['label' => 'CRO', 'version' => 'Focused'],
                ],
                'marquee' => ['Shopify Builds', 'WooCommerce Stores', 'Headless Commerce', 'Payment Integrations', 'Checkout Optimization', 'Catalog Architecture', 'CRO Improvements', 'Operational Workflows', 'Cross-Border Setup', 'Subscription Commerce'],
                'consult_label' => 'Book Free eCommerce Consult',
                'secondary_cta' => 'See Commerce Scope',
            ],
            'maintenance' => [
                'name' => 'Maintenance & Support',
                'meta_title' => 'Website Maintenance Services – Anbias | Security, Uptime, Performance',
                'meta_description' => 'Monthly website maintenance services by Anbias — proactive updates, performance tuning, monitoring, and fast issue resolution.',
                'eyebrow' => 'Service — Maintenance & Support',
                'eyebrow_tail' => 'Proactive Reliability',
                'line_one' => 'Keep It',
                'line_lime' => 'Stable.',
                'line_outline' => 'Keep It Fast.',
                'hero_desc' => 'We handle ongoing performance, security, and operational updates so your website stays healthy, resilient, and business-ready month after month.',
                'stats' => [
                    ['value' => '99.9', 'suffix' => '%', 'label' => 'Uptime Target'],
                    ['value' => '24', 'suffix' => 'h', 'label' => 'Issue Response'],
                    ['value' => '100', 'suffix' => '%', 'label' => 'Update Coverage'],
                ],
                'badges' => [
                    ['label' => 'Uptime', 'version' => 'Monitor'],
                    ['label' => 'Security', 'version' => 'Scans'],
                    ['label' => 'Backups', 'version' => 'Automated'],
                    ['label' => 'Updates', 'version' => 'Managed'],
                    ['label' => 'Performance', 'version' => 'Tuned'],
                    ['label' => 'Support', 'version' => 'Priority'],
                ],
                'marquee' => ['Proactive Maintenance', 'Weekly Updates', 'Security Monitoring', 'Performance Tuning', 'Backup Strategy', 'Incident Response', 'Priority Fixes', 'Monthly Reporting', 'SLA Support', 'Technical Partner Model'],
                'consult_label' => 'Book Free Maintenance Consult',
                'secondary_cta' => 'See Support Scope',
            ],
        ];
    }

    public function index(): RedirectResponse
    {
        return redirect()->route('services.show', ['slug' => 'web-development']);
    }

    public function show(string $slug): View
    {
        $services = $this->serviceMap();

        abort_unless(isset($services[$slug]), 404);

        return view('services.show', [
            'service' => $services[$slug],
            'services' => $services,
            'slug' => $slug,
        ]);
    }
}
