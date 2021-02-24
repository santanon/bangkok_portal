<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
@include('manage.include.main_form_header') 


<script type="text/javascript">
    function check_form()
    { 
        if(document.getElementById('title').value == '' && document.getElementById('en_title').value == '')
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
          
 <script>
function switch_cat(v)
{ 
    document.getElementById('box0').style.display = 'none';
    document.getElementById('box1').style.display = 'none';
    document.getElementById('box2').style.display = 'none';
    document.getElementById('box3').style.display = 'none';
    document.getElementById('box4').style.display = 'none';
    document.getElementById('box5').style.display = 'none';
    document.getElementById('box6').style.display = 'none';
    document.getElementById('box7').style.display = 'none';
    document.getElementById('box8').style.display = 'none';

    document.getElementById('box'+v).style.display = '';
    
}
 </script>             
            <tr>
                <th width="120" valign="top" ><?php echo $TextLanguage->lang('box_data2'); ?></th>
                <td> 
                    <div class="align-box"> 
                    <select onchange="document.getElementById('this_a').value = this.options[this.selectedIndex].text;switch_cat(this.value-1);" name="box" id="box" style="width:500px; height:30px; font-size:16px;"  > 
                    <option value="1">ข่าวสาร</option>  
                    <option value="2">คำถามที่พบบ่อย</option> 
                    <option value="3">ปฏิทินกิจกรรม</option> 
                    <option value="4">ภาพกิจกรรม</option> 
                    <option value="5">วิดิทัศน์</option> 
                    <option value="6">ดาวน์โหลด</option> 
                    <option value="7">แบนเนอร์</option> 
                    <option value="8">แบบสอบถาม</option> 
                    <option value="9">โพลล์/โหวต</option>    
                    </select> 

                    <input type="hidden" name="a" id="this_a" value="ข่าวสาร">
                    <input type="hidden" name="b" id="this_b" value="ข้อมูลล่าสุด"> 
                    </div>  
                </td>
            </tr> 
             <tr>
                <th width="120" valign="top" style="padding-top:15px;"><?php echo $TextLanguage->lang('box_data'); ?></th>
                <td> 
                    <div class="align-box"> 
                    <select onchange="document.getElementById('this_b').value = this.options[this.selectedIndex].text;" name="box0" id="box0" style="width:500px;width:500px; height:30px; font-size:16px;"> 
                    <option value=""><?php echo $TextLanguage->lang('box_last'); ?></option>
                    <?php
                    echo $main_str[0];
                    ?>    
                    </select>
                    <select onchange="document.getElementById('this_b').value = this.options[this.selectedIndex].text;" name="box1" id="box1" style="width:500px;display:none;width:500px; height:30px; font-size:16px;">
                    <option value=""><?php echo $TextLanguage->lang('box_last'); ?></option>    
                    <?php
                    echo $main_str[1];
                    ?>    
                    </select>
                    <select onchange="document.getElementById('this_b').value = this.options[this.selectedIndex].text;" name="box2" id="box2" style="width:500px;display:none;width:500px; height:30px; font-size:16px;">
                    <option value=""><?php echo $TextLanguage->lang('box_last'); ?></option>    
                    <?php
                    echo $main_str[2];
                    ?>    
                    </select>
                    <select onchange="document.getElementById('this_b').value = this.options[this.selectedIndex].text;" name="box3" id="box3" style="width:500px;display:none;width:500px; height:30px; font-size:16px;">
                    <option value=""><?php echo $TextLanguage->lang('box_last'); ?></option>
                    <?php
                    echo $main_str[3];
                    ?>    
                    </select>
                    <select onchange="document.getElementById('this_b').value = this.options[this.selectedIndex].text;" name="box4" id="box4" style="width:500px;display:none;width:500px; height:30px; font-size:16px;">
                    <option value=""><?php echo $TextLanguage->lang('box_last'); ?></option>
                    <?php
                    echo $main_str[4];
                    ?>    
                    </select>
                    <select onchange="document.getElementById('this_b').value = this.options[this.selectedIndex].text;" name="box5" id="box5" style="width:500px;display:none;width:500px; height:30px; font-size:16px;">
                    <option value=""><?php echo $TextLanguage->lang('box_last'); ?></option>
                    <?php
                    echo $main_str[5];
                    ?>    
                    </select>
                    <select onchange="document.getElementById('this_b').value = this.options[this.selectedIndex].text;" name="box6" id="box6" style="width:500px;display:none;width:500px; height:30px; font-size:16px;">
                    <option value=""><?php echo $TextLanguage->lang('box_last'); ?></option>    
                    <?php
                    echo $main_str[6];
                    ?>    
                    </select>
                    <select onchange="document.getElementById('this_b').value = this.options[this.selectedIndex].text;" name="box7" id="box7" style="width:500px;display:none;width:500px; height:30px; font-size:16px;">
                    <option value=""><?php echo $TextLanguage->lang('box_last'); ?></option>    
                    <?php
                    echo $main_str[7];
                    ?>    
                    </select>
                    <select onchange="document.getElementById('this_b').value = this.options[this.selectedIndex].text;" name="box8" id="box8" style="width:500px;display:none;width:500px; height:30px; font-size:16px;">
                    <option value=""><?php echo $TextLanguage->lang('box_last'); ?></option>
                    <?php
                    echo $main_str[8];
                    ?>    
                    </select> 
                    </div>  
                </td>
            </tr> 
            

			@include('manage.include.date_start_end_add')           
        
           
            <tr>
                <th valign="top">&nbsp;</th>
                <td>
                
                <span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('save'); ?>"></span>&nbsp;
                <span class="btn round big gray"><input type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('cancel'); ?>" onclick="window.location = 'http://127.0.0.1:8000/manage-admin/list?m=<?php echo $config_mod;  ?>';"></span>

                </td>
            </tr>
        </tbody>
    </table>
	<input type="hidden" name="id" id="id" value="<?php echo $_GET['id'] ?>">
    </form>


<script>
document.getElementById('box').value = '<?php echo $edit_box_number ?>';
document.getElementById('this_a').value = document.getElementById('box').options[document.getElementById('box').selectedIndex].text;
switch_cat(document.getElementById('box').value-1);
document.getElementById('box<?php echo ($edit_box_number-1) ?>').value = '<?php echo $edit_box1 ?>';
</script>	

@include('manage.include.main_form_footer')