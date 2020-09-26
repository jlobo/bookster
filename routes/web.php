<?php

use Illuminate\Support\Facades\Route;
use App\Product;
use App\Manufactorer;

Route::get('/', function () {
    return redirect("/product");
});

Route::get('/test1', function () {
    $products = Manufactorer::find(1)->products;
    dd($products);
});

Route::get('/test2', function () {
    $manufactorer = Product::find(1)->manufactorer;
    dd($manufactorer);
});

Route::resource('product', 'ProductController');