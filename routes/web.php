<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/create/article', [ ArticleController::class, 'create'])->middleware('auth')->name('create.article');
Route::get('/article/index', [ ArticleController::class, 'index'])->middleware('auth')->name('article.index');


