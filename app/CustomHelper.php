<?php
namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 

class CustomHelper 
{
    function API_CALL($url,$q,$v)
    { 
        $q = base64_encode($q);
        $q = str_replace('=','|',$q);
         
        $v = base64_encode($v);
        $v = str_replace('=','|',$v);
          
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"q=".$q."&v=".$v);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch,CURLOPT_TIMEOUT, 30);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, false); 
        $output = curl_exec($ch); 
        $connect_count = 1;
        while($output == FALSE && $connect_count <= 3)
        {
            $output = curl_exec($ch); 
            sleep(3);
            $connect_count++;
        } 
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close ($ch);
 
        if($output == FALSE)
        {
            return '';
        }
        else
        {
            if(trim($httpcode) == '200')
            {
                return $output;
            }
            else
            {
                return '';
            }  
        } 
    } 

    function API_URL($file)
    {
        return Storage::disk('local')->get($file.'.php'); 
    } 
}