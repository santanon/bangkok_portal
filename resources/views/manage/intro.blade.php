<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>
@include('manage.include.header') 

<?php 
$count_progess = 0;
if($_SESSION['panel_style_template_id'] == '0')
{
	
}
else
{ 
	$count_progess++;
}
if($_SESSION['panel_style_logo_img1'] == '')
{
	
}
else
{
	$count_progess++;
}
if(@$_SESSION['panel_style_info_title'] <> '' && @$_SESSION['panel_style_info_keyword'] <> '' && @$_SESSION['panel_style_info_description'] <> '' )
{
	$count_progess++;
}
if($count_progess == 3)
{
	?>
    <script type="text/javascript">
	window.top.location = '<?php echo base_url() ?>/panel';
	</script>
    <?php
	exit;
}
?>

<div id="page-container" class="no-bg-slider">
    <div id="se-maincontainer-wrapper" style="min-height:300px;height:300px">
        <div id="se-maincontainer">
            <div id="page1col">
                <div id="content-slide-container">
                    <div class="content-slide-box expanded" style="width:100%;">
                        <div class="content-slide-detail">
                            <div class="right" style="width:100%">
                                <div class="header" style="width:100%">
                                    <div class="left">
                                        <table>
                                            <tr>
                                                <td valign="middle"><span class="header-text fontfacetext-bold"><?php echo $TextLanguage->lang('getting_start'); ?></span></td>
                                                <td valign="middle" width="76"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- header -->
                                <div class="content">  
                                <b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  
                                    <br /><br />
                                </div>
                                
                                             
                                <div class="content">
                                    <div data-tab-group="1" class="mod_tab-content">
                                        <div class="header"> 
                                        <span class="header-text fontfacetext-bold"></span> 
                                            <span data-tab-id="1" class="tab-btn btn-2stage big blue"><a class="fontfacetext" href="#"><?php echo $TextLanguage->lang('website_template'); ?></a></span> 
                                            <span data-tab-id="2" class="tab-btn btn-2stage big blue"><a class="fontfacetext" href="#"><?php echo $TextLanguage->lang('website_logo'); ?></a></span> 
                                            <span data-tab-id="3" class="tab-btn btn-2stage big blue"><a class="fontfacetext" href="#"><?php echo $TextLanguage->lang('website_information'); ?></a></span>  
                                        </div>
                                       
                                        <div class="content">
                                         
                                            <div data-tab-id="1" class="tab-content">
                                                <div style="border: 1px solid #ccc;padding:10px;margin-top:10px;">
                                                
<?php 
$count_progess = 0;
if($_SESSION['panel_style_template_id'] == '0')
{
	?>
	<div class="form-box">
		<table align="center">
			<tbody>
			<?php
			$run = 1;
			for($i=1;$i<=3;$i++)
			{
				?>
				 <tr>
					<?php
					for($ii=1;$ii<=5;$ii++)
					{
						?>
						 <td><a onclick="if(!confirm('<?php echo $TextLanguage->lang('choose_this_template'); ?>?')){ return false; }" href="<?php echo base_url(); ?>panel/set_template/<?php echo $run; ?>/1"><img src="<?php echo base_url(); ?>upload/admin/<?php echo $run; ?>.jpg" style="border:1px solid #CCC; width:145px;"></a></td>
						<?php
						$run++;
					}
					?> 
				</tr>
				<?php
			}
			?> 
			   
			</tbody>
		</table>
		 
	</div>
	<?php	
}
else
{
	?>
	<div class="form-box">
		<table align="center">
			<tbody>
				<tr> 
					<td align="center">
					<img src="<?php echo base_url(); ?>upload/admin/<?php echo $_SESSION['panel_style_template_id'] ?>.jpg" style="border:1px solid #CCC;">
					<br />
				  #Template<?php echo $_SESSION['panel_style_template_id'] ?>
					<br /><br /> 
					<span class="btn round big gray"><input onclick="if(confirm('<?php echo $TextLanguage->lang('confirm') ?>?')){ window.location = '<?php echo base_url(); ?>panel/set_template_reset';}" type="reset" class="fontfacetext" value="<?php echo $TextLanguage->lang('reset_template') ?>"></span> 
					</td>
				</tr> 
			</tbody>
		</table>
		 
	</div>
	<?php
	$count_progess++;
}
?>
                                                    
                                                </div>
                                            </div>
                                            <!-- tab-content -->
                                             
                                            <div data-tab-id="2" class="tab-content">
                                                <div style="border: 1px solid #ccc;padding:10px;margin-top:10px;">
                                              
                                                    <div align="center">
                                                    
                                                    
<?php
if($_SESSION['panel_style_logo_img1'] == '')
{
	?>
    <iframe frameborder="0" scrolling="auto" width="100%" height="350" src="<?php echo base_url() ?>panels/image_upload/"></iframe>
    <?php
}
else
{
	?>
	<div class="form-box"> 
		<table align="center">
			<tbody>
				<tr> 
					<td align="center">
					<img src="<?php echo base_url(); ?>upload/web/<?php echo $_SESSION['panel_style_logo_img1'] ?>" style="border:1px solid #CCC;"> 
					<br /><br /> 
					<span class="btn round big gray"><input onclick="if(confirm('<?php echo $TextLanguage->lang('confirm') ?>?')){ window.location = '<?php echo base_url(); ?>panels/image_upload/reset_logo';}" type="reset" class="fontfacetext" value="<?php echo $TextLanguage->lang('reset_logo') ?>"></span> 
					</td>
				</tr> 
			</tbody>
		</table>
		 
	</div>
	<?php 
	$count_progess++;
}
?>
                                                    
                                                    
                                                    
 
                                                     </div>
                                                </div> 
                                            </div>
                                            <!-- tab-content --> 
                                            
<div data-tab-id="3" class="tab-content">
<div style="border: 1px solid #ccc;padding:10px;margin-top:10px;"> 


<div class="content">

<div class="form-box">
    <script type="text/javascript">
    function check_form()
    {
        if(document.getElementById('info_title').value == '')
        {
            document.getElementById('info_title').focus();
            return false;
        } 
        if(document.getElementById('info_keyword').value == '')
        {
            document.getElementById('info_keyword').focus();
            return false;
        } 
		if(document.getElementById('info_description').value == '')
        {
            document.getElementById('info_description').focus();
            return false;
        }  																			
        if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))
        {
            return false;
        }
    }
    </script>
    <form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="<?php echo base_url(); ?>panel/set_info">
    <table align="center">
        <tbody>
             
    <tr>
        <th width="120"><?php echo $TextLanguage->lang('website_name'); ?> <span style="color:red">*</span></th>
        <td>
        <input id="info_title" name="info_title" type="text" class="sm-input" style="width:345px" placeholder="<?php echo $TextLanguage->lang('website_name'); ?>" value="<?php echo @$_SESSION['panel_style_info_title'] ?>"> 
        </td>
    </tr>
    
    <tr>
        <th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('website_keyword'); ?> <span style="color:red">*</span></th>
        <td> 
         <textarea id="info_keyword" name="info_keyword" style="width:350px" rows="5" placeholder="<?php echo $TextLanguage->lang('website_keyword'); ?>"><?php echo @$_SESSION['panel_style_info_keyword'] ?></textarea>
        </td>
    </tr>
             
             
            <tr>
                <th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('website_description'); ?> <span style="color:red">*</span></th>
                <td>
               <textarea id="info_description" name="info_description" style="width:350px" rows="5" placeholder="<?php echo $TextLanguage->lang('website_description'); ?>"><?php echo @$_SESSION['panel_style_info_description'] ?></textarea>
                </td>
            </tr>
            
            <tr>
                <th valign="top">&nbsp;</th>
                <td>
                
                <span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('save'); ?>"></span>&nbsp;
                <span class="btn round big gray"><input type="reset" class="fontfacetext" value="<?php echo $TextLanguage->lang('reset'); ?>"></span>

                </td>
            </tr>
            
            
        </tbody>
    </table>
    </form>
</div><!-- form-box -->

</div>
 
</div>
</div>
                                          
                                          
<?php
if(@$_SESSION['panel_style_info_title'] <> '' && @$_SESSION['panel_style_info_keyword'] <> '' && @$_SESSION['panel_style_info_description'] <> '' )
{
	$count_progess++;
}
?>                                          
                                          
                                          
                                          
                                          
                                          
                                          
                                            <!-- tab-content --> 
                                               
                                        </div>
                                        <div class="clearfix"></div>
                                         
                                    </div>
                                </div>
                                <!-- content --> 
<br />                               
<div id="site-storage" style="margin-left:150px">
<span class="fontfacetext-bold"><?php echo $TextLanguage->lang('profile_complete') ?></span>
<div class="storage-bar-container">
<span id="storage-use" class="storage-bar" style="width:<?php 

if($count_progess == 0)
{
	?>0<?php	
}
if($count_progess == 1)
{
	?>33<?php
}
if($count_progess == 2)
{
	?>66<?php
}
if($count_progess == 3)
{
	?>100<?php
}

?>%;"></span>
</div>
<span class="fontfacetext-bold"><?php echo $count_progess; ?> / 3</span> 
</div>


                            </div>
                            <!-- right -->
                            
                            <div class="clearfix"></div>
                            
                        </div>
                         
                    </div>
                    <!-- content-slide-box --> 
                    
                </div>
                <!-- content-slide-container --> 
            </div>
        </div>
    </div>
    <!-- main container --> 
    
</div> 

@include('manage.include.scripts')

<script> 
$(document).ready(function()
{ 
	tabFocus(1,<?php echo $tab ?>);
}); 
</script>

@include('manage.include.responsive')
