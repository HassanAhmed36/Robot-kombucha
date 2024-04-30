<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteSettingController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('fresh', function () {
    Artisan::call('migrate:fresh --seed --force');
    Artisan::call('optimize:clear');
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    Artisan::call('view:cache');
    Artisan::call('optimize');
    return redirect()->route('home')->with('success', 'project fresh suucessfully');
});
Route::view('/', 'index')->name('home');
Route::view('/organic-cherry-cola-kumbucha', 'cherry-cola')->name('cherry.cola');
Route::view('/organic-honey-cola-kumbucha', 'honey-cola')->name('honey.cola');
Route::view('/organic-pineapple-and-mango-kombucha', 'organic-mango')->name('pineapple.mango');
Route::view('/the-science', 'science')->name('science');
Route::view('/contact', 'contact')->name('contact');
Route::get('/Product', [PagesController::class, 'getProducts'])->name('product');
Route::get('/Product/{id}', [PagesController::class, 'getOneProduct'])->name('products.details');
Route::get('/checkout/{id}', [PagesController::class, 'checkout'])->name('checkout');
Route::post('/post-order', [PagesController::class, 'postOrder'])->name('post.order');
Route::get('/news-letter/{code?}', [NewsLetterController::class, 'getNewsLetter'])->name('news.letter');
Route::get('/send-passcode', [NewsLetterController::class, 'sendPasscode'])->name('send.passcode');

Route::get('/send-verification-email', [NewsLetterController::class, 'sendVarificationMail'])->name('send.verification.email');

Route::get('/check-passcode', [NewsLetterController::class, 'checkPasscode'])->name('check.passcode');
Route::get('/send-address', [NewsLetterController::class, 'sendAddress'])->name('send.address');

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

        Route::get('/site-setting', [SiteSettingController::class, 'index'])->name('site.setting');
        Route::get('/post-site-setting', [SiteSettingController::class, 'update'])->name('post.site.setting');

        Route::get('/Orders', [PagesController::class, 'order'])->name('order');
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});
