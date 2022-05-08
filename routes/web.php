<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductsController::class);


Route::prefix('posts')->group(function () {
    Route::get('index', [PostsController::class, 'index']);
    Route::post('store', [PostsController::class, 'store']);
    Route::post('edit', [PostsController::class, 'edit']);
    Route::delete('destroy', [PostsController::class, 'destroy']);
});
