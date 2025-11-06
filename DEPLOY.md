# Panduan Deploy ke Hostinger

## Step-by-Step: Sync dari Main ke Production-Public

### 1. Update Main Branch
```bash
git checkout main
git pull origin main
```

### 2. Checkout ke Production-Public
```bash
git checkout production-public
```

### 3. Ambil Folder Public dari Main
```bash
git checkout main -- public/
```

### 4. Pindahkan Isi Public ke Root
```bash
# Pindahkan semua file dan folder dari public/ ke root
git mv public/* .
git mv public/.htaccess . 2>/dev/null || true
```

### 5. Hapus Folder Public yang Kosong
```bash
git rm -rf public
```

### 6. Commit Perubahan
```bash
git add -A
git commit -m "Sync public folder from main - $(date '+%Y-%m-%d %H:%M:%S')"
```

### 7. Push ke GitHub
```bash
git push origin production-public
```

### 8. Kembali ke Main (Opsional)
```bash
git checkout main
```

---

## Deploy ke Hostinger

### Opsi 1: Clone Langsung ke public_html
```bash
cd /home/USER/domains/desa.mkstore.id/
git clone -b production-public https://github.com/nokosite/website_ppk3.git public_html
```

### Opsi 2: Pull Update di public_html yang Sudah Ada
```bash
cd /home/USER/domains/desa.mkstore.id/public_html
git fetch origin
git checkout production-public
git pull origin production-public
```

---

## Catatan Penting

1. **Pastikan di Hostinger:**
   - Document Root sudah diarahkan ke `public_html/`
   - PHP version minimal 8.1
   - `.env` sudah di-set dengan konfigurasi production

2. **Setelah Deploy:**
   - Pastikan symlink storage sudah dibuat: `php artisan storage:link`
   - Set permissions: `chmod -R 755 storage bootstrap/cache`
   - Clear cache: `php artisan config:cache && php artisan route:cache && php artisan view:cache`

3. **Jika Ada Error:**
   - Cek `.env` file sudah benar
   - Cek database connection
   - Cek file permissions
   - Cek error log: `storage/logs/laravel.log`

---

## Quick Reference

**Sync dari Main ke Production:**
```bash
git checkout main && git pull origin main
git checkout production-public
git checkout main -- public/
git mv public/* . && git mv public/.htaccess . 2>/dev/null || true
git rm -rf public
git add -A && git commit -m "Sync from main"
git push origin production-public
git checkout main
```

**Deploy di Hostinger:**
```bash
cd public_html
git fetch origin
git checkout production-public
git pull origin production-public
```

