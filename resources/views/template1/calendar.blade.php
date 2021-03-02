<?php 
$_SESSION['arr_script_slide'] = $_SESSION['arr_script_slide']."slide_calendar_".$this_box_real_id."|";
?>
<!-- ปฏิทินกิจกรรม -->
<div id="calendar" data-id="3_<?php echo $this_box_id ?>" class="section-content bg-color-white">
<div class="group-mange-section">
<div class="manage-tools">
<ul>
<li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/add?m=activities');">เพิ่มข้อมูล</a></li>
<li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/set_cat?m=activities&id=<?php echo @${"data_box_".$r->box_number."_".$this_box_real_id}[0]->cat_id ?>');">จัดการข้อมูล</a></li>  
<li class="order-list order-close">ปิด</li> 
</ul>
</div> 
<div class="manage-dragdrop">
<img src="{{ asset('template1/assets/images/icons/icon-dragdrop.svg')}}" alt="icon" title="Drag and Drop">
</div>
<div class="manage-edit">
<img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
</div>
</div>
<div class="container">
<div class="inner-content">
<div class="top-content">
<div class="group-text">

    <h3 class="title color-primary"><?php

        if($this_box_id != '')
        {
            echo $CustomHelper->L(${"data_box_cat_".$r->box_number."_".$this_box_real_id}[0]->title,${"data_box_cat_".$r->box_number."_".$this_box_real_id}[0]->en_title);
        }
        else 
        {
            ?>ปฏิทินกิจกรรม<?php
        }
        
            ?></h3>
                <p class="desc color-secondary"><?php 
                
                if($this_box_id != '')
                {
                    echo $CustomHelper->L(${"data_box_cat_".$r->box_number."_".$this_box_real_id}[0]->en_title,"");
                }
                
                    ?> </p> 


</div>
<div class="group-gotoall">
    <?php 
    if(isset(${"data_box_link_".$r->box_number."_".$this_box_real_id}) && ${"data_box_link_".$r->box_number."_".$this_box_real_id} != '')
    {
        ?><a href="<?php echo ${"data_box_link_".$r->box_number."_".$this_box_real_id} ?>" class="btn btn-outline-dark">กิจกรรมทั้งหมด</a><?php
    }
    else
    {
        ?><?php
    }
    ?> 

</div>
</div>

<div class="main-content">
<div class="action-slide dis-flex justify-between">
    <div class="input-custom">
        <div class="select-wrapper">
            <select name="month" class="slc" onchange="window.location = '?f_m='+this.value;">
                <optgroup label="เดือน">
                    <option value="">- ล่าสุด -</option>
                    <?php   
                    //$start = $month = mktime(0,0,0,1,1,2020); 
                    // $start = $month = strtotime('2020-01-01');
                    //$end = mktime(23,59,59,1,1,2022); 
                    //$end = strtotime('2022-01-01');

                    $today = mktime(0,0,0,date('m'),1,date('Y'));  
                    $start = $month = strtotime("-3 month", $today);
                    $end = strtotime("+3 month", $today);

                    while($month < $end)
                    { 
                        $month = strtotime("+1 month", $month);
                        ?>
                        <option <?php
                        
                        if(isset($_GET['f_m']) && $_GET['f_m'] == date('m_Y',$month))
                        {
                            ?> selected <?php
                        }
                        
                        ?> value="<?php echo date('m_Y',$month) ?>"><?php  
                        echo $CustomHelper->L($CustomHelper->date_unix_to_thai_mon2($month).' '.(date('Y',$month)+543),date('M',$month).' '.date('Y',$month)); 
                        ?></option>
                        <?php
                    }
                    
                    for($i=1;$i<=3;$i++)
                    {
                        ?><?php 
                    }
                    ?> 
                </optgroup>
            </select>
        </div>
    </div>

    <div class="slide-wrapper" id="action-slide_calendar_<?php echo $this_box_real_id ?>">
        <div class="slide-arrow slide-prev"></div>
        <div class="slide-arrow slide-next"></div>
    </div>
</div>

                             

                            <div class="group-slide">
                                <div class="list-item" id="slide_calendar_<?php echo $this_box_real_id ?>">
<?php
foreach(${"data_box_".$r->box_number."_".$this_box_real_id} as $r_sub)
{
    ?>
    <div class="item">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="left">
                    <div class="text-content bg-color-primary"><?php echo date('j',$r_sub->date_news)  ?></div>
                    <div class="text-onbottom bg-color-secondary"><?php echo $CustomHelper->date_unix_to_thai_mon($r_sub->date_news) ?></div>
                </div>
            </div>

            <?php 
            $info_url = "#";
            if(isset(${"data_box_link_".$r->box_number."_".$this_box_real_id}) && ${"data_box_link_".$r->box_number."_".$this_box_real_id} != '')
            {
                $info_url = ${"data_box_link_".$r->box_number."_".$this_box_real_id}."/0/info/".$r_sub->id."/".$r_sub->title; 
            } 
            ?> 

            
            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                <div class="right">
                    <div class="text-content">
                        <a href="<?php echo $info_url ?>">
                            <?php echo $CustomHelper->L($r_sub->title,$r_sub->en_title); ?>
                        </a>
                    </div>
                    <!--<div class="text-onbottom"><i class="fas fa-map-marker-alt"></i> ถนนเสรีไทย ฝั่งเลขคู่</div>-->
                </div>
            </div>
        </div>
    </div> 
    <?php
}
?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 