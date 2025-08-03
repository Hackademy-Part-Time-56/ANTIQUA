<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/create/article', [ ArticleController::class, 'create'])->middleware(['auth','verified'])->name('create.article');
Route::get('/article/index', [ ArticleController::class, 'index'])->middleware(['auth'])->name('article.index');

Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/category/{category}',[ArticleController::class,'byCategory'])->name('byCategory');

Route::get('/search/article',[PublicController::class,'searchArticles'])->name('article.search');

Route::get('revisor/index',[RevisorController::class, 'index'])->name('revisor.index')->middleware('isRevisor');

Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');

Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');

Route::get( '/revisor/index',[RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index');

Route::get('/revisor/request',[RevisorController::class,'becomeRevisor'])->middleware('auth')->name('become.revisor');

Route::get('/make/revisor/{user}',[RevisorController::class,'makeRevisor'])->name('make.revisor');

Route::post('/lingua/{lang}', [PublicController::class,'setLanguage'])->name('setLocale');

Route::post('/articles/{article}/favorite', [ArticleController::class, 'toggleFavorite'])->middleware('auth')->name('articles.favorite');

Route::get('/preferiti', [ArticleController::class, 'favorites'])->middleware('auth')->name('articles.favorites');

// Rotte verifica email Laravel
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/'); // o dove vuoi reindirizzare dopo la verifica
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function () {
    request()->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Link di verifica inviato!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/user/{user}', [UserProfileController::class, 'show'])->name('user.profile');
Route::get('/profile/edit', [UserProfileController::class, 'edit'])->middleware('auth')->name('profile.edit');
Route::post('/profile/update', [UserProfileController::class, 'update'])->middleware('auth')->name('profile.update');

Route::get('/chi-siamo', [PublicController::class, 'chiSiamo'])->name('chi-siamo');
Route::get('/lavora-con-noi', [PublicController::class, 'lavoraConNoi'])->name('lavora-con-noi'); // già esistente
Route::get('/stampa', [PublicController::class, 'stampa'])->name('stampa');
Route::get('/contatti', [PublicController::class, 'contatti'])->name('contatti');

Route::get('/centro-assistenza', [PublicController::class, 'centroAssistenza'])->name('centro-assistenza');
Route::get('/come-funziona', [PublicController::class, 'comeFunziona'])->name('come-funziona');
Route::get('/spedizione', [PublicController::class, 'spedizione'])->name('spedizione');
Route::get('/pagamenti', [PublicController::class, 'pagamenti'])->name('pagamenti');
Route::get('/sicurezza', [PublicController::class, 'sicurezza'])->name('sicurezza');

Route::get('/termini-condizioni', [PublicController::class, 'terminiCondizioni'])->name('termini-condizioni');
Route::get('/informativa-privacy', [PublicController::class, 'privacy'])->name('informativa-privacy');
Route::get('/politica-cookie', [PublicController::class, 'cookie'])->name('politica-cookie');
Route::get('/note-legali', [PublicController::class, 'noteLegali'])->name('note-legali');

Route::get('/categorie-popolari', [PublicController::class, 'categoriePopolari'])->name('categorie-popolari');
Route::get('/aste-in-corso', [PublicController::class, 'asteInCorso'])->name('aste-in-corso');
Route::get('/app-mobili', [PublicController::class, 'appMobili'])->name('app-mobili');
Route::get('/blog', [PublicController::class, 'blog'])->name('blog');