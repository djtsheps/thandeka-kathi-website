<?php $pageTitle = $pageTitle ?? 'Thandeka Kathi | Human Rights & Environmental Justice'; $metaDescription = $metaDescription ?? 'Professional profile of Thandeka Kathi, a South African human rights lawyer working on environmental justice and public-interest law.'; ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?= e($metaDescription) ?>">
<meta name="theme-color" content="#173d32">
<title><?= e($pageTitle) ?></title>
<link rel="stylesheet" href="/assets/css/style.css">
<script src="/assets/js/main.js" defer></script>
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header"><div class="container nav-wrap">
<a class="brand" href="/" aria-label="Thandeka Kathi home"><span class="brand-mark">TK</span><span><strong>Thandeka Kathi</strong><small>Human rights · Environmental justice</small></span></a>
<button class="menu-toggle" type="button" data-menu-toggle aria-expanded="false" aria-label="Open navigation menu">Menu</button>
<nav class="nav-links" data-nav aria-label="Main navigation">
<?= nav_link('/', 'Home') ?><?= nav_link('/about', 'About') ?><?= nav_link('/publications', 'Publications') ?><?= nav_link('/research', 'Research') ?><?= nav_link('/contact', 'Contact') ?>
</nav><a class="nav-cta" href="/contact">Get in touch ↗</a>
</div></header>
<main id="main">
