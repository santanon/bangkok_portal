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
    <td align="left"> &nbsp; 
		
		<?php 
		if(strpos($row->title,'|') > -1)
		{
			$this_title = $row->title; 
			$this_title = explode('|',$this_title); 
			echo $this_title[0]; 
		}
		else
		{
			echo $row->title; 
		} 
		?>
	
	</td>
    <td align="left"> &nbsp; <img src="<?php echo $CustomHelper->get_img_url($row->img1) ?>" width="300" /></td>
    <td align="center"><span class="link-text"><a href="#" title="<?php echo date("d/m/Y [H:i:s]",$row->last_create) ?>"> <?php echo $CustomHelper->time_elapsed_string_th($row->last_create); ?> </a></span></td> 
    
    <?php
	$this_data['this_id'] = $row->id;
	$this_data['this_sort'] = $row->sort;
	$this_data['this_status'] = $row->status; 
	if($row->title == 'Template')
	{
		$this_data['config_use_delete'] = true;
		$this_data['can_delete'] = '2';	
	} 
	else
	{
		$this_data['can_delete'] = '1';	
	}
	?>
    @include('manage.include.list_loop_footer')
      
    </tr>
    <?php
} 
?>                                                     

@include('manage.include.main_list_footer')     
