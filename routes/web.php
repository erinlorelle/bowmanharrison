<?php

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

Route::get('/', function () {return view('index');});
Route::get('/about', function () {return view('about');});
Route::get('/contact', function () {return view('contact');});
Route::get('/guides', function () {return view('guides');});
Route::get('/properties', function () {return view('properties');});
Route::get('/staging', function () {return view('staging');});
Route::get('/testimonials', function () {return view('testimonials');});
Route::get('/home', function () {return view('index');});
Route::get('/aboutjamietami', function () {return view('aboutjamietami');});
Route::get('/featured', function () {return view('featured');});
Route::get('/blog', function () {return view('blog');});
Route::get('/buy', function () {return view('buy');});
Route::get('/sell', function () {return view('sell');});
Route::get('/faq', function () {return view('faq');});
Route::get('/realtor', function () {return view('realtor');});
Route::get('/region', function () {return view('region');});
Route::get('/hawkins', function () {return view('hawkins');});
Route::get('/sullivan', function () {return view('sullivan');});
Route::get('/washington', function () {return view('washington');});
Route::get('/johnson', function () {return view('johnson');});
Route::get('/carter', function () {return view('carter');});
Route::get('/unicoi', function () {return view('unicoi');});
Route::get('/greene', function () {return view('greene');});
Route::get('/sellguide', function () {return view('sellguide');});
Route::get('/stagingguide', function () {return view('stagingguide');});
Route::get('/buyguide', function () {return view('buyguide');});
