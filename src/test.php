<?php

require 'vendor/autoload.php';

use Vinex56\SitemapGenerator\SitemapGenerator;

$pages = [
    [
        'loc' => 'https://site.ru/',
        'lastmod' => '2020-12-14',
        'priority' => '1',
        'changefreq' => 'hourly'
    ],
    [
        'loc' => 'https://site.ru/news',
        'lastmod' => '2020-12-10',
        'priority' => '0.5',
        'changefreq' => 'daily'
    ],
    [
        'loc' => 'https://site.ru/about',
        'lastmod' => '2020-12-07',
        'priority' => '0.1',
        'changefreq' => 'weekly'
    ]
];

try {
    $sitemap = new SitemapGenerator($pages, 'json', __DIR__ . '/upload/sitemap.json');
    $sitemap->generate();
    echo "Sitemap generated successfully.\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
