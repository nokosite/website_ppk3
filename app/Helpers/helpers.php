<?php

if (!function_exists('storage_url_safe')) {
    /**
     * Get storage URL dengan fallback jika file tidak ditemukan
     *
     * @param string|null $path
     * @param string|null $fallback
     * @return string
     */
    function storage_url_safe(?string $path, ?string $fallback = null): string
    {
        if (empty($path)) {
            return $fallback ?? '';
        }

        try {
            // Cek apakah file ada di storage
            if (\Illuminate\Support\Facades\Storage::disk('public')->exists($path)) {
                // Gunakan route khusus untuk serve file storage (tanpa symlink)
                // Path: /storage/{$path}
                $baseUrl = rtrim(config('app.url'), '/');
                return $baseUrl . '/storage/' . ltrim($path, '/');
            }
        } catch (\Exception $e) {
            // Jika ada error, return fallback
            return $fallback ?? '';
        }

        // Jika file tidak ada, return fallback atau string kosong
        return $fallback ?? '';
    }
}

if (!function_exists('seo_meta')) {
    /**
     * Generate SEO meta tags array
     *
     * @param string|null $title
     * @param string|null $description
     * @param string|null $image
     * @param string|null $url
     * @param string $type
     * @return array
     */
    function seo_meta(?string $title = null, ?string $description = null, ?string $image = null, ?string $url = null, string $type = 'website'): array
    {
        $siteName = config('app.name', 'Desa Wisata Jehem');
        $siteUrl = config('app.url', 'https://desa2.mkstore.id');
        $defaultImage = url('public/assets/logo/desa_jehem.webp');
        
        $title = $title ? $title . ' - ' . $siteName : $siteName;
        $description = $description ?? 'Jelajahi keindahan dan keunikan Desa Wisata Jehem. Temukan destinasi wisata menarik, galeri foto, dan informasi lengkap tentang desa wisata terbaik di Indonesia.';
        $image = $image ?? $defaultImage;
        $url = $url ?? request()->url();
        
        // Ensure absolute URL for image
        if ($image && !filter_var($image, FILTER_VALIDATE_URL)) {
            $image = $siteUrl . '/' . ltrim($image, '/');
        }
        
        return [
            'title' => $title,
            'description' => $description,
            'image' => $image,
            'url' => $url,
            'type' => $type,
            'site_name' => $siteName,
        ];
    }
}

