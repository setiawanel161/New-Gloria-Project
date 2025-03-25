<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PortfolioImageController;
use App\Models\PortfolioImage;
use App\Http\Controllers\PortfolioController;

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

Route::get('/', [PortfolioController::class, 'index']);

Route::get('/newlayanan', [ProductController::class, 'index']);

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/newabout', function () {
    return view('newabout');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/addProduct', [ProductController::class, 'addProductView'])->name('addProduct');
    Route::get('/updateProduk/{id}', [ProductController::class, 'updateProductView'])->name('updateProduct');
    Route::get('/addPortfolio', [PortfolioController::class, 'addPortfolioView'])->name('addPortfolio');
    Route::group(['prefix' => 'components', 'as' => 'components.'], function() {
        Route::get('/alert', function () {
            return view('admin.component.alert');
        })->name('alert');
        Route::get('/accordion', function () {
            return view('admin.component.accordion');
        })->name('accordion');
    });
});

Route::get('/add-product', [ProductController::class, 'create'])->name('add-product');
Route::post('/add-product', [ProductController::class, 'store'])->name('store-product');

Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('edit-product');
Route::put('/products/{id}/edit', [ProductController::class, 'update'])->name('edit-product');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('delete-product');

Route::post('/store-portfolio', [PortfolioController::class, 'store'])->name('store-portfolio');
Route::delete('/portfolios/{id}', [PortfolioController::class, 'destroy'])->name('delete-portfolio');