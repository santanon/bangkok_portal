<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
 
class ManageController extends Controller
{  
	public function list()
    {        
        return view('manage.list');
    } 

    public function add()
    {        
        $CustomHelper = new \App\CustomHelper;
         
        $m = $CustomHelper->module_setting($_GET['m']);
 
        $data['mode']                       = 'add';
        $data['text_header']                = $m['text_header'].' : เพิ่ม';
        $data['text_header_description']    = $m['text_header_description'];
        $data['col_list']                   = explode(',',$m['col_list']);
 
        return view('manage.form',$data);
    } 

    public function edit()
    {        
        $CustomHelper = new \App\CustomHelper;
         
        $m = $CustomHelper->module_setting($_GET['m']);
        
        $data['mode']                       = 'edit';
        $data['text_header']                = $m['text_header'].' : แก้ไข';
        $data['text_header_description']    = $m['text_header_description'];
        $data['col_list']                   = explode(',',$m['col_list']);
 
        $q = "SELECT * FROM tbl_".$m['table_name']." WHERE id = ?";
        $v = $_SESSION['panel_id'];
        $res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_'.$m['api_name']),$q,$v);
 
        if($res != '')
        {
            $data['rows'] = json_decode($res);
        }
        else
        {
            ?>
            ไม่พบข้อมูล...
            <?php
            exit;
        }
         
        return view('manage.form',$data);
    } 

    public function edit_logo()
    {        
        $CustomHelper = new \App\CustomHelper;
         
        $m = $CustomHelper->module_setting($_GET['m']);
        
        $data['mode']                       = 'edit';
        $data['text_header']                = $m['text_header'].' : แก้ไข';
        $data['text_header_description']    = $m['text_header_description'];
        $data['col_list']                   = explode(',',$m['col_list']);
 
        $q = "SELECT * FROM tbl_".$m['table_name']." WHERE id = ?";
        $v = $_SESSION['panel_id'];
        $res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_'.$m['api_name']),$q,$v);
 
        if($res != '')
        {
            $data['rows'] = json_decode($res);
        }
        else
        {
            ?>
            ไม่พบข้อมูล...
            <?php
            exit;
        }
         
        return view('manage.form_logo',$data);
    } 

    public function action()
    {        
        return view('manage.action');
    } 
}
