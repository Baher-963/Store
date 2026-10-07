<?php

use App\Http\Controllers\categoriescontroller;
use App\Http\Controllers\Productscontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
     return $request->user();
})->middleware('auth:sanctum');
/////////////////////////////////////////////////////////////
Route::get('products',[Productscontroller::class, 'index']);//
Route::get('products/{id}',[Productscontroller::class, 'show']);//
Route::post('products',[Productscontroller::class, 'store']);//
Route::put('products/{id}',[Productscontroller::class, 'update']);//
Route::delete('products/{id}',[Productscontroller::class, 'destroy']);//
Route::post('products/{id}',[Productscontroller::class, 'amount']);//
/////////////////////////////////////////////////////////////////////
Route::get('categories',[Categoriescontroller::class, 'index']);//
Route::get('categories/{id}',[Categoriescontroller::class, 'show']);//
Route::post('categories',[Categoriescontroller::class, 'store']);//
Route::put('categories/{id}',[Categoriescontroller::class, 'update']);//
Route::delete('categories/{id}',[categoriescontroller::class, 'destroy']);//
////////////////////////////////////////////////////////////////////////////
// Route::apiResource('products', Productscontroller::class);
// Route::apiResource('categories', Categoriescontroller::class);