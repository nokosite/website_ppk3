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
                return \Illuminate\Support\Facades\Storage::url($path);
            }
        } catch (\Exception $e) {
            // Jika ada error, return fallback
            return $fallback ?? '';
        }

        // Jika file tidak ada, return fallback atau string kosong
        return $fallback ?? '';
    }
}

