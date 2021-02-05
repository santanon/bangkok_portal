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
    <td align="left"> &nbsp; <span class="link-text"><a href="<?php echo 'http://127.0.0.1:8000/manage-admin/set_cat?m=contentbox&id='.$row->id ?>"> <?php echo $row->title ?> </a></span> [ <?php echo $list_sub_count[$row->id] ?> ]</td>
    <td align="center"><span class="link-text"><a href="#" title="<?php echo date("d/m/Y [H:i:s]",$row->last_create) ?>"> <?php echo $CustomHelper->time_elapsed_string_th($row->last_create); ?> </a></span></td> 
    
    <?php
	$this_data['this_id'] = $row->id;
	$this_data['this_sort'] = $row->sort;
	$this_data['this_status'] = $row->status;
	?>
    @include('manage.include.list_loop_footer')
      
    </tr>
    <?php
} 
?>                                                     

@include('manage.include.main_list_footer')     
