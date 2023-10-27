<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Loader\Configurator\RouteConfigurator;

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
Route::get('/user',[UserController::class,'viewUser']); 
Route::get('dashboard', [DashboardController::class, 'index'])->name('user.index');
Route::get('landing', [LandingController::class, 'landing'])->name('landing');

