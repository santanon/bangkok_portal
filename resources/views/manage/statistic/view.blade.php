<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
@include('manage.include.main_form_header') 

 
  <br />

<div align="center"><b style="font-size:12px;"><?php echo $TextLanguage->lang('top_menu') ?> : </b></div>
<table width="380" align="center" border="1" style="font-size:12px; font-family:Tahoma">
<?php
echo $main_str_top;
?>    
</table>
<br />
<div align="center"><b style="font-size:12px;"><?php echo $TextLanguage->lang('main_menu') ?> : </b></div>
<table width="380" align="center" border="1" style="font-size:12px; font-family:Tahoma">
<?php
echo $main_str;
?>    
</table>
<br />
<div align="center"><b style="font-size:12px;"><?php echo $TextLanguage->lang('footer_menu') ?> : </b></div>
<table width="380" align="center" border="1" style="font-size:12px; font-family:Tahoma">
<?php
echo $main_str_footer;
?>    
</table>
 <br />   
    
@include('manage.include.main_form_footer') 