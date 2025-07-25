<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use App\Models\Article;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/create/article', [ ArticleController::class, 'create'])->middleware('auth')->name('create.article');
Route::get('/article/index', [ ArticleController::class, 'index'])->middleware('auth')->name('article.index');

Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/category/{category}',[ArticleController::class,'byCategory'])->name('byCategory');

Route::get('/search/article',[PublicController::class,'searchArticles'])->name('article.search');

Route::get('revisor/index',[RevisorController::class, 'index'])->name('revisor.index');

Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');

Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');

Route::get( '/revisor/index',[RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index');