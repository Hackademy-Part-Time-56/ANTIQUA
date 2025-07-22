<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Models\Article;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/create/article', [ ArticleController::class, 'create'])->middleware('auth')->name('create.article');
Route::get('/article/index', [ ArticleController::class, 'index'])->middleware('auth')->name('article.index');

Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/category/{category}',[ArticleController::class,'byCategory'])->name('byCategory');