<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
@include('manage.include.main_form_header') 


<script type="text/javascript">
   function check_form()
    { 
		if(document.getElementById('change_password').checked == true)
		{
			var a = document.getElementById('password');   
			if(a.value == "")
			{
				alert('<?php echo $TextLanguage->lang('please_fill') ?> <?php echo $TextLanguage->lang('password') ?>');
				a.focus();
				return false;
			}
		}
        if(document.getElementById('title').value == '')
        {
            document.getElementById('title').focus();
            return false;
        }  
		if(document.getElementById('lastname').value == '')
        {
            document.getElementById('lastname').focus();
            return false;
        } 
		if(document.getElementById('email').value == '')
        {
            document.getElementById('email').focus();
            return false;
        }  
		if(document.getElementById('tel').value == '')
        {
            document.getElementById('tel').focus();
            return false;
        } 
		if(document.getElementById('address').value == '')
        {
            document.getElementById('address').focus();
            return false;
        } 
		if(document.getElementById('zip_code').value == '')
        {
            document.getElementById('zip_code').focus();
            return false;
        } 
		if(document.getElementById('province').value == '')
        {
            document.getElementById('province').focus();
            return false;
        } 
		if(document.getElementById('idcard').value == '')
        {
            document.getElementById('idcard').focus();
            return false;
        }                                                                            
        if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))
        {
            return false;
        }
    }
    </script>
    <form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="http://127.0.0.1:8000/manage-admin/edit_submit?m=<?php echo $config_mod;  ?>">
    @csrf <!-- {{ csrf_field() }} -->
    <table>
        <tbody>
            <tr>
                <th width="120"><?php echo $TextLanguage->lang('username'); ?></th>
                <td>
                <b><?php echo $edit_username ?></b>
                </td>
            </tr>  
            <tr>
                <th width="120"><?php echo $TextLanguage->lang('password'); ?></th>
                <td>
                <input type="checkbox" id="change_password" name="change_password" value="1" /> Change password <br />
				<input name="password" type="password" class="sm-input" id="password" style="width:210px" maxlength="20">   
                </td>
            </tr>  
            <tr>
                <th width="120"><?php echo $TextLanguage->lang('name'); ?></th>
                <td>
                <input value="<?php echo $edit_title ?>" name="title" type="text" class="sm-input" id="title" style="width:210px">   
                </td>
            </tr>  
             <tr>
                <th width="120"><?php echo $TextLanguage->lang('lastname'); ?></th>
                <td>
                <input value="<?php echo $edit_lastname ?>" name="lastname" type="text" class="sm-input" id="lastname" style="width:210px">   
                </td>
            </tr> 
             <tr>
                <th width="120"><?php echo $TextLanguage->lang('email'); ?></th>
                <td>
                <input value="<?php echo $edit_email ?>" name="email" type="text" class="sm-input" id="email" style="width:210px">   
                </td>
            </tr>   
             <tr>
                <th width="120"><?php echo $TextLanguage->lang('gender'); ?></th>
                <td>
                 
                
                <input name="gender" type="radio" value="M"  <?php if($edit_gender == 'M'){ ?>checked="checked"<?php } ?> /> <?php echo $TextLanguage->lang('male'); ?>
                &nbsp; &nbsp;
                <input name="gender" type="radio" value="F"  <?php if($edit_gender == 'F'){ ?>checked="checked"<?php } ?>/> <?php echo $TextLanguage->lang('female'); ?>
                </td>
            </tr>   
            <!-- <tr>
                <th width="120"><?php echo $TextLanguage->lang('birthday'); ?></th>
                <td>
                <input value="<?php echo $edit_birthday ?>" name="birthday" type="text" class="sm-input" id="birthday" style="width:210px">   
                </td>
            </tr>    -->
             <tr>
                <th width="120"><?php echo $TextLanguage->lang('tel'); ?></th>
                <td>
                <input value="<?php echo $edit_tel ?>" name="tel" type="text" class="sm-input" id="tel" style="width:210px">   
                </td>
            </tr>   
             <tr>
                <th width="120" valign="top" style="padding-top:12px;"><?php echo $TextLanguage->lang('address'); ?></th>
                <td>
                <textarea name="address" type="text" id="address" rows="5" style="width:210px"><?php echo $edit_address ?></textarea>   
                </td>
            </tr>   
             <tr>
                <th width="120"><?php echo $TextLanguage->lang('zip_code'); ?></th>
                <td>
                <input value="<?php echo $edit_zip_code ?>" name="zip_code" type="text" class="sm-input" id="zip_code" style="width:210px">   
                </td>
            </tr>   
             <tr>
                <th width="120"><?php echo $TextLanguage->lang('province'); ?></th>
                <td>
              
                
<select name="province" size="1" style="width:210px; outline:none;" id="province">
      <option value="" selected>-</option>
      <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
      <option value="กระบี่">กระบี่ </option>
      <option value="กาญจนบุรี">กาญจนบุรี </option>
      <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
      <option value="กำแพงเพชร">กำแพงเพชร </option>
      <option value="ขอนแก่น">ขอนแก่น</option>
      <option value="จันทบุรี">จันทบุรี</option>
      <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
      <option value="ชัยนาท">ชัยนาท </option>
      <option value="ชัยภูมิ">ชัยภูมิ </option>
      <option value="ชุมพร">ชุมพร </option>
      <option value="ชลบุรี">ชลบุรี </option>
      <option value="เชียงใหม่">เชียงใหม่ </option>
      <option value="เชียงราย">เชียงราย </option>
      <option value="ตรัง">ตรัง </option>
      <option value="ตราด">ตราด </option>
      <option value="ตาก">ตาก </option>
      <option value="นครนายก">นครนายก </option>
      <option value="นครปฐม">นครปฐม </option>
      <option value="นครพนม">นครพนม </option>
      <option value="นครราชสีมา">นครราชสีมา </option>
      <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
      <option value="นครสวรรค์">นครสวรรค์ </option>
      <option value="นราธิวาส">นราธิวาส </option>
      <option value="น่าน">น่าน </option>
      <option value="นนทบุรี">นนทบุรี </option>
      <option value="บึงกาฬ">บึงกาฬ</option>
      <option value="บุรีรัมย์">บุรีรัมย์</option>
      <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
      <option value="ปทุมธานี">ปทุมธานี </option>
      <option value="ปราจีนบุรี">ปราจีนบุรี </option>
      <option value="ปัตตานี">ปัตตานี </option>
      <option value="พะเยา">พะเยา </option>
      <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
      <option value="พังงา">พังงา </option>
      <option value="พิจิตร">พิจิตร </option>
      <option value="พิษณุโลก">พิษณุโลก </option>
      <option value="เพชรบุรี">เพชรบุรี </option>
      <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
      <option value="แพร่">แพร่ </option>
      <option value="พัทลุง">พัทลุง </option>
      <option value="ภูเก็ต">ภูเก็ต </option>
      <option value="มหาสารคาม">มหาสารคาม </option>
      <option value="มุกดาหาร">มุกดาหาร </option>
      <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
      <option value="ยโสธร">ยโสธร </option>
      <option value="ยะลา">ยะลา </option>
      <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
      <option value="ระนอง">ระนอง </option>
      <option value="ระยอง">ระยอง </option>
      <option value="ราชบุรี">ราชบุรี</option>
      <option value="ลพบุรี">ลพบุรี </option>
      <option value="ลำปาง">ลำปาง </option>
      <option value="ลำพูน">ลำพูน </option>
      <option value="เลย">เลย </option>
      <option value="ศรีสะเกษ">ศรีสะเกษ</option>
      <option value="สกลนคร">สกลนคร</option>
      <option value="สงขลา">สงขลา </option>
      <option value="สมุทรสาคร">สมุทรสาคร </option>
      <option value="สมุทรปราการ">สมุทรปราการ </option>
      <option value="สมุทรสงคราม">สมุทรสงคราม </option>
      <option value="สระแก้ว">สระแก้ว </option>
      <option value="สระบุรี">สระบุรี </option>
      <option value="สิงห์บุรี">สิงห์บุรี </option>
      <option value="สุโขทัย">สุโขทัย </option>
      <option value="สุพรรณบุรี">สุพรรณบุรี </option>
      <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
      <option value="สุรินทร์">สุรินทร์ </option>
      <option value="สตูล">สตูล </option>
      <option value="หนองคาย">หนองคาย </option>
      <option value="หนองบัวลำภู">หนองบัวลำภู </option>
      <option value="อำนาจเจริญ">อำนาจเจริญ </option>
      <option value="อุดรธานี">อุดรธานี </option>
      <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
      <option value="อุทัยธานี">อุทัยธานี </option>
      <option value="อุบลราชธานี">อุบลราชธานี</option>
      <option value="อ่างทอง">อ่างทอง </option> 
</select>

<script>
run = 0;
$("#province option").each(function()
{
	 if($(this).val() == '<?php echo $edit_province ?>')
	 { 
		 document.getElementById("province").options[run].selected = true;
	 }
	 
	 run++;
});
</script>               
                </td>
            </tr>   
             <tr>
                <th width="120"><?php echo $TextLanguage->lang('idcard'); ?></th>
                <td>
                <input value="<?php echo $edit_idcard ?>" name="idcard" type="text" class="sm-input" id="idcard" style="width:210px">   
                </td>
            </tr>
             <tr>
                 <th style="padding-top:12px" valign="top"><?php echo $TextLanguage->lang('photo'); ?></th>
                 <td><input type="file" name="img1" /><br />
                 <img src="<?php echo base_url(); ?>upload/web/<?php echo $edit_img1 ?>" style="width:200px;" />
                 </td>
             </tr>    
            <tr>
                <th valign="top">&nbsp;</th>
                <td>
                
                <span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('save'); ?>"></span>&nbsp;
                <span class="btn round big gray"><input type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('cancel'); ?>" onclick="window.location = 'http://127.0.0.1:8000/manage-admin/list?m=<?php echo $config_mod;  ?>';"></span>

                </td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="id" value="<?php echo $edit_id ?>" />
    </form>
  
    
@include('manage.include.main_form_footer') 