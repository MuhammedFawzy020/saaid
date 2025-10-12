SEO improvements made

Files changed:
- resources/views/frontend/layouts/layout.blade.php — added lang attribute, dynamic meta description/keywords, canonical, Twitter tags, JSON-LD Organization schema.
- resources/views/frontend_v2/layout/header.blade.php — same updates applied.
- public/robots.txt — added Sitemap reference.

How to set per-page meta tags in Blade views

In any Blade view extend the layout and define these sections to set page-specific meta tags:

@section('title', 'Page Title')
@section('meta_description', 'Short description for this page')
@section('meta_keywords', 'comma,separated,keywords')
@section('twitter_title', 'Optional Twitter title')
@section('twitter_description', 'Optional Twitter description')
@section('twitter_image', asset('path/to/image.jpg'))

Example at top of a view:

@extends('frontend.layouts.layout')

@section('title', 'Service — Plumbing')
@section('meta_description', 'Professional plumbing services in Riyadh — fast and reliable.')

Notes & next steps

- Sitemap: there is a static `public/sitemap.xml`. Consider replacing it with a dynamic sitemap route (e.g., /sitemap.xml) generated from routes and database entries so it stays fresh.
- Hreflang: If the site supports multiple languages, add hreflang links in the head to point to alternate language pages.
- Image alt text: ensure important images (logos, hero images) have meaningful alt attributes.
- Performance: use responsive images, compress assets, enable server-side caching and a CDN for global reach.
- Structured data: extend JSON-LD to include LocalBusiness, breadcrumbs, and product/job postings where applicable.

Validation checklist

- Use Google Search Console to submit sitemap and check coverage.
- Use the Rich Results Test for JSON-LD.
- Use Lighthouse for performance and SEO audits.
