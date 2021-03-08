@include('manage.include.header')  

<script>
parent.document.getElementById('modal_full_span').innerHTML = '<?php echo $this_cat ?>' 
</script>
 
 <div id="se-wrapper">
		<div id="page-container" class="no-bg-slider"> 
			<div id="se-maincontainer-wrapper" class="page01">
				<div id="se-maincontainer"> 
					<div id="page1col">
						<div id="content-slide-container"> 
							<div class="content-slide-box expanded"> 
                                 
								<div class="content-slide-detail"> 
									<div class="right"> 
                                        @include('manage.include.content_head')  
                                        <!--<div class="desc-box"> 
        								<?php echo $config_list_header_info ?>  
                                        </div>--> 
										<?php
                                        if($config_use_add == true || $config_use_sort == true)
                                        {
                                            if($config_dropdown_cat_file <> '')
                                            {
                                                ?>
                                                <br /><br />
                                                @include($config_dropdown_cat_file)
                                                <?php 	
                                            }	
                                        } 
                                        ?>   
										<div class="header">  
                                        	<div class="left">   
                                            @include('manage.include.list_search_column')
											</div>	
											<?php 
											if($config_mod == 'home_bg')
											{
												?>
												การเปลี่ยนภาพ : 
                                                <select style="height: 25px;">
													<option value="">Slide Show</option>
													<option value="">Dissolve</option>
													<option value="">Fade In</option>
													<option value="">Fade Out</option>
												</select>
												<select style="height: 25px;">
													<option value="">3 วินาที</option>
													<option value="" selected>5 วินาที</option>
													<option value="">10 วินาที</option>
													<option value="">15 วินาที</option>
													<option value="">30 วินาที</option>
												</select>
                                                <?php
											} 
											?>   
											<?php 
											if($config_mod == 'inbox')
											{
												?>
                                                  <span class="btn round big green"><input onclick="window.location = 'send?m=<?php echo $config_mod ?>';" type="button" class="fontfacetext" value="ส่งข้อความ"></span> 
                                                <?php
											} 
											?>
                                            <div class="right">  
                                            <?php 
											if($config_use_add)
											{
												?>
                                                 <span class="btn round big green"><input onclick="window.location = 'add?m=<?php echo $config_mod ?>';" type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('add'); ?>"></span> 
                                                <?php
											} 
											if($config_use_sort)
											{
												?>
                                                <span class="btn round big blue"><input onclick="check_list()" type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('update_sort'); ?>"></span>
                                                <?php
											} 
											if($config_use_add == false && $config_use_sort == false)
											{
												if($config_dropdown_cat_file <> '')
												{ 	
													?>
													@include($config_dropdown_cat_file)
													<?php
												}	
											} 
											?>  
											</div>  
										</div> 
                                        <div class="content">
											<div class="table-box">
                                            
<script>
function check_list()
{
	if(confirm('<?php echo $TextLanguage->lang('confirm') ?>?'))
	{
		document.getElementById('list_form').submit();	
	}	
}
</script> 
<form action="set_sort?m=<?php echo $config_mod ?>" method="post" name="list_form" id="list_form">  
@csrf <!-- {{ csrf_field() }} -->                                          														
												<table>
													<thead>
                                                    	<tr>                                                        
@include('manage.include.list_loop_column')                                                       
<?php
if($config_use_sort)
{
	?>
    <th width="100"><span class="fontfacetext"><?php echo $TextLanguage->lang('sort'); ?>
    <?php
    if($_SESSION[$config_mod.'_sort_1'] == 'sort' && $_SESSION[$config_mod.'_sort_2'] == 'asc')
    {
        ?><a style="text-decoration:none;"><i style="font-size:16px;color:rgb(112, 112, 112)" class="icon-caret-up"></i></a><?php	
    }
    else
    {
        ?><a style="text-decoration:none;" href="set_order_by?m=<?php echo $config_mod ?>&sort1=sort&sort2=asc"><i style="font-size:13px;color:#fff" class="icon-caret-up"></i></a><?php
    }
    ?>
    <?php
    if($_SESSION[$config_mod.'_sort_1'] == 'sort' && $_SESSION[$config_mod.'_sort_2'] == 'desc')
    {
        ?><a style="text-decoration:none;"><i style="font-size:16px;color:rgb(112, 112, 112)" class="icon-caret-down"></i></a><?php	
    }
    else
    {
        ?><a style="text-decoration:none;" href="set_order_by?m=<?php echo $config_mod ?>&sort1=sort&sort2=desc"><i style="font-size:13px;color:#fff" class="icon-caret-down"></i></a><?php
    }
    ?>
     </span></th> 
	<?php
}
?> 
 <?php
if($config_use_edit)
{
	?>
	<th width="50"><span class="fontfacetext"><?php echo $TextLanguage->lang('edit'); ?></span></th> 
	<?php
}
?> 
<?php
if($config_use_status)
{
	?>
	<th width="50"><span class="fontfacetext"><?php echo $TextLanguage->lang('status'); ?></span></th> 
	<?php
}
?>
<?php
if($config_use_delete)
{
	?>
	 <th width="50"><span class="fontfacetext"><?php echo $TextLanguage->lang('delete'); ?></span></th> 
	<?php
}
?>
 
                                                        </tr>
													</thead>
													<tbody>