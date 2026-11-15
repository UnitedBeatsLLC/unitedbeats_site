#!/bin/bash
set -euo pipefail
# Deploy UnitedBeats WordPress theme & AdSense ads.txt to Hetzner
# Domains: unitedbeats.org, unitedbeats.net, unitedbeats.site
# Pass --force-static ONLY if intentionally reverting to a standalone static index.html site.

SERVER="hetzner"
REMOTE_DIR="/var/www/unitedbeats"
THEME_DIR="$REMOTE_DIR/wp-content/themes/unitedbeats"

if [[ "${1:-}" == "--force-static" ]]; then
  echo "WARNING: --force-static requested. Uploading static index.html & ads.txt only..."
  scp index.html ads.txt "$SERVER:$REMOTE_DIR/"
  ssh "$SERVER" "chown www-data:www-data $REMOTE_DIR/index.html $REMOTE_DIR/ads.txt && nginx -t && systemctl reload nginx"
  exit 0
fi

echo "=== Deploying UnitedBeats WordPress Theme (v1.7.0) ==="
ssh "$SERVER" "mkdir -p $THEME_DIR"
scp -r wordpress-theme/unitedbeats/* "$SERVER:$THEME_DIR/"
scp ads.txt "$SERVER:$REMOTE_DIR/ads.txt"

ssh "$SERVER" "chown -R www-data:www-data $THEME_DIR $REMOTE_DIR/ads.txt && find $THEME_DIR -type d -exec chmod 755 {} + && find $THEME_DIR -type f -exec chmod 644 {} + && for f in $THEME_DIR/*.php; do php -l \"\$f\"; done && rm -rf /var/cache/nginx/unitedbeats/* && nginx -t && systemctl reload nginx"

echo "=== Deployment Complete ==="
echo "  https://unitedbeats.org"
echo "  https://unitedbeats.org/#lum-chair"
echo "  https://unitedbeats.org/lum-10000-haircut/"
