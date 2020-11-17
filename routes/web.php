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