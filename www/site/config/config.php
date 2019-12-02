<?php

@include __DIR__ . DS . 'secrets' . DS . 'credentials.php';

return [
    'ssl' => true,

    'cache.pages.active' => true,
    'cache.pages.ignore' => function ($page) {
        return $page->no_cache()->bool();
    },

    'sitemap.ignore' => [
        'error'
    ],

    'languages' => false,
    'languages.detect' => false,
    'locale' => 'fr_FR.utf-8',

    'thumbs' => [
        'quality' => 80,
    ],

    'cache' => [
        'pages' => [
            'active' => true,
            'ignore' => function ($page) {
                // only cache product and legal pages
                if (in_array((string)$page->intendedTemplate(), ['checkout'])) {
                    return false;
                }
                return true;
            },
        ]
    ],

    'routes' => [],

    'hooks' => []
];
