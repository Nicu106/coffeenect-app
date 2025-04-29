<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', function (){return view('first-page');})->name('home');
Route::get('/participate', function (){return view('participate');})->name('participate');
Route::get('/events', function (){return view('events');})->name('events');
Route::get('/contacts', function (){return view('contacts');})->name('contacts');
Route::get('/about', function (){return view('about');})->name('about');
