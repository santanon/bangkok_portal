<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
 
@include('manage.include.main_list_header')
                                                    
<?php
$run = 1; 
foreach ($list as $row)
{   
	?>
    <tr>
    <td align="center">#<?php echo sprintf('%06d', $row->id) ?></td> 
    <td align="left"> &nbsp; <?php if($row->title <> ''){echo $row->title;}else if($row->en_title <> ''){echo $row->en_title;}else{echo '-';} ?>
    
    <span class="link-text"><a href="<?php echo 'http://127.0.0.1:8000/manage-admin/set_cat?m='.$config_mod_sub_mod.'&id='.$row->id ?>"> ( <?php echo $list_sub_count[$row->id] ?> ) </a></span>
    
    </td>
     <td align="center"> &nbsp; <?php 
	
	$can_delete = '1';
	
	if(count($list_check_main_menu[$row->id]) > 0)
	{
		$ro = $list_check_main_menu[$row->id]; 
		?>  &nbsp;  <span class="link-text"><a href="<?php echo 'http://127.0.0.1:8000/manage-admin/edit?m=main_menu&id='.$ro[0]->id ?>"> <?php echo $TextLanguage->lang('main_menu') ?> </a></span> <?php 
		$can_delete = '2';
	}  
	if(count($list_check_page[$row->id]) > 0)
	{
		$ro = $list_check_page[$row->id]; 
		?><span class="link-text"><a href="<?php echo 'http://127.0.0.1:8000/manage-admin/edit?m=page&id='.$ro[0]->id ?>"> <?php echo $TextLanguage->lang('page') ?> </a></span> <?php 
		$can_delete = '2';
	} 
	if(count($list_check_top_menu[$row->id]) > 0)
	{
		$ro = $list_check_top_menu[$row->id]; 
		?><span class="link-text"><a href="<?php echo 'http://127.0.0.1:8000/manage-admin/edit?m=top_menu&id='.$ro[0]->id ?>"> <?php echo $TextLanguage->lang('top_menu') ?> </a></span> <?php 
		$can_delete = '2';
	} 
	if(count($list_check_footer_menu[$row->id]) > 0)
	{
		$ro = $list_check_footer_menu[$row->id]; 
		?><span class="link-text"><a href="<?php echo 'http://127.0.0.1:8000/manage-admin/edit?m=footer_menu&id='.$ro[0]->id ?>"> <?php echo $TextLanguage->lang('footer_menu') ?> </a></span> <?php 
		$can_delete = '2';
	} 
	
	if($can_delete == '1')
	{
		?>-<?php
	}
	
	?>  </td> 
    <td align="center"><span class="link-text"><a href="#" title="<?php echo date("d/m/Y [H:i:s]",$row->last_create) ?>"> <?php echo $CustomHelper->time_elapsed_string_th($row->last_create); ?> </a></span></td> 
    
    <?php
	$this_data['this_id'] = $row->id;
	$this_data['this_sort'] = $row->sort;
	$this_data['this_status'] = $row->status;
	$this_data['can_delete'] = $can_delete;
	?>
    @include('manage.include.list_loop_footer')
      
    </tr>
    <?php
} 
?>                                                     

@include('manage.include.main_list_footer')     
