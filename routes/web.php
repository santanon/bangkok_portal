<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\FrontController;
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

$CustomHelper = new \App\CustomHelper;
$TextLanguage = new \App\TextLanguage;
 
/* Panel */
//Route::any('/', [PanelController::class,'login']);
Route::any('เข้าสู่ระบบ',                   [PanelController::class,'login']);
Route::any('ออกจากระบบ',                 [PanelController::class,'logout']);
Route::any('panel-admin/login',         [PanelController::class,'login']);
Route::any('panel-admin/login_check',   [PanelController::class,'login_check']);
Route::any('panel-admin/logout',        [PanelController::class,'logout']);
Route::any('เริ่มต้นใช้งานเว็บไซต์/ขั้นตอนที่1',               [PanelController::class,'templatestep1']);
Route::any('เริ่มต้นใช้งานเว็บไซต์/ขั้นตอนที่2',               [PanelController::class,'templatestep2']);
Route::any('เริ่มต้นใช้งานเว็บไซต์/ขั้นตอนที่3',               [PanelController::class,'templatestep3']);
Route::any('panel-admin/templatestep1_submit',     [PanelController::class,'templatestep1_submit']); 
Route::any('panel-admin/templatestep2_submit',     [PanelController::class,'templatestep2_submit']);
Route::any('panel-admin/templatestep3_submit',     [PanelController::class,'templatestep3_submit']);
Route::any('panel-admin/link_helper',              [PanelController::class,'link_helper']);

/* Management */
Route::any('manage-admin/list',         [ManageController::class,'list']);
Route::any('manage-admin/add',          [ManageController::class,'add']);
Route::any('manage-admin/edit',         [ManageController::class,'edit']);
Route::any('manage-admin/add_submit',   [ManageController::class,'add_submit']);
Route::any('manage-admin/edit_submit',  [ManageController::class,'edit_submit']);
Route::any('manage-admin/edit_submit2',  [ManageController::class,'edit_submit2']);
Route::any('manage-admin/edit_logo',    [ManageController::class,'edit_logo']);

Route::any('manage-admin/edit_website', [ManageController::class,'edit_website']);
Route::any('manage-admin/edit_account', [ManageController::class,'edit_account']);
Route::any('manage-admin/change_password_submit', [ManageController::class,'change_password_submit']);
Route::any('manage-admin/edit_profile', [ManageController::class,'edit_profile']);
Route::any('manage-admin/change_email_submit', [ManageController::class,'change_email_submit']); 
Route::any('manage-admin/edit_bg',      [ManageController::class,'edit_bg']);
Route::any('manage-admin/edit_bg_submit',[ManageController::class,'edit_bg_submit']); 
Route::any('manage-admin/edit_html_css',[ManageController::class,'edit_html_css']);
Route::any('manage-admin/edit_html_css_submit',[ManageController::class,'edit_html_css_submit']);

Route::any('manage-admin/contact_info1',[ManageController::class,'contact_info1']);
Route::any('manage-admin/info_submit',[ManageController::class,'info_submit']);


Route::any('manage-admin/edit_copyright',[ManageController::class,'edit_copyright']);
Route::any('manage-admin/edit_copyright_submit',[ManageController::class,'edit_copyright_submit']);
Route::any('manage-admin/edit_social',  [ManageController::class,'edit_social']);
Route::any('manage-admin/edit_social_submit',  [ManageController::class,'edit_social_submit']);
Route::any('manage-admin/edit_statistic',[ManageController::class,'edit_statistic']);
Route::any('manage-admin/edit_search',  [ManageController::class,'edit_search']);
Route::any('manage-admin/edit_search_submit',  [ManageController::class,'edit_search_submit']);
Route::any('manage-admin/edit_ga',      [ManageController::class,'edit_ga']);
Route::any('manage-admin/edit_ga_submit',      [ManageController::class,'edit_ga_submit']);
Route::any('manage-admin/setting',      [ManageController::class,'setting']);
Route::any('manage-admin/change_template',      [ManageController::class,'change_template']);
Route::any('manage-admin/comment',      [ManageController::class,'comment']);
Route::any('manage-admin/comment_text', [ManageController::class,'comment_text']);
Route::any('manage-admin/comment_delete',[ManageController::class,'comment_delete']);
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
Route::any('manage-admin/url_submit',   [ManageController::class,'url_submit']);
Route::any('manage-admin/panels/{mod}',	[ManageController::class,'panels']);
Route::any('manage-admin/panels/{mod}/{act}',	[ManageController::class,'panels']);
Route::any('manage-admin/panels/{mod}/{act}/{id}',	[ManageController::class,'panels']);
Route::any('manage-admin/panels/{mod}/{act}/{id}/{id2}',	[ManageController::class,'panels']);
Route::any('manage-admin/panels/{mod}/{act}/{id}/{id2}/{main_type}',	[ManageController::class,'panels']); 
Route::any('manage-admin/save_sort_box', [ManageController::class,'save_sort_box']);
Route::any('manage-admin/read',         [ManageController::class,'read']);
Route::any('manage-admin/export',       [ManageController::class,'export']);
Route::any('manage-admin/organize_submit',       [ManageController::class,'organize_submit']);

Route::any('/', function () {
    return redirect('เข้าสู่ระบบ');
});
 
$q = "SELECT web_url,web_name FROM tbl_portal_website WHERE status = '1'";	 	
$v = '';
$res = $CustomHelper->API_CALL_route($CustomHelper->API_URL('api_website'),$q,$v);
$q = json_decode($res);

foreach($q as $web_obj) 
{  
    Route::any($web_obj->web_url,[FrontController::class,'index']); 
    Route::any($web_obj->web_url.'/index',[FrontController::class,'index']);
    Route::any($web_obj->web_url.'/contact',[FrontController::class,'contact']);
    Route::any($web_obj->web_url.'/coverpages',[FrontController::class,'coverpages']);
    Route::any($web_obj->web_url.'/ita',[FrontController::class,'ita']);
    Route::any($web_obj->web_url.'/organization',[FrontController::class,'organization']);
    Route::any($web_obj->web_url.'/sitemap',[FrontController::class,'sitemap']);
    Route::any($web_obj->web_url.'/page/{v1?}/{v2?}/{v3?}/{v4?}/{v5?}/{v6?}/{v7?}/{v8?}/{v9?}/{v10?}',[FrontController::class,'page']);
}   
 
