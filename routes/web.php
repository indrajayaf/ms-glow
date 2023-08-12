<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'product']); // set the default route to product

Route::get('/home', [IndexController::class, 'index']);

Route::get('/category/{category}', [IndexController::class, 'category']);

Route::get('/brand/{brand}', [IndexController::class, 'brand']);

Route::get('/detail/{id}', [IndexController::class, 'detail']);

Route::get('/product', [IndexController::class, 'product']);