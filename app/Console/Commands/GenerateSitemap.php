<?php

namespace App\Console\Commands;

use App\Models\Author;
use App\Models\Blog;
use App\Models\CaseStudy;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL as UrlFacade;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;
use Throwable;

class GenerateSitemap extends Command
{
    protected $signature = 'seo:generate-sitemap {--url= : Base URL to crawl, defaults to APP_URL}';

    protected $description = 'Generate sitemap.xml by crawling internal pages.';

    public function handle(): int
    {
        $baseUrl = $this->option('url') ?: config('app.url');

        if (!is_string($baseUrl) || !filter_var($baseUrl, FILTER_VALIDATE_URL)) {
            $this->error('Invalid APP_URL. Please set a valid absolute URL before generating the sitemap.');

            return self::FAILURE;
        }

        UrlFacade::forceRootUrl(rtrim($baseUrl, '/'));
        $scheme = parse_url($baseUrl, PHP_URL_SCHEME);
        if (is_string($scheme) && $scheme !== '') {
            UrlFacade::forceScheme($scheme);
        }

        $sitemap = Sitemap::create();

        $staticRoutes = [
            'home',
            'contact',
            'about',
            'privacy',
            'terms',
            'sitemap',
            'blogs.index',
            'case-studies.index',
            'services.index',
        ];

        foreach ($staticRoutes as $routeName) {
            $sitemap->add(Url::create(route($routeName)));
        }

        foreach ($this->serviceSlugs() as $slug) {
            $sitemap->add(Url::create(route('services.show', ['slug' => $slug])));
        }

        try {
            if (Schema::hasTable('blogs')) {
                Blog::query()->published()->select(['id', 'slug'])->orderBy('id')->chunkById(100, function ($blogs) use ($sitemap) {
                    foreach ($blogs as $blog) {
                        $sitemap->add(Url::create(route('blogs.show', ['slug' => $blog->slug])));
                    }
                });
            }

            if (Schema::hasTable('case_studies')) {
                CaseStudy::query()->published()->select(['id', 'slug'])->orderBy('id')->chunkById(100, function ($caseStudies) use ($sitemap) {
                    foreach ($caseStudies as $caseStudy) {
                        $sitemap->add(Url::create(route('case-studies.show', ['slug' => $caseStudy->slug])));
                    }
                });
            }

            if (Schema::hasTable('authors')) {
                Author::query()->select(['id', 'slug'])->orderBy('id')->chunkById(100, function ($authors) use ($sitemap) {
                    foreach ($authors as $author) {
                        $sitemap->add(Url::create(route('authors.show', ['slug' => $author->slug])));
                    }
                });
            }
        } catch (Throwable $e) {
            $this->warn('Database URL expansion skipped: '.$e->getMessage());
        }

        try {
            $crawledSitemap = SitemapGenerator::create($baseUrl)->getSitemap();
            foreach ($crawledSitemap->getTags() as $tag) {
                $sitemap->add($tag);
            }
        } catch (Throwable $e) {
            $this->warn('Crawl phase skipped: '.$e->getMessage());
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully at public/sitemap.xml');

        return self::SUCCESS;
    }

    /**
     * @return string[]
     */
    private function serviceSlugs(): array
    {
        return [
            'web-development',
            'web-security',
            'ai-development',
            'seo',
            'ecommerce',
            'maintenance',
        ];
    }
}
