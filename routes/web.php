<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProfileController;
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


// Frontend

Route::get('/', function () {
    return view('frontend.pages.home');
});

Route::get('about', function () {
    return view('frontend.pages.about');
});

Route::get('contact', function () {
    return view('frontend.pages.contact');
});

Route::get('book', function () {
    return view('frontend.pages.book');
});

Route::get('team', function () {
    return view('frontend.pages.team');
});

Route::get('faq', function () {
    return view('frontend.pages.faq');
});

Route::get('restaurant', function () {
    return view('frontend.pages.restaurant');
});

Route::get('reservation', function () {
    return view('frontend.pages.reservation');
});

Route::get('gallery', function () {
    return view('frontend.pages.gallery');
});

Route::get('testimonials', function () {
    return view('frontend.pages.testimonials');
});

Route::get('checkout', function () {
    return view('frontend.pages.checkout');
});

Route::get('sign-in', function () {
    return view('frontend.pages.sign-in');
});

Route::get('sign-up', function () {
    return view('frontend.pages.sign-up');
});

Route::get('terms-condition', function () {
    return view('frontend.pages.terms-condition');
});

Route::get('privacy-policy', function () {
    return view('frontend.pages.privacy-policy');
});





// Backend

Route::get('admin', function () {
    return view('backend.dashboard');
});
Route::get('admin/login', function () {
    return view('backend.login');
});
Route::get('admin/register', function () {
    return view('backend.register');
});


// Route::get('banner', function () {
//     return view('backend.banner.index');
// });

// Banner Route
Route::get('banners', [BannerController::class, 'index'])->name('banner/index');
Route::get('banner/create', [BannerController::class, 'create'])->name('banner/create');
Route::post('banner/save', [BannerController::class, 'store'])->name('banner/store');
Route::get('banner/edit/{id}', [BannerController::class, 'edit'])->name('banner/edit');
Route::get('banner/update/{id}', [BannerController::class, 'update'])->name('banner/update');
Route::get('banner/delete/{id}', [BannerController::class, 'destroy'])->name('banner/delete');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
