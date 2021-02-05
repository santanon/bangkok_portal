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
Route::any('panel-admin/login',         [PanelController::class,'login']);
Route::any('panel-admin/login_check',   [PanelController::class,'login_check']);
Route::any('panel-admin/logout',        [PanelController::class,'logout']);
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
Route::any('manage-admin/list',         [ManageController::class,'list']);
Route::any('manage-admin/add',          [ManageController::class,'add']);
Route::any('manage-admin/edit',         [ManageController::class,'edit']);
Route::any('manage-admin/add_submit',   [ManageController::class,'add_submit']);
Route::any('manage-admin/edit_submit',  [ManageController::class,'edit_submit']);
Route::any('manage-admin/edit_logo',    [ManageController::class,'edit_logo']);
Route::any('manage-admin/action',       [ManageController::class,'action']);
Route::any('manage-admin/search',       [ManageController::class,'search']); 
Route::any('manage-admin/delete',       [ManageController::class,'delete']);
Route::any('manage-admin/lang',         [ManageController::class,'lang']);
Route::any('manage-admin/save_list',    [ManageController::class,'save_list']);
Route::any('manage-admin/search_reset',	[ManageController::class,'search_reset']);
Route::any('manage-admin/set_cat',		[ManageController::class,'set_cat']);
Route::any('manage-admin/set_cat_sort',	[ManageController::class,'set_cat_sort']);
Route::any('manage-admin/set_cat_from_page',[ManageController::class,'set_cat_from_page']);
Route::any('manage-admin/set_cat_from_main_menu',	[ManageController::class,'set_cat_from_main_menu']);
Route::any('manage-admin/set_cat_from_top_menu',	[ManageController::class,'set_cat_from_top_menu']);
Route::any('manage-admin/set_cat_from_footer_menu',	[ManageController::class,'set_cat_from_footer_menu']);
Route::any('manage-admin/set_cat_page',	[ManageController::class,'set_cat_page']);
Route::any('manage-admin/set_max_rows',	[ManageController::class,'set_max_rows']);
Route::any('manage-admin/set_page_num',	[ManageController::class,'set_page_num']);
Route::any('manage-admin/set_order_by',	[ManageController::class,'set_order_by']);
Route::any('manage-admin/set_status_show',	[ManageController::class,'set_status_show']);
Route::any('manage-admin/set_status_hide',	[ManageController::class,'set_status_hide']);
Route::any('manage-admin/set_sort',		[ManageController::class,'set_sort']);
Route::any('manage-admin/panels/{mod}',	[ManageController::class,'panels']);
Route::any('manage-admin/panels/{mod}/{act}',	[ManageController::class,'panels']);
Route::any('manage-admin/panels/{mod}/{act}/{id}',	[ManageController::class,'panels']);
Route::any('manage-admin/panels/{mod}/{act}/{id}/{id2}',	[ManageController::class,'panels']);
Route::any('manage-admin/panels/{mod}/{act}/{id}/{id2}/{main_type}',	[ManageController::class,'panels']); 

Route::any('/', [PanelController::class,'web_home']);
 
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

Route::any('/ita', function () {
    return view('ita-page');
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

Route::any('/questionnaire-2', function () {
    return view('questionnaire-main-2');
});

Route::any('/questionnaire-detail-2', function () {
    return view('questionnaire-detail-2');
});

Route::any('/vote-2', function () {
    return view('vote-main-2');
});

Route::any('/vote-detail-2', function () {
    return view('vote-detail-2');
});

Route::any('/calendar-2', function () {
    return view('calendar-main-2');
});

Route::any('/calendar-detail-2', function () {
    return view('calendar-detail-2');
});

Route::any('/contact-2', function () {
    return view('contact-main-2');
});

Route::any('/sitemap-2', function () {
    return view('sitemap-2');
});
Route::any('/ita-2', function () {
    return view('ita-page-2');
});


//Template3
Route::any('/home-3', function () {
    return view('home-3');
});
Route::any('/about-3', function () {
    return view('about-detail-3');
});
Route::any('/news-3', function () {
    return view('news-main-3');
});
Route::any('/news-detail-3', function () {
    return view('news-detail-3');
});
Route::any('/album-3', function () {
    return view('gallery-main-3');
});
Route::any('/video-3', function () {
    return view('video-main-3');
});
Route::any('/download-3', function () {
    return view('download-main-3');
});
Route::any('/faq-3', function () {
    return view('faq-main-3');
});
Route::any('/questionnaire-3', function () {
    return view('questionnaire-main-3');
});
Route::any('/questionnaire-detail-3', function () {
    return view('questionnaire-detail-3');
});
Route::any('/vote-3', function () {
    return view('vote-main-3');
});
Route::any('/vote-detail-3', function () {
    return view('vote-detail-3');
});
Route::any('/contact-3', function () {
    return view('contact-main-3');
});
Route::any('/sitemap-3', function () {
    return view('sitemap-3');
});
Route::any('/ita-3', function () {
    return view('ita-page-3');
});

//template4
Route::any('/home-4', function () {
    return view('home-4');
});

Route::any('/about-4', function () {
    return view('about-detail-4');
});

Route::any('/news-4', function () {
    return view('news-main-4');
});

Route::any('/news-detail-4', function () {
    return view('news-detail-4');
});

Route::any('/album-4', function () {
    return view('gallery-main-4');
});

Route::any('/video-4', function () {
    return view('video-main-4');
});

Route::any('/download-4', function () {
    return view('download-main-4');
});

Route::any('/faq-4', function () {
    return view('faq-main-4');
});

Route::any('/questionnaire-4', function () {
    return view('questionnaire-main-4');
});

Route::any('/questionnaire-detail-4', function () {
    return view('questionnaire-detail-4');
});

Route::any('/vote-4', function () {
    return view('vote-main-4');
});

Route::any('/vote-detail-4', function () {
    return view('vote-detail-4');
});

Route::any('/calendar-4', function () {
    return view('calendar-main-4');
});

Route::any('/calendar-detail-4', function () {
    return view('calendar-detail-4');
});

Route::any('/contact-4', function () {
    return view('contact-main-4');
});

Route::any('/sitemap-4', function () {
    return view('sitemap-4');
});

Route::any('/ita-4', function () {
    return view('ita-page-4');
});

//template5
Route::any('/home-5', function () {
    return view('home-5');
});
Route::any('/about-5', function () {
    return view('about-detail-5');
});
Route::any('/news-5', function () {
    return view('news-main-5');
});
Route::any('/news-detail-5', function () {
    return view('news-detail-5');
});
Route::any('/album-5', function () {
    return view('gallery-main-5');
});
Route::any('/video-5', function () {
    return view('video-main-5');
});
Route::any('/download-5', function () {
    return view('download-main-5');
});
Route::any('/faq-5', function () {
    return view('faq-main-5');
});
Route::any('/questionnaire-5', function () {
    return view('questionnaire-main-5');
});
Route::any('/questionnaire-detail-5', function () {
    return view('questionnaire-detail-5');
});
Route::any('/vote-5', function () {
    return view('vote-main-5');
});
Route::any('/vote-detail-5', function () {
    return view('vote-detail-5');
});
Route::any('/contact-5', function () {
    return view('contact-main-5');
});
Route::any('/sitemap-5', function () {
    return view('sitemap-5');
});
Route::any('/ita-5', function () {
    return view('ita-page-5');
});