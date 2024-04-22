<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Symfony\Component\CssSelector\Node\FunctionNode;




Route::view('/', 'index')->name('home');
Route::view('/organic-cherry-cola-kumbucha', 'cherry-cola')->name('cherry.cola');
Route::view('/organic-honey-cola-kumbucha', 'honey-cola')->name('honey.cola');
Route::view('/organic-pineapple-and-mango-kombucha', 'organic-mango')->name('pineapple.mango');

Route::get('/Product', [PagesController::class, 'getProducts'])->name('product');
Route::get('/Product/{id}', [PagesController::class, 'getOneProduct'])->name('products.details');


Route::view('/checkout', 'checkout')->name('checkout');


Route::post('subscribe-news-letter', [NewsLetterController::class, 'store'])->name('subscribe.news.letter');
Route::post('submit-contact-form', [ContactController::class, 'store'])->name('submit.contact.form');

Route::prefix('Admin')->group(function () {
    Route::redirect('/', '/login');
    Route::controller(AuthController::class)
        ->group(function () {
            Route::get('/login', 'login')->name('login');
            Route::post('/submit-login', 'submitLogin')->name('submit.login');
        });

    Route::middleware('check.auth')->group(function () {
        Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

        Route::get('/News-letters', [NewsLetterController::class, 'index'])->name('news.letter.index');
        Route::get('/Contact-us', [ContactController::class, 'index'])->name('contact.index');

        Route::controller(ProductController::class)
            ->prefix('Product')
            ->group(function () {
                Route::get('/', 'index')->name('product.index');
                Route::post('/store', 'store')->name('product.store');
                Route::get('/edit', 'edit')->name('product.edit');
                Route::post('/update/{id}', 'update')->name('product.update');
                Route::get('/delete/{id}', 'destroy')->name('product.delete');
                Route::get('/product-image-delete/{id}', 'deleteImage')->name('product.image.delete');
            });


        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});
