<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class PanelController extends Controller
{
    public function login(Request $request)
    {        
        //Storage::disk('local')->put('file.txt', 'ภาษาไทย');
        //Storage::disk('local')->get('file.txt');
        //Storage::disk('local')->exists('file.txt');
        
        if(isset($_SESSION['portal_login']) && $_SESSION['portal_login'] == 1)
        {
            return view('panel.login');
        }
        else
        {
            return view('panel.login');
        } 
    }
}
