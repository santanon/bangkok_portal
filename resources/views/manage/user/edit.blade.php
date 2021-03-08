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
                    <input value="sdppd01" name="u" type="text" class="sm-input" id="u" style="width:40%">
                </td>
            </tr>  
            <tr>
                <th width="120"><?php echo $TextLanguage->lang('password'); ?></th>
                <td> 
				<input value="**************" name="p" type="password" class="sm-input" id="p" style="width:40%" maxlength="50">   
                </td>
            </tr>  
            <tr>
                <th width="120"><?php echo $TextLanguage->lang('name'); ?></th>
                <td>
                <input value="นายอนุสรณ์ พฤกษกุลทล" name="name" type="text" class="sm-input" id="name" style="width:40%">   
                </td>
            </tr>  
             <tr>
                <th width="120"><?php echo $TextLanguage->lang('section'); ?></th>
                <td>
                <input value="สำนักงานเลขานุการ สยป." name="section" type="text" class="sm-input" id="section" style="width:40%">   
                </td>
            </tr>  
            <tr>
                <th width="120" valign="top">สิทธิ์ในการแก้ไข</th>
                <td>
                <input type="checkbox" name="ment_1" value="1" checked> หน้าแรก<br>
                <input type="checkbox" name="ment_1" value="1" checked>  ตั้งค่าเว็บไซต์<br>
                <input type="checkbox" name="ment_1" value="1" checked> เทมเพลต<br>
                <input type="checkbox" name="ment_1" value="1" checked> เมนูหลัก<br>
                <input type="checkbox" name="ment_1" value="1" checked>  เมนูย่อย<br>
                <input type="checkbox" name="ment_1" value="1" checked> แบนเนอร์ <br>
                <input type="checkbox" name="ment_1" value="1" checked> ข่าวสาร<br>
                <input type="checkbox" name="ment_1" value="1" checked>  กิจกรรม<br>
                <input type="checkbox" name="ment_1" value="1" checked> อัลบั้ม <br>
                <input type="checkbox" name="ment_1" value="1" checked>  โพลล์<br>
                <input type="checkbox" name="ment_1" value="1" checked> แบบสอบถาม<br>
                <input type="checkbox" name="ment_1" value="1" checked> ถามตอบ <br>
                <input type="checkbox" name="ment_1" value="1" checked> ดาวน์โหลด <br>
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