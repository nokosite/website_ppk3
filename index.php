<?php
// Path ke folder public Laravel
// Sesuaikan dengan nama folder project Anda di Hostinger
// Jika project ada di level yang sama dengan public_html: ../website_ppk3/public
// Jika project ada di dalam public_html: ./website_ppk3/public

// Coba beberapa kemungkinan path
$possiblePaths = [
    __DIR__ . '/../website_ppk3/public',  // Project di level yang sama dengan public_html
    __DIR__ . '/../public',                 // Jika public langsung di atas public_html
    __DIR__ . '/public',                    // Jika public ada di dalam public_html
];

$publicPath = null;
foreach ($possiblePaths as $path) {
    if (is_dir($path)) {
        $publicPath = $path;
        break;
    }
}

// Validasi path
if (!$publicPath || !is_dir($publicPath)) {
    http_response_code(500);
    echo 'Invalid public path. Tried: ' . implode(', ', array_map(function($p) {
        return htmlspecialchars($p, ENT_QUOTES, 'UTF-8');
    }, $possiblePaths));
    exit;
}

// Pindah working directory ke folder public
chdir($publicPath);

// Jalankan index.php asli Laravel
require $publicPath . '/index.php';