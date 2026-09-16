#!/bin/bash
cd "$(dirname "$0")"
git add .
git commit -m "update $(date '+%Y-%m-%d %H:%M:%S')"
git push origin main
echo "=== listo ==="