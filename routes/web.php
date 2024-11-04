<?php

use App\Service\Product\ProductServiceInterface;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
    
});

Route::get('shop/product/{id}', [App\Http\Controllers\Front\ShopController::class, 'show']);