# Thandeka Kathi — Professional Website

A responsive, multi-page plain PHP website focused on human rights, environmental justice, research and publications.

## Requirements
- PHP 8.0 or later
- No database or Composer dependencies

## Run locally
From the repository root:

```bash
php -S localhost:8000 -t public public/router.php
```

Then open http://localhost:8000.

## Pages
- `/` — Home
- `/about` — Biography, experience and education
- `/publications` — Selected articles and publications
- `/research` — Research and external profiles
- `/contact` — Contact and professional links

## Deployment
Configure your PHP host's document root to the `public/` directory. Ensure URL rewriting is enabled, using `public/.htaccess` on Apache. Add an approved portrait image at `public/assets/images/thandeka-kathi-portrait.jpg` (see the images README).

The website links to original publication sources rather than reproducing full copyrighted articles. Verify all biographical details and links before launch.
