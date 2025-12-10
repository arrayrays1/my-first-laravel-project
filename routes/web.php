<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// 1. Home Page
Route::get('/', function () {
    return Inertia::render('landingPage');
});

// 2. About Page
Route::get('/about', function () {
    return Inertia::render('aboutUs');
});

// 3. Contact Page
Route::get('/contact', function () {
    return Inertia::render('contactUs');
});

// 4. Products Page (Sending data!)
Route::get('/products', function () {
    return Inertia::render('products', [
        'products' => [
            [
                'id' => 1, 
                'name' => 'Premium Website', 
                'description' => 'A fully custom website built with Laravel.',
                'price' => 1200
            ],
            [
                'id' => 2, 
                'name' => 'SEO Package', 
                'description' => 'Get your site to the top of Google.',
                'price' => 500
            ],
            [
                'id' => 3, 
                'name' => 'Logo Design', 
                'description' => 'Professional branding for your business.',
                'price' => 300
            ],
        ]
    ]);
});
