<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\ManageController;

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

/* Panel */
//Route::any('/', [PanelController::class,'login']);
Route::any('panel-admin/login', [PanelController::class,'login']);
Route::any('panel-admin/login_check', [PanelController::class,'login_check']);
Route::any('panel-admin/logout', [PanelController::class,'logout']);
Route::any('panel-admin/templatestep1', function(){
    return View::make('panel.templatestep1');
});
Route::any('panel-admin/templatestep2', function(){
    return View::make('panel.templatestep2');
});
Route::any('panel-admin/templatestep3', function(){
    return View::make('panel.templatestep3');
});

/* Management */
Route::any('manage-admin/list', [ManageController::class,'list']);
Route::any('manage-admin/add', [ManageController::class,'add']);
Route::any('manage-admin/edit', [ManageController::class,'edit']);
Route::any('manage-admin/edit_logo', [ManageController::class,'edit_logo']);
Route::any('manage-admin/action', [ManageController::class,'action']);



/* Front */
Route::any('/', function () {
    return view('home');
});

Route::any('/coverpage', function () {
    return view('coverpage');
});

Route::any('/news', function () {
    return view('news-main');
});

Route::any('/news-detail', function () {
    return view('news-detail');
});

Route::any('/album', function () {
    return view('gallery-main');
});

Route::any('/video', function () {
    return view('video-main');
});

Route::any('/calendar', function () {
    return view('calendar-main');
});
Route::any('/calendar-detail', function () {
    return view('calendar-detail');
});

Route::any('/questionnaire', function () {
    return view('questionnaire-main');
});
Route::any('/questionnaire-detail', function () {
    return view('questionnaire-detail');
});

Route::any('/download', function () {
    return view('download-main');
});

Route::any('/sitemap', function () {
    return view('sitemap');
});

Route::any('/faq', function () {
    return view('faq-main');
});

Route::any('/about', function () {
    return view('about-detail');
});

Route::any('/contact', function () {
    return view('contact-main');
});

Route::any('/vote', function () {
    return view('vote-main');
});

Route::any('/vote-detail', function () {
    return view('vote-detail');
});

//template2
Route::any('/home-2', function () {
    return view('home-2');
});

Route::any('/about-2', function () {
    return view('about-detail-2');
});

Route::any('/news-2', function () {
    return view('news-main-2');
});

Route::any('/news-detail-2', function () {
    return view('news-detail-2');
});

Route::any('/album-2', function () {
    return view('gallery-main-2');
});

Route::any('/video-2', function () {
    return view('video-main-2');
});

Route::any('/download-2', function () {
    return view('download-main-2');
});

Route::any('/faq-2', function () {
    return view('faq-main-2');
});