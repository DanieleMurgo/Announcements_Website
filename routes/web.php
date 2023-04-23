<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;


Route::get('/', [PublicController::class, 'welcome'])->name('home');

// rotte articoli
Route::get('categoria/{category}', [PublicController::class, 'categoryshow'])->name('categoryshow');
Route::get('/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

// cambio lingua
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('set_language_locale');


// rotte revisore 
Route::middleware(['isRevisor'])->group(function(){
Route::get('/revisor/home', [RevisorController::class, 'index'])->name('revisor.index');
Route::patch('/accetta/articolo/{article}', [RevisorController::class, 'acceptArticle'])->name('revisor.accept_article');
Route::patch('/rifiuta/articolo/{article}', [RevisorController::class, 'rejectArticle'])->name('revisor.reject_article');
Route::patch('/review/articolo/{article}', [RevisorController::class, 'reviewArticle'])->name('revisor.review_article');
});

// Rotta utente
Route::middleware(['auth'])->group(function(){
Route::get('/user/profile', [PublicController::class, 'profile'])->name('user.profile');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->name('become.revisor');
Route::post('/become_revisor', [RevisorController::class, 'becomeRevisor'])->name('become_revisor');
Route::get('/lavoraconnoi', [RevisorController::class, 'lavoraconnoi'])->name('lavora-con-noi');
});

Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

// Ricerca Annuncio
Route::get('/ricerca/articolo/', [PublicController::class, 'searchArticles'])->name('articles.search');

// Privacy e Terms
Route::get('/privacy', [PublicController::class, 'privacy'])->name('privacy');
Route::get('/terms', [PublicController::class, 'terms'])->name('terms');

// About us 
Route::get('/about', [PublicController::class, 'about'])->name('about');



