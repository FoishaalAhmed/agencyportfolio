<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontend\CareerController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/careers', [CareerController::class, 'index'])->name('career');
Route::post('/careers/application', [CareerController::class, 'application'])->name('career.application');
Route::get('/meet-our-team', [TeamController::class, 'index'])->name('teams');
Route::post('/query', [TeamController::class, 'query'])->name('query');
Route::get('/contact-us', [TeamController::class, 'contact'])->name('contact');
Route::get('/photo-gallery', [GalleryController::class, 'photo'])->name('photos');
Route::get('/about-us', [GalleryController::class, 'about'])->name('about');
Route::get('/news/{slug}', [GalleryController::class, 'news'])->name('news');



require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    /** profile route start **/
    Route::view('/profile', 'backend/profile');
    Route::post('/profile', [ProfileController::class, 'photo'])->name('profile');
    Route::post('/password', [ProfileController::class, 'password'])->name('password.change');
    Route::post('/profile-update', [ProfileController::class, 'update'])->name('profile.update');
    /** profile route end **/
});
