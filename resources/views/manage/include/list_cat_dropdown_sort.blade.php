<?php
if(@$_SESSION[$config_mod.'_set_cat'] == '1')
{
	?>
    <span class="link-text" style="text-decoration:underline; font-size:12px;"><a href="<?php echo base_url().'panels/page' ?>">&lt;&lt; <?php echo $TextLanguage->lang('back_to') ?> <?php echo $TextLanguage->lang('menu_page') ?></a></span><br />
    <?php
}
if(@$_SESSION[$config_mod.'_set_cat_main_menu'] == '1')
{
	?>
    <span class="link-text" style="text-decoration:underline; font-size:12px;"><a href="<?php echo base_url().'panels/main_menu' ?>">&lt;&lt; <?php echo $TextLanguage->lang('back_to') ?> <?php echo $TextLanguage->lang('main_menu') ?></a></span><br />
    <?php
}
?>
<table align="center"> 
<tr style="font-size:12px;"> 

<?php
if(@$_SESSION[$config_mod.'_group_page'] > 0)
{
	?>
   <td valign="middle"></td>
    <td valign="middle" align="right" ><span class="link-text"><a href="<?php echo base_url().'panels/page/set_cat_page/0' ?>"><?php echo $list_menu_title; ?></a></span></td>
	<?php
}
else
{
	?>
    <td valign="middle"><span class="header-text fontfacetext-bold"><?php echo $config_dropdown_title ?>  : &nbsp; </span></td>
    <td valign="middle" width="76">
    <select class="selectric" name="read_type" id="read_type" onchange="window.location = '<?php echo base_url() . 'panels/'.$config_mod.'/set_cat_sort/' ?>' + this.value;">
    <option value="0" <?php if($this_cat_list == '0'){ ?> selected="selected" <?php } ?>>- <?php if($config_mod == 'page'){echo $TextLanguage->lang('select');}else{echo $TextLanguage->lang('select');} ?> -</option> 
    <?php 
    $run = 0;
    foreach ($list_cat->result() as $row_cat)
    {   
        ?>
        <option value="<?php echo $row_cat->id; ?>" <?php if($this_cat_list == $row_cat->id){ ?> selected="selected" <?php } ?>><?php echo $row_cat->title; ?> <?php  
		
		$str_show_count = true;
		
		if($config_mod == 'page')
		{
			if($row_cat->have_submenu == '1')
			{
				$str_show_count = false;	
			}
		}
		
		if($str_show_count)
		{
			?>
            (<?php echo $list_cat_count[$run] ?>)
            <?php	
		} 
		
		?> 
        </option> 
        <?php
        $run++;
    } 
    ?> 
    </select>
    </td>
    <?php	
}
?>

</td>
<?php
if($config_mod == 'page')
{
	?>
    <?php echo $list_str_navi ?>  
	<?
}
?>

</tr>
</table>