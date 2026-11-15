# Handoff Documentation — UnitedBeats (`v1.7.0` · 2026-11-15)

## Latest Session Summary (`2026-11-15`)
- **The $10,000 Haircut & Life-Changing Chair Commission by Lum (`v1.7.0`)**:
  - Built and deployed `wordpress-theme/unitedbeats/lum-commission.php` + styles in `style.css` + WordPress backend hooks in `functions.php`.
  - Live on `https://unitedbeats.org/#lum-chair` (with top HUD `Lum · $10K Chair` pill) and `https://unitedbeats.org/lum-10000-haircut/` (added to Primary menu `term_id=2`).
  - Features all 5 qualification questions for zero-expense-problem billionaires/celebrities seeking Lum (Co-Founder of United Beats, visual artist all the way to math magician with his friend Bob), live-synced **$10,000.00 USD** Private Commission Invoice, `POST /wp-json/unitedbeats/v1/lum-invoice`, WP Admin `Lum $10K Chair` (`ub_lum_invoice` CPT), email notification to `robert@unitedbeats.org`, and `@media print` official PDF invoice layout.
- **504 Outage Root-Cause Resolution (`infra/`)**:
  - Provisioned `/etc/php/8.4/fpm/pool.d/unitedbeats.conf` (`/run/php/php8.4-fpm-unitedbeats.sock`, `pm.max_children = 12`, `request_terminate_timeout = 30s`) and raised `[www]` pool `pm.max_children` from `8` to `16`.
  - Enabled `/etc/nginx/conf.d/unitedbeats-cache.conf` (`UNITEDBEATS` FastCGI cache, `X-UB-Cache: MISS -> HIT`, bypassing `POST` and `/wp-json/`).
- **CI/CD Alignment (`.github/workflows/deploy.yml` & `deploy.sh`)**:
  - Synced the complete live `wordpress-theme/unitedbeats/` (`v1.6.0` Lumbros Dark Rainbow Oil-Sheen + `v1.7.0` Lum $10K Commission) from Hetzner into git and updated `.github/workflows/deploy.yml` + `deploy.sh` to deploy the WordPress theme safely with `php -l` validation and FastCGI cache purge.

## Key Files
- `wordpress-theme/unitedbeats/lum-commission.php`: 5-question qualification dossier & $10,000.00 USD Private Commission Invoice template.
- `wordpress-theme/unitedbeats/functions.php`: Font/style enqueues, `ub_lum_invoice` CPT, `[ub_lum_commission]` shortcode, and `/wp-json/unitedbeats/v1/lum-invoice` REST route.
- `wordpress-theme/unitedbeats/style.css`: Lumbros Dark Rainbow Oil-Sheen, 12-Color Spectrum, 3.5s God-Light HUD, Sovereign Gold invoice styling, and `@media print` PDF stylesheet.
- `infra/`: Production PHP-FPM (`php-fpm-unitedbeats.conf`) and Nginx (`nginx-unitedbeats-cache.conf`, `nginx-site-unitedbeats.conf`) configurations.
- `.github/workflows/deploy.yml` & `deploy.sh`: Automated & manual WordPress theme deployment to Hetzner.
