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
}