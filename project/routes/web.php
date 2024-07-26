<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use \App\Http\Controllers\QuizController;
use \App\Http\Controllers\ServicesController;
use \App\Http\Controllers\AboutController;
use \App\Http\Controllers\ArticlesController;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\AdminController;

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
Route::resource('/', IndexController::class);
Route::resource('/quiz', QuizController::class);
Route::resource('/services', ServicesController::class);
Route::resource('/about', AboutController::class);
Route::resource('/articles', ArticlesController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/admin', ContactController::class);

Route::get('/', [IndexController::class, 'index']) ->name('index.index');
Route::get('/quiz', [QuizController::class, 'index']) ->name('quiz.index');
Route::get('/services', [ServicesController::class, 'index']) ->name('services.index');
Route::get('/about', [AboutController::class, 'index']) ->name('about.index');
Route::get('/articles', [ArticlesController::class, 'index']) ->name('articles.index');
Route::get('/contact', [ContactController::class, 'index']) ->name('contact.index');
Route::get('/admin', [AdminController::class, 'index']) ->name('admin.index');


Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');

