# About

This is a test script for sitemap-generator

Link: https://github.com/Vinex56/sitemap-generator.git

# Instructions

1. Clone project:
```sh
git clone https://github.com/Vinex56/test-sitemap-generator.git
```
2. Run `composer install`
3. Add path and extension to `src/test.php` to save sitemap files:
```php
$sitemap = new SitemapGenerator($pages, 'json', __DIR__ . '/upload/sitemap.json');
```
4. Run `php src/test.php`
