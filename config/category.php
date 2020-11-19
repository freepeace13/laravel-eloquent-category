<?php

return [
    'model' => EloquentCategory\Category::class,

    'clusters' => [
        'products' => [
            'model' => App\Models\Product::class,
            'source_path' => __DIR__ . '../resources/products.json'
        ],

        'stores' => [
            'model' => App\Models\Store::class
        ],

        'blog_posts' => [
            'model' => App\Models\BlogPost::class
        ]
    ],
];
