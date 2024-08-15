# About

This is a test script for sitemap-generator

Link: https://github.com/Vinex56/sitemap-generator.git

# Instructions

1. Run `composer install`
2. Add path and extension to `test.php` to save sitemap files:
```php
$sitemap = new SitemapGenerator($pages, 'json', __DIR__ . '/upload/sitemap.json');
```
3. Run `php src/test.php`
