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

