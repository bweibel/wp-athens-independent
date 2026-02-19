# WordPress Project Context

## Stack & Environment
- Local dev: Local Flywheel
- Hosting: Hostinger (SSH access)
- Deployment: Manual Deploy
- Version control: Git, GitHub
- OS: macOS / Arch Linux

## Project Structure
- Theme: `/wp-content/themes/athens-independent/` (custom, not a child theme)
- Plugins: [ACF]
- ACF: yes
- Build tool: none
- CSS: scss
- JS: [vanilla / React blocks]

## Coding Standards
- PHP: WordPress Coding Standards (WPCS)
- JS: ESLint, prefer vanilla or minimal dependencies
- No `@import` in CSS -- use `@use` or a build step
- Escape all output: `esc_html()`, `esc_attr()`, `esc_url()`, `wp_kses_post()`
- Nonce all forms and AJAX requests
- Prefix all functions, hooks, and globals: `athensindie_`
- No direct DB queries unless `$wpdb` is unavoidable; use WP APIs first

## WordPress Patterns I Prefer
- Custom post types and taxonomies: registered via `register_post_type()` in a dedicated file, not a plugin
- Options/settings: use `register_setting()` + Settings API, not raw `update_option()` calls
- AJAX: prefer WP REST API over `admin-ajax.php` for new work
- Enqueue scripts/styles via `wp_enqueue_scripts`, never hardcoded in templates
- Template hierarchy over `query_posts()`; use `pre_get_posts` for archive modifications

## Git Workflow
- `main` = production
- `develop` = staging / integration branch
- Feature branches: `feature/[description]`
- Hotfix branches: `hotfix/[description]`
- Commit style: conventional commits (`feat:`, `fix:`, `chore:`, etc.)
- Never commit: `wp-config.php`, uploads, `.env`, vendor (if using Composer)

## Deployment
- CI/CD via GitHub Actions
- Deploys to Hostinger via SSH/rsync or git pull
- Build artifacts (compiled CSS/JS) are committed to `main` [or: built in CI -- specify]
- After deploy: `wp cache flush`, optionally `wp rewrite flush`

## Environment Variables / Config
- Local: `.env` loaded via Lando or `wp-config-local.php`
- Sensitive keys never in version control
- Use `wp_get_environment_type()` to branch behavior by environment

## Common WP CLI Commands
```bash
wp post list --post_type=page --fields=ID,post_title,post_status
wp search-replace 'http://old.domain' 'https://new.domain' --dry-run
wp cache flush
wp rewrite flush
wp plugin list --status=active
```

## Things to Avoid Suggesting
- Classic editor patterns (use block editor / FSE where applicable)
- jQuery unless already a project dependency
- Plugins for things easily done in 10 lines of PHP
- Modifying core files
- `extract()` in templates

## Current Project Notes
<!-- Update per-project -->
- Project: Athens Independent
- Client: Athens Independent
- Theme slug: athens-independent
- Function prefix: athens-independent_
- Key plugins: []
- Known quirks: none