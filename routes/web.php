<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Route::get('/', function () {
//     return view('web.homepage');
// });

Route::get('/', function () {
    $title = "Homepage";
    return view('web.homepage', ['title' => $title]);
});


Route::get('products', function () {
    $title = "Products";
    return view("web.products", ['title' => $title]);
});

Route::get('product/{slug}', function ($slug) {
    return "halaman single product - " . $slug;
});

Route::get('categories', function () {
    return view("web.categories");
});

Route::get('category/{slug}', function ($slug) {
    return "halaman single category - " . $slug;
});

Route::get('cart', function () {
    $title = "Cart";
    return view("web.cart", ['title' => $title]);
});

Route::get('checkout', function () {
    $title = "co";
    return view("web.checkout", ['title' => $title]);
});


require __DIR__ . '/auth.php';