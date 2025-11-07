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

if (!function_exists('public_asset')) {
    /**
     * Get public asset URL yang kompatibel dengan php artisan serve dan production
     *
     * @param string $path
     * @return string
     */
    function public_asset(string $path): string
    {
        // Gunakan URL dari request jika ada (untuk php artisan serve)
        $baseUrl = request()->getSchemeAndHttpHost() ?? rtrim(config('app.url'), '/');
        
        // Deteksi apakah menggunakan php artisan serve atau production
        $isLocalServe = str_contains($baseUrl, 'localhost') || 
                        str_contains($baseUrl, '127.0.0.1') ||
                        str_contains($baseUrl, ':8000');
        
        $path = ltrim($path, '/');
        
        // Jika local serve (php artisan serve), tidak perlu prefix 'public/'
        // Jika production, perlu prefix 'public/' karena index.php di root
        if ($isLocalServe) {
            return $baseUrl . '/' . $path;
        } else {
            return $baseUrl . '/public/' . $path;
        }
    }
}

