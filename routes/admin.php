<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\GeneralController;
use App\Http\Controllers\Admin\IntroVideoController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\QueryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;

Route::group(['prefix' => '/admin', 'as' => 'admin.', 'middleware' => ['admin', 'auth']], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
    Route::put('contacts/update/{id}', [ContactController::class, 'update'])->name('contacts.update');
    Route::resource('users', UserController::class);
    Route::resource('galleries', GalleryController::class);
    Route::resource('portfolios', PortfolioController::class);
    Route::resource('news', NewsController::class);
    Route::resource('pages', PageController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('teams', TeamController::class);
    Route::resource('testimonials', TestimonialController::class)->except(['create', 'show']);
    Route::resource('clients', ClientController::class)->except(['create', 'show' ]);
    Route::resource('generals', GeneralController::class)->except(['create', 'show', 'edit' ]);
    Route::resource('queries', QueryController::class)->except(['create', 'store', 'edit', 'update']);
    Route::resource('videos', IntroVideoController::class)->except(['create', 'store', 'destroy', 'show']);
});
