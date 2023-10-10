<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class,'index']);
Route::get("/profile/{username}",[ProductController::class, 'profile']);
Route::post("/product",[ ProductController::class, "createProduct"]);
route::get('/product',[ProductController::class, 'viewProduct']);
route::put('/product',[ProductController::class,'updateProduct']);
Route::delete('/product',[ProductController::class,'deleteProduct']);
