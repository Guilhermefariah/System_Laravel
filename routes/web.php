<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'products'], function() {
    Route::get('', ['uses' => ProductController::class, 'index'])->name('products');
    Route::get('create', ['uses' => ProductController::class, 'create'])->name('products.create');
    Route::post('', ['uses' => ProductController::class, 'store'])->name('products.store');
    Route::get('{id}', ['uses' => ProductController::class, 'show'])->name('products.show');
    Route::get('{id}/edit', ['uses' => ProductController::class, 'edit'])->name('products.edit');
    Route::put('{id}', ['uses' => ProductController::class, 'update'])->name('products.update');
    Route::delete('{id}', ['uses' => ProductController::class, 'destroy'])->name('products.destroy');
});
