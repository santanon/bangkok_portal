<?php
$this_run = 1;
foreach($config_submenu_mod as $each_mod)
{
	$each_title = each($config_submenu_title);
	?>
    <span data-btn-group-id="0" data-btn-id="<?php echo $this_run ?>" class="btn-2stage big arrow blue"><a class="fontfacetext" href="<?php echo base_url(); ?>panels/<?php echo $config_mod; ?>/<?php echo $each_mod[1] ?>"><?php echo $TextLanguage->lang($each_title[1]); ?></a><i class="icon-caret-right"></i></span>
    <?php
	$this_run++;
} 
?>