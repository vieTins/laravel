<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BrandProduct;

Route::get('/', [HomeController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);
Route::get('/logout', [AdminController::class, 'logout']);
Route::get('/add-category-product', [CategoryProduct::class, 'add_category_product']);
Route::get('/all-category-product', [CategoryProduct::class, 'all_category_product']);
Route::post('/save-category-product', [CategoryProduct::class, 'save_category_product']);
Route::get('/unactive-category-product/{category_product_id}', [CategoryProduct::class, 'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}', [CategoryProduct::class, 'active_category_product']);
Route::get('/add-brand-product', [BrandController::class, 'add_brand_product']);
Route::get('/all-brand-product', [BrandController::class, 'all_brand_product']);
Route::post('/save-brand-product', [BrandController::class, 'save_brand_product']);
Route::get('/unactive-brand-product/{brand_product_id}', [BrandController::class, 'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}', [BrandController::class, 'active_brand_product']);
Route::get('/edit-brand-product/{brand_product_id}', [BrandController::class, 'edit_brand_product']);
Route::post('/update-brand-product/{brand_product_id}', [BrandController::class, 'update_brand_product']);
Route::get('/delete-brand-product/{brand_product_id}', [BrandController::class, 'delete_brand_product']);
