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
    if($row->box_number == 1)
    {
        ?><?php echo 'ข่าวสาร'; ?><?php
    }
    else if($row->box_number == 2)
    {
        ?><?php echo 'คำถามที่พบบ่อย'; ?><?php
    }
    else if($row->box_number == 3)
    {
        ?><?php echo 'ปฏิทินกิจกรรม'; ?><?php
    }
    else if($row->box_number == 4)
    {
        ?><?php echo 'ภาพกิจกรรม'; ?><?php
    }
    else if($row->box_number == 5)
    {
        ?><?php echo 'วิดิทัศน์'; ?><?php
    }
    else if($row->box_number == 6)
    {
        ?><?php echo 'ดาวน์โหลด'; ?><?php
    }
    else if($row->box_number == 7)
    {
        ?><?php echo 'แบนเนอร์'; ?><?php
    }
    else if($row->box_number == 8)
    {
        ?><?php echo 'แบบสอบถาม'; ?><?php
    }
    else if($row->box_number == 9)
    {
        ?><?php echo 'โพลล์/โหวต'; ?><?php
    }   
    ?> : <?php echo $row->en_title ?>
    </td>
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
