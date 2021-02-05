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
        <td align="center">#<?php echo $row->id ?></td>
        <td> 
        
        <span class="link-text"><a class="clightbox" data-width="600" data-height="500" href="<?php echo 'http://127.0.0.1:8000/manage-admin/read?m='.$config_mod.'&id='.$row->id ?>"> <?php echo $row->title ?> </a></span>
          
         </td> 
         
        <td align="center"><?php echo $row->contact_name ?></td>
         
        <td align="center"><span class="link-text"><a href="#" title="<?php echo date("d/m/Y [H:i:s]",$row->last_create) ?>"> <?php echo $CustomHelper->time_elapsed_string_th($row->last_create); ?> </a></span></td>
    
    <?php
	$this_data['this_id'] = $row->id; 
	$this_data['this_sort'] = '';
	?>
    @include('manage.include.list_loop_footer')
        
    </tr>
    <?php
} 
?> 

@include('manage.include.main_list_footer')   