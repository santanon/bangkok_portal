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

/* CMS */
Route::get('panel', function () {
    return view('panel.login');
});
Route::get('panel/login', function () {
    return view('panel.login');
});
Route::get('panel/templatestep1', function(){
    return View::make('panel.templatestep1');
});
Route::get('panel/templatestep2', function(){
    return View::make('panel.templatestep2');
});
Route::get('panel/templatestep3', function(){
    return View::make('panel.templatestep3');
});





/* Front */
Route::get('/', function () {
    return view('home');
});
Route::get('/coverpage', function () {
    return view('coverpage');
});


Route::get('/news', function () {
    return view('news-main');
});
Route::get('/news-detail', function () {
    return view('news-detail');
});

Route::get('/album', function () {
    return view('gallery-main');
});

Route::get('/video', function () {
    return view('video-main');
});

Route::get('/calendar', function () {
    return view('calendar-main');
});
Route::get('/calendar-detail', function () {
    return view('calendar-detail');
});

Route::get('/questionnaire', function () {
    return view('questionnaire-main');
});
Route::get('/questionnaire-detail', function () {
    return view('questionnaire-detail');
});

Route::get('/download', function () {
    return view('download-main');
});

Route::get('/faq', function () {
    return view('faq-main');
});

Route::get('/about', function () {
    return view('about-detail');
});

Route::get('/contact', function () {
    return view('contact-main');
});