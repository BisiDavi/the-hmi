<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'pages.index');
Route::view('/events', 'pages.events');
Route::view('/menu-2', 'pages.menu2');
Route::view('/snooker-returns', 'pages.snooker');
Route::view('/reduced-hours', 'pages.reducedhours');
Route::view('/special-2', 'pages.special2');
Route::view('/latest-news', 'pages.latestnews');
Route::view('/gallery', 'pages.gallery');
Route::view('/contact-us-2', 'pages.contact');
Route::view('/covid-19', 'post.covid19');
Route::view('/2-for-1-burger', 'post.burger');
Route::view('/early-bird-specials', 'post.earlybird');
Route::view('/half-price-drinks', 'post.halfdrinks');
