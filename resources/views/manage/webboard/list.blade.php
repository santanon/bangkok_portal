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
    <td align="left"> &nbsp; <?php echo $row->title ?> (<?php echo $row->post_user ?>)</td>
    <td align="center"> &nbsp; <?php echo $row->no_reply ?></td>
    <td align="center"><span class="link-text"><a href="#" title="<?php echo date("d/m/Y [H:i:s]",$row->last_update) ?>"> <?php echo $ci_obj->util->time_elapsed_string($row->last_update); ?> </a></span></td> 
    
    <?php
	$this_data['this_id'] = $row->id; 
	$this_data['this_status'] = $row->status;
	?>
    @include('manage.include.list_loop_footer')
      
    </tr>
    <?php
} 
?>                                                     

@include('manage.include.main_list_footer')     
