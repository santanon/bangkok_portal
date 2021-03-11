<?php
namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

class CustomHelper 
{ 
	function add_log($title,$this_user,$this_user_id,$this_action)
    {     
		$log_data = new \stdClass();
		$log_data->title = $title;
		$log_data->this_user = $this_user;
		$log_data->this_user_id = $this_user_id;
		$log_data->this_action = $this_action;
		$log_data->ip = $_SERVER['REMOTE_ADDR'];
		$log_data->session_id = session_id();
		$log_data->last_create = date('U'); 
		$log_data->last_create_full = date('d/m/Y [H:i:s]'); 
		$log_data->last_create_thai = 'เมื่อวัน'.$this->tran_day_thai(date('l')).'ที่ '.date('d').' '.$this->tran_mon_thai(date('m')).' พ.ศ. '.(date('Y')+543).' เวลา '.date('H.i').' น.'; 
		 
		$this_qr = ''; 
		foreach($log_data as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $this->API_CALL($this->API_URL($this->model_to_api('Portal_website_log_model')),"INSERT INTO tbl_portal_website_log SET ".$this_qr."",'');    
    }  
	
	function API_CALL($url,$q,$v)
    {   
		$k = 'Si@mEPoRtaL@2564';  
        $algo = 'AES-128-ECB';  

        $old_q = $q;
        $old_v = $v;
 
        $q = openssl_encrypt($q,$algo,$k);
 
        $q = str_replace('=','|',$q);
        $q = str_replace('+','^',$q);
 
        $v = openssl_encrypt($v,$algo,$k);
        $v = str_replace('=','|',$v);
        $v = str_replace('+','^',$v);
  
        //$v = base64_encode($v);
        //$v = str_replace('=','|',$v);

        $this_date = date('Y-m-d H:i:s');
  
		//if(isset($_SESSION['panel_login']) && $_SESSION['panel_login'] == '1')
		if(true)
		{
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS,"q=".$q."&v=".$v);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
			curl_setopt($ch,CURLOPT_TIMEOUT, 30);
			curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, false); 
			$output = curl_exec($ch); 
			/*
			$connect_count = 1;
			while($output == FALSE && $connect_count <= 1)
			{
				$output = curl_exec($ch); 
				//sleep(3);
				$connect_count++;
			} 
			*/
			$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close ($ch);

			$this_return = '';

			if($output == FALSE)
			{
				$this_return = '';
			}
			else
			{
				if(trim($httpcode) == '200')
				{
					$this_return = $output;
				}
				else
				{
					$this_return = '';
				}  
			} 
			//Storage::append('api/'.date('Y-m-d').'.log', "date real =".$this_date."\ndate cache=".date('Y-m-d H:i:s')."\nurl=".$url."\nq=".$q."\nv=".$v."\nold_q=".$old_q."\nold_v=".$old_v."\no=".$output."\n-------------------");
			return $this_return;
		}
		else
		{
			return Cache::remember(openssl_encrypt($url.$q.$v,$algo,$k),99999, function() use ($url,$q,$v,$old_q,$old_v,$this_date)
			{ 
				$ch = curl_init();
				curl_setopt($ch,CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS,"q=".$q."&v=".$v);
				curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
				curl_setopt($ch,CURLOPT_TIMEOUT, 30);
				curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, false); 
				$output = curl_exec($ch); 
				/*
				$connect_count = 1;
				while($output == FALSE && $connect_count <= 1)
				{
					$output = curl_exec($ch); 
					//sleep(3);
					$connect_count++;
				} 
				*/
				$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
				curl_close ($ch);

				$this_return = '';

				if($output == FALSE)
				{
					$this_return = '';
				}
				else
				{
					if(trim($httpcode) == '200')
					{
						$this_return = $output;
					}
					else
					{
						$this_return = '';
					}  
				} 
				//Storage::append('api/'.date('Y-m-d').'.log', "date real =".$this_date."\ndate cache=".date('Y-m-d H:i:s')."\nurl=".$url."\nq=".$q."\nv=".$v."\nold_q=".$old_q."\nold_v=".$old_v."\no=".$output."\n-------------------");
				return $this_return;
			});
		}
 
		
		 
        /*return Cache::remember(openssl_encrypt($url.$q.$v,$algo,$k), 1, function() use ($url,$q,$v,$old_q,$old_v,$this_date)
        { 
            
        });*/
    }

	function API_CALL_route($url,$q,$v)
    {  
		$k = 'Si@mEPoRtaL@2564';  
        $algo = 'AES-128-ECB';  

        $old_q = $q;
        $old_v = $v;
 
        $q = openssl_encrypt($q,$algo,$k);
 
        $q = str_replace('=','|',$q);
        $q = str_replace('+','^',$q);
 
        $v = openssl_encrypt($v,$algo,$k);
        $v = str_replace('=','|',$v);
        $v = str_replace('+','^',$v);
  
        //$v = base64_encode($v);
        //$v = str_replace('=','|',$v);

        $this_date = date('Y-m-d H:i:s');

		return Cache::remember(openssl_encrypt($url.$q.$v.'1',$algo,$k),0, function() use ($url,$q,$v,$old_q,$old_v,$this_date)
		{ 
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS,"q=".$q."&v=".$v);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
			curl_setopt($ch,CURLOPT_TIMEOUT, 30);
			curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, false); 
			$output = curl_exec($ch); 
			/*
			$connect_count = 1;
			while($output == FALSE && $connect_count <= 1)
			{
				$output = curl_exec($ch); 
				//sleep(3);
				$connect_count++;
			} 
			*/
			$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close ($ch);

			$this_return = '';

			if($output == FALSE)
			{
				$this_return = '';
			}
			else
			{
				if(trim($httpcode) == '200')
				{
					$this_return = $output;
				}
				else
				{
					$this_return = '';
				}  
			} 
			//Storage::append('api/'.date('Y-m-d').'.log', "date real =".$this_date."\ndate cache=".date('Y-m-d H:i:s')."\nurl=".$url."\nq=".$q."\nv=".$v."\nold_q=".$old_q."\nold_v=".$old_v."\no=".$output."\n-------------------");
			return $this_return;
		}); 
    }

    function API_URL($file)
    {
        return Storage::disk('local')->get($file.'.php'); 
    } 

    function check_panel_login()
    { 
        if(isset($_SESSION['panel_login']) && $_SESSION['panel_login'] == 1)
        {
			return '1';
        }
        else
        {
            return '';
        } 
    }

    function model_to_table($a)
	{
		$a = str_replace('_model','',$a);
		$a = 'tbl_'.$a;
		return strtolower($a);
	}
	
	function model_to_api($a)
	{
		$a = str_replace('Portal_','',$a);
		$a = str_replace('_model','',$a);
		$a = 'api_'.$a;
		return strtolower($a);
	}
	
	function module_setting($mod_name)
    { 
        $c = "\App\Conf\\".$mod_name;
		$m = new $c(); 
        return $m;
    }
	
    function L($th,$en)
    { 
        if(isset($_SESSION['portal_lang']) && $_SESSION['portal_lang'] == 'english')
		{
			return $en;
		}
		else
		{
			return $th;	
		}
    } 
	
	 function content_item($v1,$v2,$v3)
    { 
		$a = '<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
		<td style="width:' . $v3 . '"><div style="height:22px; padding-top:7px;"> &nbsp; &nbsp; ' . $v1 . ' : </div></td><td>' . $v2 . '</td>
		</tr>
		</table>';
		
		return $a;
    } 
	
	 function check_hash($value)
	{
		$hash = 5381; 
		$value = strtoupper($value); 
		for($i = 0; $i < strlen($value); $i++) { 
			$hash = (($hash << 5) + $hash) + ord(substr($value, $i)); 
		} 
		return $hash; 
	}
	
	 function check_type($type,$string,$path = '',$ex1 = '')
    {  
		switch($type)
		{ 
			case 'img1' :  
				$a = '<img src="' . base_url() . 'upload/admin/' . $string . '" height="100">'; 
				break;
			case 'last_create' : 
				if($string == '0')
				{
					$a = '-';
					
				}
				else
				{
					$b = date('d/m/y [H:i:s]',$string);
					$a = '<a title="' . $b . '" style="cursor:help">'.$this->time_elapsed_string($string).'</a>';	
				} 
				break;
			case 'last_update' : 
				if($string == '0')
				{
					$a = '-';
					
				}
				else
				{
					$b = date('d/m/y [H:i:s]',$string);
					$a = '<a title="' . $b . '" style="cursor:help">'.$this->time_elapsed_string($string).'</a>';	
				} 
				break;
			case 'last_login' : 
				if($string == '0')
				{
					$a = '-';
					
				}
				else
				{
					$b = date('d/m/y [H:i:s]',$string);
					$a = '<a title="' . $b . '" style="cursor:help">'.$this->time_elapsed_string($string).'</a>';	
				} 
				break;
			case 'register_confirm' :  
				if($string == '1')
				{
					$a = 'Completed &nbsp; ( ' . $ex1 . ' )'; 
				}
				else
				{
					$a = 'Not Confirm';	
				}
				break;
			case 'web_code' :  
				$a = '[ <a href="' . $path . '" target="_blank"><u>Force Login</u></a> ] &nbsp; [ <a href="' . URL_ROOT . $ex1 . '?f=1" target="_blank"><u>View Website</u></a> ]'; 
				break;
			case 'en_title' :  
				$a = $string . ' &nbsp; &nbsp; <a href="'.$path.'" onclick="if(!confirm(\'Confirm?\')){ return false; }">[ RESTORE ]</a>'; 
				break;
			case 'user_id' :  
				$a = "-";
				if(strlen($string) > 0)
				{
					$a = $string;
				} 
				break;
			case 'full_title' :  
				$a = '<a href="' . $path . '" target="_blank" style="color:black; text-decoration:underline;">' . $string . '</a>'; 
				break;
			default :
				$a = "-";
				if(strlen($string) > 0)
				{
					$a = $string;
				} 
				break;	
		} 
		
		return $a;
    } 
	
	 function head_i_box($p)
    { 
		$a = '<table align="center" width="500" border="0" cellspacing="0" cellpadding="0" style="border:0px;">
		<tr>
		<td style="width:1px;"><div align="right"><img src="' . $p . 'assets/admin/images/table-2-top-left.png" width="11" height="11"></div></td>
		<td style="background-image:url(' . $p . 'assets/admin/images/table-2-top.png); background-repeat:repeat-x; width:99%"><img src="' . $p . 'assets/admin/images/dot.gif" height="11"></td>
		<td style="width:1px;"><img src="' . $p . 'assets/admin/images/table-2-top-right.png" width="11" height="11"></td>
		</tr>
		<tr>
		<td style="background-image:url(' . $p . 'assets/admin/images/table-2-left.png); background-repeat:repeat-y;"><img src="' . $p . 'assets/admin/images/dot.gif" height="11"></td>
		<td style="background-image:url(' . $p . 'assets/admin/images/table-bg.png);">';
		
		return $a;
    } 
	
	 function foot_i_box($p)
    { 
		$a = '</td>
		<td style="background-image:url(' . $p . 'assets/admin/images/table-2-right.png); background-repeat:repeat-y;"><img src="' . $p . 'assets/admin/images/dot.gif" height="11"></td>
		</tr>
		<tr>
		<td><div align="right"><img src="' . $p . 'assets/admin/images/table-2-bottom-left.png" width="11" height="11"></div></td>
		<td style="background-image:url(' . $p . 'assets/admin/images/table-2-bottom.png); background-repeat:repeat-x;"><img src="' . $p . 'assets/admin/images/dot.gif" height="11"></td>
		<td><img src="' . $p . 'assets/admin/images/table-2-bottom-right.png" width="11" height="11"></td>
		</tr>
		</table>';
		
		return $a;
    } 
	
	 function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
	} 
	
	 function input_text($p,$n,$v,$t = "text")
    { 
		$n2 = str_replace("[]","",$n);
		$a = '<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
		<td style="width:1px;"><img src="' . $p . 'assets/admin/images/input-textbox-1.png"></td>
		<td style="background-image:url(' . $p . 'assets/admin/images/input-textbox-2.png); background-repeat:repeat-x;"><input name="' . $n . '" id="' . $n2 . '" type="' . $t . '" style="height:23px; width:100%; border:0px;font-family:Tahoma;font-weight:bold" maxlength="255" align="absmiddle" value=\'' . str_replace("'","",$v) . '\'></td>
		<td style="width:1px;"><img src="' . $p . 'assets/admin/images/input-textbox-3.png"></td>
		</tr>
		</table>';
		
		return $a;
    }
	
	/* function l($th,$en)
	{
		if(@$_SESSION['portal_lang'] == 'thai')
		{
			return $th;	
		}
		else
		{
			return $en;
		}
	}*/
 
	function get_file_form_code($a,$index)
	{ 		
		if(strpos($a,'^') > -1)
		{
			$arr = explode('^',$a);

			if(strpos($arr[0],'|') > -1)
			{
				$arr = explode('|',$arr[0]);
				return $arr[$index];
			} 
			else
			{
				return $arr[0];
			}
		} 
		else
		{
			if(strpos($a,'|') > -1)
			{
				$arr = explode('|',$a);
				return $arr[$index];
			} 
			else
			{
				return $a;
			}
		} 
	}

	function get_file_form_code_sort($a,$index)
	{ 
		if(strpos($a,'^') > -1)
		{
			$arr = explode('^',$a);

			if(strpos($arr[0],'|') > -1)
			{
				$arr = explode('|',$arr[0]);
				return $arr[$index];
			} 
			else
			{
				return $arr[0];
			}
		} 
		else
		{
			if(strpos($a,'|') > -1)
			{
				$arr = explode('|',$a);
				return $arr[$index];
			} 
			else
			{
				return $a;
			}
		} 
	}
 
	function get_text_form_code($a,$index,$lang)
	{
		if(strpos($a,'^') > -1)
		{
			$arr = explode('^',$a);
			if(strpos($arr[1],';') > -1)
			{
				$arr = explode(';',$arr[1]); 

				if($lang == "thai")
				{
					if(strpos($arr[0],'|') > -1)
					{
						$arr = explode('|',$arr[0]); 
						return $arr[$index];
					}	
					else
					{
						return $arr[0];
					}
				}
				else
				{
					if(strpos($arr[1],'|') > -1)
					{
						$arr = explode('|',$arr[1]); 
						return $arr[$index];
					}	
					else
					{
						return $arr[0];
					}
				}

				
			} 
			else
			{
				return $arr[1];
			}
		} 
		else
		{
			return $a;
		}
	}

	function remove_to_url($th,$en)
	{
		$str = '';
		
		if(@$_SESSION['portal_lang'] == 'thai')
		{ 
			$str = $th;
		}
		else
		{ 
			$str = $en;
		} 
		 
		//$str = strtolower($str);
		$str = trim($str);
		
		$rude = array("~","%","!","@","#","$","%","^","&","*","(",")","_","+","=","{","}","[","]","|",";",":","?","<",">",",",".",'"',"'");
		for($run=0;$run<count($rude);$run++)
		{
			//$str = eregi_replace($rude[$run],'',$str); 
			$str = str_replace($rude[$run], '', $str);
		} 
		 
		$str = str_replace(' ', '-', $str);
		//$str = preg_replace('/[^A-za-z0-9ก-๙]+/', '-', $str);
		
		return $str;
	}
	
	 function rude_text($str)
	{  
		$rude = array("fuck","shit");
		for($run=0;$run<count($rude);$run++)
		{
			//$str = eregi_replace($rude[$run],'',$str); 
			$str = str_replace($rude[$run], '<b style="color:red;">*</b>', $str);
		}  
		return $str;
	}
	   
	 function save_button($p,$c)
    { 
		$a = '<br>
		<div align="center"><input type="image" id="img11" src="' . $p . 'assets/admin/images/button-save.png" align="absbottom" border="0" onMouseOver="document.getElementById(\'img11\').style.display = \'none\';document.getElementById(\'img22\').style.display = \'\';"><input type="image" id="img22" src="' . $p . 'assets/admin/images/button-save-over.png" align="absbottom" border="0" onMouseOut="document.getElementById(\'img11\').style.display = \'\';document.getElementById(\'img22\').style.display = \'none\';" style="display:none;">
		
		&nbsp;
		
		<a href="' . $c . '"><img border="0" style="cursor:pointer" id="img_cancel_1" src="' . $p . 'assets/admin/images/button-cancel.png" width="85" height="30" align="absbottom" onMouseOver="document.getElementById(\'img_cancel_1\').style.display = \'none\';document.getElementById(\'img_cancel_2\').style.display = \'\';" /><img border="0" id="img_cancel_2" align="absbottom" src="' . $p . 'assets/admin/images/button-cancel-over.png" width="85" height="30" style="display:none; cursor:pointer" onMouseOut="document.getElementById(\'img_cancel_1\').style.display = \'\';document.getElementById(\'img_cancel_2\').style.display = \'none\';" /></a>
	 
		</div>';
		
		return $a;
    } 
	
	 function table_br($h = 22)
    { 
		$a = '<table border="0" cellspacing="0" cellpadding="0">
		<tr style="height:' . $h . 'px;">
		<td></td>
		</tr>
		</table>';
		
		return $a;
    } 
	
	 function time_elapsed_string($ptime)
	{
		if(@$_SESSION['panel_lang'] == 'thai')
		{
			$etime = time() - $ptime;
			
			if ($etime < 1)
			{
				return '0 วินาที';
			}
		
			$a = array( 12 * 30 * 24 * 60 * 60  =>  'ปี',
						30 * 24 * 60 * 60       =>  'เดือน',
						24 * 60 * 60            =>  'วัน',
						60 * 60                 =>  'ชม.',
						60                      =>  'นาที',
						1                       =>  'วินาที'
						);
		
			foreach ($a as $secs => $str)
			{
				$d = $etime / $secs;
				if ($d >= 1)
				{
					$r = round($d);
					return ' ' . $r . ' ' . $str . ($r > 1 ? '' : '') . 'ที่แล้ว';
				}
			}	
		}
		else
		{
			$etime = time() - $ptime;
			
			if ($etime < 1)
			{
				return '0 seconds';
			}
		
			$a = array( 12 * 30 * 24 * 60 * 60  =>  'year',
						30 * 24 * 60 * 60       =>  'month',
						24 * 60 * 60            =>  'day',
						60 * 60                 =>  'hour',
						60                      =>  'minute',
						1                       =>  'second'
						);
		
			foreach ($a as $secs => $str)
			{
				$d = $etime / $secs;
				if ($d >= 1)
				{
					$r = round($d);
					return $r . ' ' . $str . ($r > 1 ? 's' : '') . ' ago';
				}
			}	
		} 
	}
	
	 function time_elapsed_string_th($ptime)
	{
		$etime = time() - $ptime;
		
		if ($etime < 1)
		{
			return '0 seconds';
		}
	
		$a = array( 12 * 30 * 24 * 60 * 60  =>  'ปี',
					30 * 24 * 60 * 60       =>  'เดือน',
					24 * 60 * 60            =>  'วัน',
					60 * 60                 =>  'ชม.',
					60                      =>  'นาที',
					1                       =>  'วินาที'
					);
	
		foreach ($a as $secs => $str)
		{
			$d = $etime / $secs;
			if ($d >= 1)
			{
				$r = round($d);
				return ' ' . $r . ' ' . $str . ($r > 1 ? '' : '') . ' ที่แล้ว';
			}
		}
	}
	
	 function table_start($w = "100%",$p)
    { 
		$a = '<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" style="border:0px;">
		<tr>
		<td style="width:1px;"><div align="right"><img src="' . $p . 'assets/admin/images/table-2-top-left.png" width="11" height="11"></div></td>
		<td style="background-image:url(' . $p . 'assets/admin/images/table-2-top.png); background-repeat:repeat-x; width:99%"><img src="' . $p . 'assets/admin/images/dot.gif" height="11"></td>
		<td style="width:1px;"><img src="' . $p . 'assets/admin/images/table-2-top-right.png" width="11" height="11"></td>
		</tr>
		<tr>
		<td style="background-image:url(' . $p . 'assets/admin/images/table-2-left.png); background-repeat:repeat-y;"><img src="' . $p . 'assets/admin/images/dot.gif" height="11"></td>
		<td style="background-image:url(' . $p . 'assets/admin/images/table-bg.png);">';
		
		return $a;
    } 
	
	 function table_end($p)
    { 
		$a = '</td>
		<td style="background-image:url(' . $p . 'assets/admin/images/table-2-right.png); background-repeat:repeat-y;"><img src="' . $p . 'assets/admin/images/dot.gif" height="11"></td>
		</tr>
		<tr>
		<td><div align="right"><img src="' . $p . 'assets/admin/images/table-2-bottom-left.png" width="11" height="11"></div></td>
		<td style="background-image:url(' . $p . 'assets/admin/images/table-2-bottom.png); background-repeat:repeat-x;"><img src="' . $p . 'assets/admin/images/dot.gif" height="11"></td>
		<td><img src="' . $p . 'assets/admin/images/table-2-bottom-right.png" width="11" height="11"></td>
		</tr>
		</table>';
		
		return $a;
    } 
	
	 function top_admin($t,$p,$mod,$back)
    { 
		if($back)
		{
			$b = '<a href="' . $p . 'admin/' . $mod . '"><img id="img1" src="' . $p . 'assets/admin/images/button-module-back.png" align="absbottom" border="0" ></a>';	
		}
		else
		{
			$b = '&nbsp;';
		}		
		
		$a = '<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr class="head_table_tr">
		<td>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
		<td style="width:1%">' . $b . '</td>
		<td style="width:99%"><div class="head_table_tr_text" align="center">' . $t . '</div></td>
		<td style="width:1%">&nbsp;</td>
		</tr>
		</table>
		</td>
		</tr>
		</table>';
		
		return $a;
    } 
	
	 function top_admin_back($t,$p,$mod,$back)
    { 
		$b = '<a href="javascript:window.history.back();"><img id="img1" src="' . $p . 'assets/admin/images/button-module-back.png" align="absbottom" border="0" ></a>';		 
		$a = '<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr class="head_table_tr">
		<td>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
		<td style="width:1%">' . $b . '</td>
		<td style="width:99%"><div class="head_table_tr_text" align="center">' . $t . '</div></td>
		<td style="width:1%">&nbsp;</td>
		</tr>
		</table>
		</td>
		</tr>
		</table>';
		
		return $a;
    }
	
	 function top_admin_welcome($t,$p)
    { 
		$a = '<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr class="head_table_tr">
		<td>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
		<td style="width:1%"><a href="' . $p . 'admin/page/logout" target="_top"><img id="img1" src="' . $p . 'assets/admin/images/button-2-back.png" align="absbottom" border="0" onMouseOver="document.getElementById(\'img1\').style.display = \'none\';document.getElementById(\'img2\').style.display = \'\';"><img id="img2" src="' . $p . 'assets/admin/images/button-2-back-over.png" align="absbottom" border="0" onMouseOut="document.getElementById(\'img1\').style.display = \'\';document.getElementById(\'img2\').style.display = \'none\';" style="display:none;"></a></td>
		<td style="width:99%"><div class="head_table_tr_text" align="center">' . $t . '</div></td>
		<td style="width:1%"><a href="' . $p . 'admin/page/change_password" target="main"><img id="img11" src="' . $p . 'assets/admin/images/button-change-pass.png" align="absbottom" border="0" onMouseOver="document.getElementById(\'img11\').style.display = \'none\';document.getElementById(\'img22\').style.display = \'\';"><img id="img22" src="' . $p . 'assets/admin/images/button-change-pass-over.png" align="absbottom" border="0" onMouseOut="document.getElementById(\'img11\').style.display = \'\';document.getElementById(\'img22\').style.display = \'none\';" style="display:none;"></a></td>
		</tr>
		</table>
		</td>
		</tr>
		</table>';
		
		return $a;
    }
	 
	 function tran_day_thai($day)
	{
		/*$day_eng = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
		$day_thai = array('อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'); 
		for($run = 0;$run < count($day_thai); $run++)
		{
			$day = preg_replace($day_eng[$run],$day_thai[$run],$day); 
		}*/
		return $day;
	}

	function date_unix_to_thai($day)
	{
		$d = date("d",$day);
		$m = date("m",$day);
		$mm = date("M",$day);
		$y = date("Y",$day);

		if($_SESSION['portal_lang'] == "thai")
		{
			$month_long = array('มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
			$month_short = array('ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.');
	
			$day_long = array('อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์');
			$day_short = array('อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.');

			$y = $y+543;
	
			$day = (int)$d." &nbsp;".$month_short[$m-1]." ".$y;
			
			/*$day_eng = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
			$day_thai = array('อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'); 
			for($run = 0;$run < count($day_thai); $run++)
			{
				$day = preg_replace($day_eng[$run],$day_thai[$run],$day); 
			}*/	
		}
		else
		{
			$day = (int)$d." &nbsp;".$mm." ".$y;
		}

		
		return $day;
	}

	function date_unix_to_thai_mon($day)
	{
		$d = date("d",$day);
		$m = date("m",$day);
		$mm = date("M",$day);
		$y = date("Y",$day);

		if($_SESSION['portal_lang'] == "thai")
		{
			$month_long = array('มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
			$month_short = array('ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.');
	
			$day_long = array('อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์');
			$day_short = array('อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.');

			$y = $y+543;
	
			$day = $month_short[$m-1]." ".$y;
			
			/*$day_eng = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
			$day_thai = array('อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'); 
			for($run = 0;$run < count($day_thai); $run++)
			{
				$day = preg_replace($day_eng[$run],$day_thai[$run],$day); 
			}*/	
		}
		else
		{
			$day = $mm." ".$y;
		}

		
		return $day;
	}

	function date_unix_to_thai_mon_long($day)
	{
		$d = date("j",$day);
		$m = date("m",$day);
		$mm = date("M",$day);
		$y = date("Y",$day);

		if($_SESSION['portal_lang'] == "thai")
		{
			$month_long = array('มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
			$month_short = array('ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.');
	
			$day_long = array('อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์');
			$day_short = array('อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.');

			$y = $y+543;
	
			$day = "วัน".$day_long[date('w',$day)]."ที่ ".$d." ".$month_long[$m-1]." พ.ศ. ".$y;
 
			/*$day_eng = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
			$day_thai = array('อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'); 
			for($run = 0;$run < count($day_thai); $run++)
			{
				$day = preg_replace($day_eng[$run],$day_thai[$run],$day); 
			}*/	
		}
		else
		{
			$day = $d.' '.$mm.' '.$y;
		}
 
		return $day;
	}

	function date_unix_to_thai_mon2($day)
	{
		$d = date("d",$day);
		$m = date("m",$day);
		$mm = date("M",$day);
		$y = date("Y",$day);

		if($_SESSION['portal_lang'] == "thai")
		{
			$month_long = array('มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
			$month_short = array('ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.');
	
			$day_long = array('อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์');
			$day_short = array('อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.');

			$y = $y+543;
	
			$day = $month_short[$m-1];
			
			/*$day_eng = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
			$day_thai = array('อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'); 
			for($run = 0;$run < count($day_thai); $run++)
			{
				$day = preg_replace($day_eng[$run],$day_thai[$run],$day); 
			}*/	
		}
		else
		{
			$day = $mm;
		}

		
		return $day;
	}
	
	 function tran_mon_thai($mon)
	{
		/*$mon_eng = array('01','02','03','04','05','06','07','08','09','10','11','12') ;
		$mon_thai = array('มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฏาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'); 
		for($run=0;$run<count($mon_thai);$run++)
		{
			$mon = preg_replace($mon_eng[$run],$mon_thai[$run],$mon); 
		}*/
		return $mon;
	} 
	
	 function white_box_start_1($w = "100%",$p)
    { 
		$a = ' <table align="center" width="' . $w . '" border="0" cellspacing="0" cellpadding="0" style="border:0px;">
		<tr>
		<td style="width:1px;"><div align="right"><img src="' . $p . 'assets/admin/images/box-top-left.png" width="11" height="11"></div></td>
		<td style="background-image:url(' . $p . 'assets/admin/images/box-top.png); background-repeat:repeat-x; width:99%"></td>
		<td style="width:1px;"><img src="' . $p . 'assets/admin/images/box-top-right.png" width="11" height="11"></td>
		</tr>
		<tr>
		<td style="background-image:url(' . $p . 'assets/admin/images/box-left.png); background-repeat:repeat-y;"><img src="' . $p . 'assets/admin/images/dot.gif" height="11"></td>
		<td style="background-image:url(' . $p . 'assets/admin/images/table-bg.png);">';
		
		return $a;
    } 
	
	 function white_box_start_2($w = "100%",$p)
    { 
		$a = '  <table align="center" width="' . $w . '" border="0" cellspacing="0" cellpadding="0" style="border:0px;">
		<tr>
		<td style="width:1px;"><div align="right"><img src="' . $p . 'assets/admin/images/box2-top-left.png" width="11" height="6"></div></td>
		<td style="background-image:url(' . $p . 'assets/admin/images/box2-top.png); background-repeat:repeat-x; width:99%"></td>
		<td style="width:1px;"><img src="' . $p . 'assets/admin/images/box2-top-right.png" width="11" height="6"></td>
		</tr>
		<tr>
		<td style="background-image:url(' . $p . 'assets/admin/images/box2-left.png); background-repeat:repeat-y;"><img src="' . $p . 'assets/admin/images/dot.gif" height="11"></td>
		<td style="background-image:url(' . $p . 'assets/admin/images/table-bg.png);">';
		
		return $a;
    } 
	
	 function white_box_start_3($w = "100%",$p)
    { 
		$a = '<table align="center" width="' . $w . '" border="0" cellspacing="0" cellpadding="0" style="border:0px;">
		<tr>
		<td style="width:1px;"><div align="right"><img src="' . $p . 'assets/admin/images/box3-top-left.png" width="11" height="6"></div></td>
		<td style="background-image:url(' . $p . 'assets/admin/images/box3-top.png); background-repeat:repeat-x; width:99%"></td>
		<td style="width:1px;"><img src="' . $p . 'assets/admin/images/box3-top-right.png" width="11" height="6"></td>
		</tr>
		<tr>
		<td style="background-image:url(' . $p . 'assets/admin/images/box3-left.png); background-repeat:repeat-y;"><img src="' . $p . 'assets/admin/images/dot.gif" height="11"></td>
		<td style="background-image:url(' . $p . 'assets/admin/images/table-bg.png);">';
		
		return $a;
    } 
	
	 function white_box_end_1($p)
    { 
		$a = '</td>
		<td style="background-image:url(' . $p . 'assets/admin/images/box-right.png); background-repeat:repeat-y;"><img src="' . $p . 'assets/admin/images/dot.gif" height="11"></td>
		</tr>
		<tr>
		<td><div align="right"><img src="' . $p . 'assets/admin/images/box-bottom-left.png"></div></td>
		<td style="background-image:url(' . $p . 'assets/admin/images/box-bottom.png); background-repeat:repeat-x;"><img src="' . $p . 'assets/admin/images/dot.gif" height="6"></td>
		<td><img src="' . $p . 'assets/admin/images/box-bottom-right.png"></td>
		</tr>
		</table>';
		
		return $a;
    } 
	
	 function white_box_end_2($p)
    { 
		$a = '</td>
		<td style="background-image:url(' . $p . 'assets/admin/images/box2-right.png); background-repeat:repeat-y;"><img src="' . $p . 'assets/admin/images/dot.gif" height="11"></td>
		</tr>
		<tr>
		<td><div align="right"><img src="' . $p . 'assets/admin/images/box2-bottom-left.png" width="11" height="6"></div></td>
		<td style="background-image:url(' . $p . 'assets/admin/images/box2-bottom.png); background-repeat:repeat-x;"><img src="' . $p . 'assets/admin/images/dot.gif" height="6"></td>
		<td><img src="' . $p . 'assets/admin/images/box2-bottom-right.png" width="11" height="6"></td>
		</tr>
		</table>';
		
		return $a;
    } 
	
	 function white_box_end_3($p)
    { 
		$a = '</td>
		<td style="background-image:url(' . $p . 'assets/admin/images/box3-right.png); background-repeat:repeat-y;"><img src="' . $p . 'assets/admin/images/dot.gif" height="11"></td>
		</tr>
		<tr>
		<td><div align="right"><img src="' . $p . 'assets/admin/images/box3-bottom-left.png" width="11" height="11"></div></td>
		<td style="background-image:url(' . $p . 'assets/admin/images/box3-bottom.png); background-repeat:repeat-x;"><img src="' . $p . 'assets/admin/images/dot.gif" height="11"></td>
		<td><img src="' . $p . 'assets/admin/images/box3-bottom-right.png" width="11" height="11"></td>
		</tr>
		</table>';
		
		return $a;
    }
	
	 function white_box_custom_start($w = "130px",$t = 'title')
    { 
		$a = '<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
		<td style="width:' . $w . '"><div style="height:22px; padding-top:7px;"> &nbsp; &nbsp; ' . $t . ' : </div></td><td>';
		
		return $a;
    }  
	
	 function white_box_custom_end()
    { 
		$a = '</td>
		</tr>
		</table>';
		
		return $a;
    }  
	
	function input_post($v,$t)
    {    
		return @$_POST[$v];
    }  
	
	function input_get($v)
    {  
		return @$_GET[$v];
    }  

	function update_user_files($f,$p)
	{
		$this_f = $this->input_post($f, TRUE);
 
		if(strpos($this_f,'|') > -1)
		{
			$each_v = explode('|',$this_f);
			foreach($each_v as $item_v) 
			{
				if(trim($item_v) != '')
				{
					@unlink($_SERVER['DOCUMENT_ROOT'].'/user_files/'.$_SESSION['panel_id'].'/'.basename($item_v));
				}
			}
		}
		else
		{
			@unlink($_SERVER['DOCUMENT_ROOT'].'/user_files/'.$_SESSION['panel_id'].'/'.basename($this_f));
		}
 
		$this_url = ""; 
		$list_files = scandir($_SERVER['DOCUMENT_ROOT'].'/upload_tools/server/php/files/'.$_SESSION['panel_id'].'/'.$p.'');
		foreach($list_files as $this_file) 
		{ 
			if($this_file != '.' && $this_file != '..')
			{
				if(trim($this_file) != '')
				{
					$each_ext = explode('.',$this_file);
					$new_file_name = uniqid(rand(), true).'.'.$each_ext[count($each_ext)-1];
					  
					copy($_SERVER['DOCUMENT_ROOT'].'/upload_tools/server/php/files/'.$_SESSION['panel_id'].'/'.$p.'/'.$this_file,$_SERVER['DOCUMENT_ROOT'].'/user_files/'.$_SESSION['panel_id'].'/'.$new_file_name);
	
					$this_url = $this_url.'http://127.0.0.1:8000/user_files/'.$_SESSION['panel_id'].'/'.$new_file_name.'|';	
				} 
			} 
		}

		return $this_url;
	}

	function update_user_files_sort($f,$p,$post_sort)
	{
		$this_f = $this->input_post($f, TRUE);
 
		if(strpos($this_f,'|') > -1)
		{
			$each_v = explode('|',$this_f);
			foreach($each_v as $item_v) 
			{
				if(trim($item_v) != '')
				{
					@unlink($_SERVER['DOCUMENT_ROOT'].'/user_files/'.$_SESSION['panel_id'].'/'.basename($item_v));
				}
			}
		}
		else
		{
			@unlink($_SERVER['DOCUMENT_ROOT'].'/user_files/'.$_SESSION['panel_id'].'/'.basename($this_f));
		}

		$post_sort = explode('|',$post_sort);
		$post_index = 0;
		$this_url = ""; 
		$list_files = scandir($_SERVER['DOCUMENT_ROOT'].'/upload_tools/server/php/files/'.$_SESSION['panel_id'].'/'.$p.'');
		foreach($list_files as $this_file) 
		{ 
			if($this_file != '.' && $this_file != '..')
			{
				if(trim($this_file) != '')
				{
					$each_ext = explode('.',$this_file);
					$new_file_name = $post_sort[$post_index].'_'.uniqid(rand(), true).'.'.$each_ext[count($each_ext)-1];
					  
					copy($_SERVER['DOCUMENT_ROOT'].'/upload_tools/server/php/files/'.$_SESSION['panel_id'].'/'.$p.'/'.$this_file,$_SERVER['DOCUMENT_ROOT'].'/user_files/'.$_SESSION['panel_id'].'/'.$new_file_name);
	
					$this_url = $this_url.'http://127.0.0.1:8000/user_files/'.$_SESSION['panel_id'].'/'.$new_file_name.'|';	

					$post_index++;
				} 
			} 
		}

		return $this_url;
	}

	function update_user_files_reverse($f,$m,$c)
	{ 
		try 
		{
			$this_url = ""; 
			$list_files = scandir($_SERVER['DOCUMENT_ROOT'].'/upload_tools/server/php/files/'.$_SESSION['panel_id'].'/'.$m.'_'.$c);
	
			foreach($list_files as $this_file) 
			{ 
				if($this_file != '.' && $this_file != '..')
				{
					if(trim($this_file) != '')
					{
						$each_ext = explode('.',$this_file);
						$new_file_name = uniqid(rand(), true).'.'.$each_ext[count($each_ext)-1];
	
						@unlink($_SERVER['DOCUMENT_ROOT'].'/upload_tools/server/php/files/'.$_SESSION['panel_id'].'/'.$m.'_'.$c.'/'.$this_file); 
						@unlink($_SERVER['DOCUMENT_ROOT'].'/upload_tools/server/php/thumbnails/'.$_SESSION['panel_id'].'/'.$m.'_'.$c.'/'.$this_file); 
					} 
				} 
			}
			 
			$this_f = $f;
	 
			if(strpos($this_f,'|') > -1)
			{
				$each_v = explode('|',$this_f);
				foreach($each_v as $item_v) 
				{
					if(trim($item_v) != '')
					{ 
						copy($_SERVER['DOCUMENT_ROOT'].'/user_files/'.$_SESSION['panel_id'].'/'.basename($item_v),$_SERVER['DOCUMENT_ROOT'].'/upload_tools/server/php/files/'.$_SESSION['panel_id'].'/'.$m.'_'.$c.'/'.basename($item_v));
					 
						copy($_SERVER['DOCUMENT_ROOT'].'/user_files/'.$_SESSION['panel_id'].'/'.basename($item_v),$_SERVER['DOCUMENT_ROOT'].'/upload_tools/server/php/thumbnails/'.$_SESSION['panel_id'].'/'.$m.'_'.$c.'/'.basename($item_v));
					}
				}
			}
			else
			{ 
				@copy($_SERVER['DOCUMENT_ROOT'].'/user_files/'.$_SESSION['panel_id'].'/'.basename($this_f),$_SERVER['DOCUMENT_ROOT'].'/upload_tools/server/php/files/'.$_SESSION['panel_id'].'/'.$m.'_'.$c.'/'.basename($this_f));
					 
				@copy($_SERVER['DOCUMENT_ROOT'].'/user_files/'.$_SESSION['panel_id'].'/'.basename($this_f),$_SERVER['DOCUMENT_ROOT'].'/upload_tools/server/php/thumbnails/'.$_SESSION['panel_id'].'/'.$m.'_'.$c.'/'.basename($this_f));
			}
		} 
		catch ( \Exception $ex ) 
		{
			
		} 

		return '';
	}

	function update_file_and_alt($f,$v,$m)
	{
		$data_get_alt = '';
		$get_alt_field = $f;
		$get_alt_value = $v;
		if($get_alt_value != '')
		{
			if(strpos($get_alt_value,'^') > -1)
			{
				$get_only_file = explode('^',$get_alt_value);
				$get_only_file_arr = explode(';',$get_only_file[1]);
				$data_get_alt = $get_only_file_arr[0];

				$this->update_user_files_reverse($get_only_file[0],$m,$get_alt_field);
			}
			else
			{
				$this->update_user_files_reverse($get_alt_value,$m,$get_alt_field);
			} 
		}

		return $data_get_alt;
	}

	function update_file_and_alt_en($f,$v,$m)
	{
		$data_get_alt = '';
		$get_alt_field = $f;
		$get_alt_value = $v;
		if($get_alt_value != '')
		{
			if(strpos($get_alt_value,'^') > -1)
			{
				$get_only_file = explode('^',$get_alt_value);
				$get_only_file_arr = explode(';',$get_only_file[1]);
				$data_get_alt = $get_only_file_arr[1];
				
				//$this->update_user_files_reverse($get_only_file[0],$m,$get_alt_field);
			}
			else
			{
				//$this->update_user_files_reverse($get_alt_value,$m,$get_alt_field);
			} 
		}

		return $data_get_alt;
	}

	function update_file_and_alt_sort($f,$v,$m)
	{
		$data_get_alt = '';
		$get_alt_field = $f;
		$get_alt_value = $v;
		if($get_alt_value != '')
		{
			if(strpos($get_alt_value,'^') > -1)
			{
				$get_only_file = explode('^',$get_alt_value);
				$get_only_file_arr = explode(';',$get_only_file[1]);
				$data_get_alt = $get_only_file_arr[2];
				
				//$this->update_user_files_reverse($get_only_file[0],$m,$get_alt_field);
			}
			else
			{
				//$this->update_user_files_reverse($get_alt_value,$m,$get_alt_field);
			} 
		}

		return $data_get_alt;
	}

	function get_img_url($img)
	{
		if(strpos($img,'^') > -1)
		{
			$a = explode('^',$img);
			if(strpos($a[0],'|') > -1)
			{
				$b = explode('|',$a[0]);
				$img = $b[0];
			}
		}
		else
		{
			if(strpos($img,'|') > -1)
			{
				$a = explode('|',$img);
				$img = $a[0];
			}
		}

		return $img;
	}
}