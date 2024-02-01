<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleShowController;


Route::get('/', [ArticleShowController::class, 'index'])->name('article.show.all');

Route::get('/article/{slug}', [ArticleShowController::class, 'oneArticleShow'])->name('article.show.one');
