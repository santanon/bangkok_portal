<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
  
@include('manage.include.main_list_header_gallery')


<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script> 

<style>
#sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; }
#sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 50px; }
#sortable li span { position: absolute; margin-left: -1.3em; }
</style>
  
<script>
$(function() {
$( "#sortable" ).sortable( 
{
    stop: function(event, ui) 
	{
        var data = "";

        $("#sortable li").each(function(i, el){
            var p = $(el).text().toLowerCase().replace(" ", "_");
            data += p+"="+$(el).index()+",";
			document.getElementById('list_order').value = data;
        }); 
    }
} 
);
$( "#sortable" ).disableSelection();
});
</script>
  
  
<ul id="sortable">                                                   
<?php 
foreach ($list as $row)
{   
	?>
    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"><?php echo $row->id ?></span><img src="<?php echo $row->img1 ?>" height="50" /></li>
    <?php
} 
?>  
</ul> 
<script>
function check_confirm()
{
	if(!confirm('<?php echo $TextLanguage->lang('confirm') ?>?'))
	{
		return false;
	}
}
</script>
<form method="post" action="<?php echo base_url() ?>panels/<?php echo $config_mod ?>/save_list" onsubmit="return check_confirm();">
<input type="hidden" name="list_order" id="list_order" value="" />
<div align="center"><input type="submit" name="a" value="<?php echo $TextLanguage->lang('save') ?>" /></div><br />
</form>

@include('manage.include.main_list_footer_gallery')    

