<?php

namespace App\Console\Commands;

use App\Models\Destination;
use App\Models\Category;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap.xml for SEO';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $baseUrl = config('app.url', 'https://desa2.mkstore.id');
        $now = now()->toAtomString();
        
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        
        // Homepage
        $xml .= $this->urlElement($baseUrl, $now, '1.0', 'daily');
        
        // Destinasi Index
        $xml .= $this->urlElement($baseUrl . '/destinasi', $now, '0.9', 'weekly');
        
        // Galeri
        $xml .= $this->urlElement($baseUrl . '/galeri', $now, '0.8', 'weekly');
        
        // Destinations
        $destinations = Destination::all();
        foreach ($destinations as $destination) {
            $url = $baseUrl . '/destinasi/' . $destination->slug;
            $lastmod = $destination->updated_at->toAtomString();
            $xml .= $this->urlElement($url, $lastmod, '0.8', 'monthly');
        }
        
        // Categories
        $categories = Category::all();
        foreach ($categories as $category) {
            $url = $baseUrl . '/destinasi/kategori/' . $category->slug;
            $lastmod = $category->updated_at->toAtomString();
            $xml .= $this->urlElement($url, $lastmod, '0.7', 'monthly');
        }
        
        $xml .= '</urlset>';
        
        // Save to public directory
        $path = public_path('sitemap.xml');
        File::put($path, $xml);
        
        $this->info("Sitemap generated successfully at: {$path}");
        $this->info("Total URLs: " . ($destinations->count() + $categories->count() + 3));
        
        return Command::SUCCESS;
    }
    
    private function urlElement(string $url, string $lastmod, string $priority, string $changefreq): string
    {
        return "  <url>\n" .
               "    <loc>{$url}</loc>\n" .
               "    <lastmod>{$lastmod}</lastmod>\n" .
               "    <changefreq>{$changefreq}</changefreq>\n" .
               "    <priority>{$priority}</priority>\n" .
               "  </url>\n";
    }
}
