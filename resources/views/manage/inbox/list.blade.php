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
        
        <span id="read_message_show_<?php echo $row->id ?>"> 
            <img src="<?php echo base_url(); ?>assets/panel/<?php if($row->flag_read == 2){ ?>msg-read.gif<?php }else{ ?>msg-unread.gif<?php } ?>" width="16" height="16" align="absmiddle" /> &nbsp; <span class="link-text"><a <?php if($row->flag_read == '1'){ ?> onclick="document.getElementById('read_message_show_<?php echo $row->id ?>').style.display = 'none';document.getElementById('read_message_hide_<?php echo $row->id ?>').style.display = '';" <?php } ?> class="clightbox" data-width="600" data-height="500" href="http://127.0.0.1:8000/manage-admin/read?m=<?php echo $config_mod; ?>&id=<?php echo $row->id ?>"><?php 
            
            if($row->flag_read == 2)
            {
                ?><?php echo $row->title ?><?php
            }
            else
            {
                ?><b><?php echo $row->title ?></b><?php	
            }
            
            ?></a></span> 
		</span><?php
		
		if($row->file1 <> '')
		{
			?><img src="<?php echo base_url(); ?>assets/panel/attachment.png" width="16" height="16" align="absmiddle" /><?php
		}
		?>
        
        <span id="read_message_hide_<?php echo $row->id ?>" style="display:none;"> 
            <img src="<?php echo base_url(); ?>assets/panel/msg-read.gif" width="16" height="16" align="absmiddle" /> &nbsp; <span class="link-text"><a class="clightbox" data-width="600" data-height="500" href="http://127.0.0.1:8000/manage-admin/read?m=<?php echo $config_mod; ?>&id=<?php echo $row->id ?>"> <?php echo $row->title ?> </a></span>
        </span>
          
         </td>
         
         
        <td align="center"><?php echo $row->from_name ?></td>
         
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