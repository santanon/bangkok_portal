@include('manage.include.header') 

<?php 
if(isset($this_cat))
{
	?>
<script>
	parent.document.getElementById('modal_full_span').innerHTML = '<?php echo $this_cat ?>' 
	</script>
	<?php
}
?>



<style>
table{ width:100%; }
</style> 
	<div id="se-wrapper">
		<div id="page-container" class="no-bg-slider"> 
			<div id="se-maincontainer-wrapper" class="page01">
				<div id="se-maincontainer"> 
					<div id="page1col">
						<div id="content-slide-container">  <?php if(isset($no_back) && $no_back == 1){ ?><?php } else { ?><a href="list?m=<?php echo $config_mod ?>" class="back_link"><< ย้อนกลับ</a><?php } ?>
							<div class="content-slide-box expanded">  
								<div class="content-slide-detail"> 
									<div class="right"> 
 										@include('manage.include.content_head')    
                                        <div class="desc-box">
                                        <?php echo @$config_header_info; ?>
                                        </div> 
										<div class="content"> 
											<div class="form-box">