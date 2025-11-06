#!/bin/bash

set -euo pipefail

echo "==> Sync public/ from main into production-public (root)"

# 1) Update main
git checkout main
git pull --ff-only origin main

# 2) Switch to production-public
git checkout production-public || git checkout -b production-public

# 3) Bring public/ from main
git checkout main -- public/

# 4) Move contents of public/ to repo root
if [ -d public ]; then
  shopt -s dotglob nullglob
  git mv public/* . || true
  if [ -f public/.htaccess ]; then
    git mv public/.htaccess . || true
  fi
  shopt -u dotglob nullglob
  git rm -rf public || true
fi

# 5) Commit & push
git add -A
if git diff --staged --quiet; then
  echo "No changes to commit."
else
  git commit -m "Sync public from main to production-public"
fi

git push origin production-public

echo "==> Done."

#!/bin/bash

# Script untuk sync folder public dari main branch ke production-public branch
# Usage: ./sync-production.sh

set -e

echo "🔄 Syncing public folder from main to production-public..."

# Pastikan di branch main dan fetch latest
git checkout main
git fetch origin

# Merge latest dari origin/main
git merge origin/main --no-edit

# Checkout ke production-public
git checkout production-public

# Ambil hanya folder public dari main
git checkout main -- public/

# Commit perubahan
git add public/
if git diff --staged --quiet; then
    echo "✅ No changes to sync"
else
    git commit -m "Sync public folder from main branch - $(date '+%Y-%m-%d %H:%M:%S')"
    echo "✅ Successfully synced public folder to production-public branch"
    echo "📤 Ready to push: git push origin production-public"
fi

echo "✅ Done!"

