<?php
// Path absolut ke folder public Laravel Anda.
// Contoh: jika struktur di server: /home/USER/laravel_app/public
$publicPath = __DIR__ . '/../laravel_app/public';

// Validasi path
if (!is_dir($publicPath)) {
    http_response_code(500);
    echo 'Invalid public path: ' . htmlspecialchars($publicPath, ENT_QUOTES, 'UTF-8');
    exit;
}

// Pindah working directory ke folder public
chdir($publicPath);

// Jalankan index.php asli Laravel
require $publicPath . '/index.php';