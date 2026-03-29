<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Blog;
use App\Models\CaseStudy;
use App\Models\Category;
use Illuminate\Database\Seeder;

class InsightsSeeder extends Seeder
{
    public function run(): void
    {
        $author = Author::query()->updateOrCreate(
            ['slug' => 'bedang-banerjee'],
            [
                'name' => 'Bedang Banerjee',
                'designation' => 'Founder & Senior Laravel Architect',
                'years_experience' => 8,
                'bio' => 'Bedang leads architecture, delivery strategy, and performance engineering at Anbias. He works across Laravel, Next.js, AI-assisted workflows, and growth-focused technical execution for businesses in India, the US, and Dubai.',
                'meta_title' => 'Bedang Banerjee | Founder & Senior Laravel Architect | Anbias',
                'meta_description' => 'Author profile of Bedang Banerjee, Founder and Senior Laravel Architect at Anbias with expertise in scalable web systems, AI workflows, and SEO-focused engineering.',
            ]
        );

        $blogAiCategory = Category::query()->updateOrCreate(
            ['slug' => 'ai-transformation'],
            [
                'name' => 'AI Transformation',
                'type' => Category::TYPE_BLOG,
                'description' => 'AI systems, automation strategies, and delivery optimization.',
            ]
        );

        $blogEngineeringCategory = Category::query()->updateOrCreate(
            ['slug' => 'web-engineering'],
            [
                'name' => 'Web Engineering',
                'type' => Category::TYPE_BLOG,
                'description' => 'Modern frontend, backend, and architecture decisions.',
            ]
        );

        $caseGrowthCategory = Category::query()->updateOrCreate(
            ['slug' => 'digital-growth'],
            [
                'name' => 'Digital Growth',
                'type' => Category::TYPE_CASE_STUDY,
                'description' => 'Growth-focused build and marketing execution.',
            ]
        );

        $caseAutomationCategory = Category::query()->updateOrCreate(
            ['slug' => 'workflow-automation'],
            [
                'name' => 'Workflow Automation',
                'type' => Category::TYPE_CASE_STUDY,
                'description' => 'Internal systems and sales process acceleration.',
            ]
        );

        Blog::query()->updateOrCreate(
            ['slug' => 'agentic-ai-and-how-it-transforms-the-world-of-it'],
            [
                'author_id' => $author->id,
                'category_id' => $blogAiCategory->id,
                'title' => 'Agentic AI and How It Transforms the World of IT',
                'excerpt' => 'Agentic AI moves beyond assistants into autonomous execution loops. This article explains what changes for engineering, operations, and business outcomes.',
                'content' => $this->agenticAiContent(),
                'featured_image_path' => 'images/featured/blog-agentic-ai.svg',
                'is_published' => true,
                'published_at' => now()->subDays(3),
                'meta_title' => 'Agentic AI and How It Transforms the World of IT | Anbias Blog',
                'meta_description' => 'Learn how Agentic AI is reshaping IT delivery, operations, and software teams through autonomous workflows, orchestration, and faster execution cycles.',
                'og_title' => 'Agentic AI and the Future of IT',
                'og_description' => 'A practical breakdown of how Agentic AI changes delivery models, productivity, and IT strategy.',
                'canonical_url' => 'https://anbias.com/blogs/agentic-ai-and-how-it-transforms-the-world-of-it',
            ]
        );

        Blog::query()->updateOrCreate(
            ['slug' => 'nextjs-15-features-what-changed-and-why-its-better'],
            [
                'author_id' => $author->id,
                'category_id' => $blogEngineeringCategory->id,
                'title' => "Next.js 15 Features: What Changed and Why It's Better",
                'excerpt' => 'A practical walkthrough of Next.js 15 updates, developer impact, and why the release is a strong step forward for performance and DX.',
                'content' => $this->nextJsContent(),
                'featured_image_path' => 'images/featured/blog-nextjs15.svg',
                'is_published' => true,
                'published_at' => now()->subDays(1),
                'meta_title' => "Next.js 15 Features: What Changed and Why It's Better | Anbias Blog",
                'meta_description' => 'Explore Next.js 15 feature updates, architecture improvements, and practical reasons it is better for modern production web apps.',
                'og_title' => 'Next.js 15: What Changed and Why It Is Better',
                'og_description' => 'A concise engineering view of Next.js 15 improvements and adoption impact.',
                'canonical_url' => 'https://anbias.com/blogs/nextjs-15-features-what-changed-and-why-its-better',
            ]
        );

        CaseStudy::query()->updateOrCreate(
            ['slug' => 'custom-education-website-seo-growth-case-study'],
            [
                'author_id' => $author->id,
                'category_id' => $caseGrowthCategory->id,
                'title' => 'Custom Website for a Leading Educational Academy with Nationwide SEO Growth',
                'excerpt' => 'We designed and built a custom website, then executed technical SEO, GMB optimization, and listing strategy to drive top-page rankings nationwide.',
                'content' => $this->educationCaseContent(),
                'featured_image_path' => 'images/featured/case-education-seo.svg',
                'is_published' => true,
                'published_at' => now()->subDays(5),
                'meta_title' => 'Educational Academy SEO Growth Case Study | Anbias',
                'meta_description' => 'Case study: Anbias built a custom academy website and executed SEO, GMB, and listing strategies to achieve top-page Google visibility across India.',
                'og_title' => 'Educational Academy Growth: Website + SEO + Listings',
                'og_description' => 'How a custom build and SEO execution helped a leading academy scale visibility nationwide.',
                'canonical_url' => 'https://anbias.com/case-studies/custom-education-website-seo-growth-case-study',
            ]
        );

        CaseStudy::query()->updateOrCreate(
            ['slug' => 'sales-crm-automation-workflow-case-study'],
            [
                'author_id' => $author->id,
                'category_id' => $caseAutomationCategory->id,
                'title' => 'Sales CRM Platform to Automate and Track Team Workflows',
                'excerpt' => 'We built a custom CRM platform that helped the sales team track pipeline movement and automate repetitive operational steps.',
                'content' => $this->crmCaseContent(),
                'featured_image_path' => 'images/featured/case-sales-crm.svg',
                'is_published' => true,
                'published_at' => now()->subDays(2),
                'meta_title' => 'Sales CRM Automation Case Study | Anbias',
                'meta_description' => 'Case study: Anbias built a custom sales CRM to automate workflows, improve pipeline tracking, and accelerate team operations.',
                'og_title' => 'Sales CRM Automation Workflow Case Study',
                'og_description' => 'How a custom CRM improved sales process visibility and automation.',
                'canonical_url' => 'https://anbias.com/case-studies/sales-crm-automation-workflow-case-study',
            ]
        );
    }

    private function agenticAiContent(): string
    {
        return <<<'HTML'
<h2>What is Agentic AI?</h2>
<p>Agentic AI refers to systems that can plan, decide, and execute multi-step workflows with limited human intervention. Unlike traditional assistants that answer one prompt at a time, agentic systems can maintain objective context, call tools, evaluate intermediate outcomes, and continue until a target state is achieved.</p>
<h2>Why IT teams care now</h2>
<p>IT operations and software teams are under pressure to deliver faster while maintaining quality. Agentic models can automate repetitive orchestration tasks like release checks, incident triage, dependency audits, documentation synchronization, and test suite analysis. Teams that use these systems effectively shift human effort toward architecture, product thinking, and risk management.</p>
<h2>How this changes delivery models</h2>
<p>In a traditional setup, execution is human-driven and sequential. With agentic systems, execution becomes event-driven and continuous. A well-defined agent pipeline can validate pull requests, run compliance checks, summarize risk patterns, and open structured action items for teams. The result is shorter lead time and more predictable delivery.</p>
<h2>Risk and governance</h2>
<p>Agentic AI is powerful but requires control. Organizations should define execution boundaries, approval layers, and audit trails. The best implementations combine autonomy with human gatekeeping for high-impact actions. In short: automate the loop, but keep ownership visible.</p>
<h2>What leaders should do next</h2>
<p>Start with one high-friction workflow, instrument it, and evaluate measurable outcomes. Focus on cycle-time reduction, defect rate movement, and operational effort saved. Teams that build this muscle now will have a structural advantage in the next phase of IT competition.</p>
HTML;
    }

    private function nextJsContent(): string
    {
        return <<<'HTML'
<h2>Next.js 15 at a glance</h2>
<p>Next.js 15 continues the framework’s move toward stronger defaults, improved performance ergonomics, and cleaner production behavior. It focuses on reducing ambiguity in rendering, improving build/runtime predictability, and tightening developer workflows.</p>
<h2>What changed</h2>
<p>The release improves server-first behavior, modernizes caching controls, and refines app-router workflows for real-world production apps. It also improves the way developers reason about data-fetching boundaries and dynamic rendering behavior.</p>
<h2>Why it is better for teams</h2>
<p>Most teams don’t fail because of missing features; they fail because of complexity and inconsistency. Next.js 15 improves day-to-day clarity. Faster feedback loops, better DX around routing and data patterns, and more explicit behavior in production make it easier for teams to ship confidently.</p>
<h2>Performance and scalability impact</h2>
<p>With better rendering defaults and improved runtime control, teams can reduce unnecessary hydration and keep server workloads predictable. Combined with disciplined architecture, this typically translates into stronger Core Web Vitals and smoother user experience.</p>
<h2>Should you upgrade?</h2>
<p>If your product depends on modern React patterns and app-router architecture, upgrading is usually worth it. Plan migration in phases: audit dependency compatibility, benchmark current pages, and roll out high-impact routes first.</p>
HTML;
    }

    private function educationCaseContent(): string
    {
        return <<<'HTML'
<h2>Client context</h2>
<p>A high-performing educational academy needed a stronger national digital presence. Their older website had weak architecture, poor performance, and inconsistent local visibility signals across regions.</p>
<h2>What we delivered</h2>
<ul>
  <li>Designed and built a custom conversion-focused website</li>
  <li>Implemented technical SEO foundations (site structure, metadata, schema, indexing hygiene)</li>
  <li>Optimized Google Business Profile and regional listing consistency</li>
  <li>Built a content and location signal framework for broader ranking coverage</li>
</ul>
<h2>Execution highlights</h2>
<p>We treated the project as a full digital growth pipeline, not only a website build. Design, information architecture, search intent mapping, and local discovery optimization were run as one coordinated program.</p>
<h2>Business outcome</h2>
<p>The academy achieved first-page visibility for key educational intent queries across multiple regions, with significant growth in qualified leads and stronger national brand recall.</p>
HTML;
    }

    private function crmCaseContent(): string
    {
        return <<<'HTML'
<h2>Client context</h2>
<p>A sales-led business was managing pipeline updates and follow-ups across spreadsheets and messaging tools, creating delays, missed handoffs, and weak forecasting visibility.</p>
<h2>What we delivered</h2>
<ul>
  <li>Built a custom CRM tailored to the team’s internal sales stages</li>
  <li>Implemented workflow automation for repetitive follow-up actions</li>
  <li>Created role-based dashboards for managers and sales representatives</li>
  <li>Added reporting modules for conversion tracking and activity visibility</li>
</ul>
<h2>Execution highlights</h2>
<p>The platform was designed around real sales behavior, not generic CRM assumptions. We optimized for speed of entry, clarity of status transitions, and reduction of manual tasks that consumed team bandwidth.</p>
<h2>Business outcome</h2>
<p>The sales team gained reliable pipeline visibility, faster response cycles, and improved operational consistency. Leadership gained cleaner forecasting and better control over execution quality.</p>
HTML;
    }
}
