<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;

Route::get('/', [ProductController::class, 'index'])->name('index.index');


route::get("/supplier", [SupplierController::class, 'index'])->name('index.index');

route::get('/create', [ProductController::class, 'create'])->name('index.create');
route::post('/store', [ProductController::class, 'store'])->name('index.store');