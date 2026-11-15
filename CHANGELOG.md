# Changelog

All notable changes to UnitedBeats are documented in this file. Version numbers follow Semantic Versioning and are tied to `VERSION.md`.

## [1.7.0] - 2026-11-15
### Added
- **The $10,000 Haircut & Life-Changing Chair Commission by Lum (`lum-commission.php`)**:
  - Sovereign 5-question qualification questionnaire targeted toward billionaires, global celebrities, and principal founders with zero expense friction ("no expense problems") who genuinely need real help and transformation from Lum (Co-Founder of United Beats, visual artist all the way to math magician alongside his friend & co-founder Bob).
  - Live-updating **$10,000.00 USD Private Commission Invoice** ledger (`UNITED BEATS LLC // PRIVATE COMMISSION`) with itemized retainer breakdown, Sovereign Principal Attestation, print/PDF stylesheet (`@media print`), WordPress Custom Post Type (`ub_lum_invoice` — *Lum $10K Chair* in WP Admin), and `POST /wp-json/unitedbeats/v1/lum-invoice` endpoint with email dispatch to `robert@unitedbeats.org`.
  - Top starburst HUD quick-jump gold pill (`Lum · $10K Chair`) and dedicated permalink page `/lum-10000-haircut/` in the Primary navigation matrix.
- **Lumbros Dark Rainbow Oil-Sheen & 3.5s Pulsing God Light HUD (`v1.6.0`–`v1.7.0` theme sync)**:
  - Captured and version-controlled the live 80-souls hero + 12-Color Harmonic Spectrum & Dark Rainbow Oil-Sheen optical HUD (`style.css`, `functions.php`, `front-page.php`, `header.php`).
- **Dedicated PHP-FPM Pool & Nginx FastCGI Microcache (`infra/`)**:
  - Isolated `unitedbeats.org` onto `/run/php/php8.4-fpm-unitedbeats.sock` (`pm.max_children = 12`, `request_terminate_timeout = 30s`) with Nginx `UNITEDBEATS` FastCGI microcaching (`X-UB-Cache`, stale-on-error failover, `/wp-json/` & `POST` bypass) to eliminate shared `[www]` pool HTTP 504 timeouts.

### Fixed
- Guarded global hero keyboard shortcuts (`Tab`, `M`, `Space`) in `legacy-scripts.html` so typing inside `<textarea>` and `<select>` form controls works without triggering supernovae or toggling audio/hub overlays.
- Updated `.github/workflows/deploy.yml` and `deploy.sh` to deploy `wordpress-theme/unitedbeats/` safely instead of overwriting the live WordPress root with static-only v1.2.0 steps.

## [1.4.0] - 2026-11-14
### Added
- WordPress installed on Hetzner (/var/www/unitedbeats): homepage preserved exactly (legacy theme from index.html), posts below the fold, project pages + Primary menu for HyperNexus, TormentNexus, FWBer, Real Estate CRM, Bobs Game, BobMani/HymnMania, Marketing Agent, BobCoin, HyperNexus GTM, About. Theme source in wordpress-theme/unitedbeats. Pre-WP backup on server: /root/backups/unitedbeats-pre-wp-20261114.tgz.

## [1.3.1] - 2026-11-13
### Fixed
- Corrected surname spelling Korlous -> Kourlos (Harry Kourlos, Lumbros Kourlos) in the souls list and README; no Korlous instances remain.
### Added
- Agathi added to the souls list (79 souls total; counts updated in subtitle, Souls tab, and Detroit Souls Registry).

## [1.3.0] - 2026-11-13
### Changed
- Page background is now the United Beats Corporation building photo from ~/Downloads (`bg-building.jpg`, optimized 1254x1254 JPEG), darkened 42% for legibility; canvas animation renders transparent over it (stars/nebula/supernovae overlay the building).

## [1.2.0] - 2026-11-04
### Added
- Consolidated Operations Hub overlay in `index.html` featuring tabbed categorization: Physics & Visuals, Souls (63), Audio, Ecosystem, and Deploy telemetry.
- Persistent System Tray icon with interactive quick-action menu (supernova burst, hub toggle, quick mute, server state toggle).
- Comprehensive tooltip markers (`?` icon) with descriptions for every control element.
- Dynamic search filter and constellation selector for all 63 Detroit collective soul names.
- Keyboard shortcut system (`Tab` for Hub, `M` for audio mute, `Space` for supernova, `Esc` for modal exit).
- Automated GitHub Actions deployment pipeline (`.github/workflows/deploy.yml`) for push-to-deploy to Hetzner.

## [1.1.0] - 2026-11-04
### Added
- AdSense publisher verification and `ads.txt` synchronization.
- Initial governance documentation suite.
