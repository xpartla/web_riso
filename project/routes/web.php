<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use \App\Http\Controllers\QuizController;
use \App\Http\Controllers\ServicesController;
use \App\Http\Controllers\AboutController;
use \App\Http\Controllers\ArticlesController;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Session;

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
Route::group(['middleware' => ['web']], function () {
//resource routes
    Route::resource('/', IndexController::class);
    Route::resource('/quiz', QuizController::class);
    Route::resource('/services', ServicesController::class);
    Route::resource('/about', AboutController::class);
    Route::resource('/articles', ArticlesController::class);
    Route::resource('/contact', ContactController::class);
    //Route::resource('/admin', ContactController::class);

//index routes
    Route::get('/', [IndexController::class, 'index']) ->name('index.index');
    Route::get('/quiz', [QuizController::class, 'index']) ->name('quiz.index');
    Route::get('/services', [ServicesController::class, 'index']) ->name('services.index');
    Route::get('/about', [AboutController::class, 'index']) ->name('about.index');
    Route::get('/articles', [ArticlesController::class, 'index']) ->name('articles.index');
    Route::get('/contact', [ContactController::class, 'index']) ->name('contact.index');

    Route::middleware(['auth', 'admin'])->group(function (){
    Route::get('/admin_314159', [AdminController::class, 'index']) ->name('admin.index');

//admin routes
    Route::get('/admin_314159/articles/{article}/edit', [AdminController::class, 'editArticle'])->name('admin.articles.edit');
    Route::put('/admin_314159/articles/{article}', [AdminController::class, 'updateArticle'])->name('admin.articles.update');
    Route::delete('/admin_314159/articles/{article}', [AdminController::class, 'deleteArticle'])->name('admin.articles.destroy');
    Route::get('/admin_314159/articles/{article}/rename', [AdminController::class, 'renameArticle'])->name('admin.articles.rename');
    Route::put('/admin_314159/articles/{article}/rename', [AdminController::class, 'updateRenameArticle'])->name('admin.articles.updateRename');

// Routes for sections
    Route::post('/admin_314159/articles/{article}/sections', [AdminController::class, 'addSection'])->name('admin.addSection');
    Route::delete('/admin_314159/sections/{section}', [AdminController::class, 'deleteSection'])->name('admin.deleteSection');

//creating articles
    Route::get('/admin_314159/articles/create', [AdminController::class, 'createArticle'])->name('admin.articles.create');
    Route::post('/admin_314159/articles', [AdminController::class, 'store'])->name('admin.store');

});


//articles
    Route::get('/articles/{article}', [ArticlesController::class, 'show'])->name('articles.show');


//breeze bullshit
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    Route::get('lang/{locale}', function ($locale) {
        if (in_array($locale, array_keys(config('locales.available_locales')))) {
            Session::put('locale', $locale);
        }
        return redirect()->back();
    })->name('lang.change');




});



require __DIR__.'/auth.php';
