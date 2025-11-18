<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// E-Commerce Routes (akan dikembangkan)
Route::get('/products', function () {
    return 'Products Page - Coming Soon!';
});

Route::get('/about', function () {
    return 'Laravel E-Commerce Starter - Development in Progress';
});
