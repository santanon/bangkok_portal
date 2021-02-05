<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   

@include('manage.include.header')  
  
<div align="center" style="padding-top:10px; font-family:Tahoma; font-size:12px;">
<?php $ro = $this_data; ?> 
<?php echo $ro[0]->info ?>
</div> 
   	 
@include('manage.include.scripts') 

 