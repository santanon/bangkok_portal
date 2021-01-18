<tr>
    <th width="120"><?php echo $TextLanguage->lang('publish_date'); ?></th>
    <td>
    <div class="align-box" style="width:110px;">
    <input name="date_set" type="radio" id="test-radio8" value="0" checked="checked" onclick="show_link2('2');"> 
    <label class="input-label" for="test-radio8"><?php echo $TextLanguage->lang('always'); ?></label></div>&nbsp;&nbsp;
    <div class="align-box" style="width:110px;">
    <input name="date_set" type="radio" id="test-radio7" value="1" onclick="show_link2('1');"> 
    <label class="input-label" for="test-radio7"><?php echo $TextLanguage->lang('setting'); ?></label></div>&nbsp;&nbsp; 
    </td>
</tr>

 <tr id="link_hide_a">
    <th width="120"></th>
    <td><div class="align-box" style="width:120px;"> <b><?php echo $TextLanguage->lang('publish_date'); ?></b>
    <input name="date_start" id="date_start" type="text" class="sm-input" style="width:150px" readonly="readonly"> 
    </div>
    </td>
</tr> 
<tr id="link_hide_b">
    <th width="120"></th>
    <td><div class="align-box" style="width:120px;"> <b><?php echo $TextLanguage->lang('expire_date'); ?></b>
    <input name="date_end" id="date_end" type="text" class="sm-input" style="width:150px" readonly="readonly"> 
    </div>
    </td>
</tr> 

<script>
function show_link2(v1)
{
	var a1 = document.getElementById('link_hide_a');
	var a2 = document.getElementById('link_hide_b'); 
	
	if(v1 == '1')
	{
		a1.style.display = '';
		a2.style.display = ''; 
	}
	else
	{
		a1.style.display = 'none';
		a2.style.display = 'none'; 	
	} 
}
show_link2('2');
</script>
 
<script>
$(function() 
{
	$( "#date_start" ).datepicker({ dateFormat: 'dd-mm-yy',changeMonth: true,changeYear: true });
	$( "#date_end" ).datepicker({ dateFormat: 'dd-mm-yy',changeMonth: true,changeYear: true });
});
</script>  