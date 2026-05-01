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
                'meta_title' => 'Web Development Company in Raipur – React, Laravel & WordPress | Anbias',
                'meta_description' => 'Top web development company in Raipur, Chhattisgarh. We build fast, conversion-focused websites and web apps using React, Laravel, WordPress and AI. Serving Bilaspur, Durg, Bhilai and across CG.',
                'eyebrow' => 'Service — Web Development',
                'eyebrow_tail' => 'AI-Accelerated Delivery',
                'line_one' => 'Code That',
                'line_lime' => 'Converts.',
                'line_outline' => 'Ships Fast.',
                'hero_desc' => 'We build production-grade websites and web applications for businesses in Raipur and Chhattisgarh — powered by AI for 4× faster delivery, clean code, and Lighthouse scores above 90. No bloat, no delays.',
                'stats' => [
                    ['value' => '7–14', 'suffix' => '', 'label' => 'Days to Launch'],
                    ['value' => '90', 'suffix' => '+', 'label' => 'Lighthouse Score'],
                    ['value' => '96', 'suffix' => '%', 'label' => 'Bug-Free Deploys'],
                ],
                'badges' => [
                    ['label' => 'React', 'version' => 'v18'],
                    ['label' => 'Next.js', 'version' => '14'],
                    ['label' => 'Laravel', 'version' => '11'],
                    ['label' => 'TypeScript', 'version' => '5.x'],
                    ['label' => 'Tailwind CSS', 'version' => 'v3'],
                    ['label' => 'WordPress', 'version' => 'CMS'],
                ],
                'marquee' => ['React & Next.js', 'Custom Web Apps', 'WordPress & CMS', 'Laravel Development', 'API Integrations', 'eCommerce Builds', 'Mobile-First Design', 'Core Web Vitals 90+', 'Raipur & Chhattisgarh', 'Bilaspur & Durg'],
                'consult_label' => 'Book Free Development Consult',
                'secondary_cta' => 'See What We Build',
            ],
            'web-security' => [
                'name' => 'Web Security / VAPT',
                'meta_title' => 'Web Security & VAPT Services in Raipur – OWASP, Pentesting | Anbias',
                'meta_description' => 'Web security and VAPT services for businesses in Raipur and Chhattisgarh — OWASP testing, penetration testing, security hardening and continuous monitoring.',
                'eyebrow' => 'Service — Web Security / VAPT',
                'eyebrow_tail' => 'Security-First Execution',
                'line_one' => 'Protect What',
                'line_lime' => 'You Build.',
                'line_outline' => 'Before It Breaks.',
                'hero_desc' => 'We run practical, business-focused security assessments for companies in Raipur and Chhattisgarh — detecting exploitable vulnerabilities early and hardening your systems before attackers find them.',
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
                'meta_title' => 'AI-Powered Web Development in Raipur – Faster Product Delivery | Anbias',
                'meta_description' => 'AI-powered web development services in Raipur, Chhattisgarh. Build faster with human-reviewed AI pipelines for production-grade websites and applications.',
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
                'meta_title' => 'SEO Services in Raipur – Local SEO & Google Rankings | Anbias',
                'meta_description' => 'Expert SEO services in Raipur and Chhattisgarh. Technical SEO, local SEO, Google Business Profile optimization and content strategy to rank your business on Google. Serving Bilaspur, Durg, Bhilai.',
                'eyebrow' => 'Service — SEO & Rankings',
                'eyebrow_tail' => 'Local SEO Precision',
                'line_one' => 'Rank In',
                'line_lime' => 'Raipur.',
                'line_outline' => 'Grow Reliably.',
                'hero_desc' => 'We help businesses in Raipur and Chhattisgarh rank on Google — with technical SEO, local search optimization, and content strategy that drives qualified leads from your own market.',
                'stats' => [
                    ['value' => '3', 'suffix' => '–6', 'label' => 'Month Growth Window'],
                    ['value' => '90', 'suffix' => '+', 'label' => 'Technical Health Targets'],
                    ['value' => '2', 'suffix' => 'x', 'label' => 'Organic Visibility Lift'],
                ],
                'badges' => [
                    ['label' => 'Local SEO', 'version' => 'Raipur'],
                    ['label' => 'Schema', 'version' => 'JSON-LD'],
                    ['label' => 'CWV', 'version' => 'Optimized'],
                    ['label' => 'GMB', 'version' => 'Optimized'],
                    ['label' => 'Content', 'version' => 'Structured'],
                    ['label' => 'Citations', 'version' => 'Consistent'],
                ],
                'marquee' => ['Local SEO Raipur', 'Google Business Profile', 'Keyword Strategy', 'Search Intent Mapping', 'Schema Markup', 'Content Hubs', 'On-Page SEO', 'Technical SEO', 'Raipur & Chhattisgarh', 'Rank Tracking'],
                'consult_label' => 'Book Free SEO Consult',
                'secondary_cta' => 'See SEO Scope',
            ],
            'ecommerce' => [
                'name' => 'eCommerce Development',
                'meta_title' => 'eCommerce Website Development in Raipur – Shopify, WooCommerce | Anbias',
                'meta_description' => 'eCommerce website development services in Raipur, Chhattisgarh — Shopify, WooCommerce and custom online stores optimized for conversion. Serving businesses across CG.',
                'eyebrow' => 'Service — eCommerce Development',
                'eyebrow_tail' => 'Conversion-Driven Commerce',
                'line_one' => 'Sell Better.',
                'line_lime' => 'Scale Faster.',
                'line_outline' => 'Operate Smarter.',
                'hero_desc' => 'We build eCommerce websites for businesses in Raipur and Chhattisgarh — from storefront UX to secure checkout and backend operations, engineered for higher conversion and growth.',
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
                'marquee' => ['Shopify Builds', 'WooCommerce Stores', 'Headless Commerce', 'Payment Integrations', 'Checkout Optimization', 'Catalog Architecture', 'CRO Improvements', 'Operational Workflows', 'Raipur eCommerce', 'CG Online Stores'],
                'consult_label' => 'Book Free eCommerce Consult',
                'secondary_cta' => 'See Commerce Scope',
            ],
            'maintenance' => [
                'name' => 'Maintenance & Support',
                'meta_title' => 'Website Maintenance Services in Raipur – Security, Uptime & Performance | Anbias',
                'meta_description' => 'Monthly website maintenance services for businesses in Raipur and Chhattisgarh — proactive updates, performance tuning, security monitoring, and fast issue resolution.',
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
