<?php


use App\Livewire\Articles;
use App\Livewire\ArticleForm;
use App\Livewire\ArticleShow;
use Illuminate\Support\Facades\Route;

Route::get('/', Articles::class)->name('articles.index');
Route::get('/blog/crear', ArticleForm::class)->name('articles.create');
Route::get('/blog/{article}', ArticleShow::class)->name('articles.show');
Route::get('/blog/{article}/edit', ArticleForm::class)->name('articles.edit');