<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\LanguageController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/contact', [InquiryController::class, 'showForm'])->name('contact');
Route::post('/contact', [InquiryController::class, 'submitForm'])->name('contact.submit');
Route::get('language/{locale}', [LanguageController::class, 'switchLang'])->name('language.switch');
