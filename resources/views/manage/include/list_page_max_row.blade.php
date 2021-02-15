<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-size: 16px;">
<tr>
<td>
<?php echo $TextLanguage->lang('page1'); ?> : 
 <select name="page" style="font-size: 16px;" onchange="window.location = 'set_page_num?m=<?php echo $config_mod ?>&p=' + this.value;">
    <?php
    for($i=0;$i<=$config_total_pages;$i++)
    {
        ?><option value="<?php echo $i ?>" <?php
        
        if($i == $config_page_num)
        {
            ?> selected="selected" <?php	
        }
        
        ?>><?php echo $i+1 ?></option><?php
    }
    ?> 
</select>&nbsp;

<?php echo $TextLanguage->lang('of_page'); ?> <?php echo $config_total_pages+1; ?>
</td>
<td align="right">
<?php echo $TextLanguage->lang('items_page'); ?>  :
        <select name="max_rows" style="font-size:16px;" id="max_rows" onchange="window.location = 'set_max_rows?m=<?php echo $config_mod ?>&p=' + this.value;">   			
        	<option value="5" <?php if($config_max_rows == '5'){ ?> selected="selected" <?php } ?>>5</option>
            <option value="10" <?php if($config_max_rows == '10'){ ?> selected="selected" <?php } ?>>10</option>
            <option value="20" <?php if($config_max_rows == '20'){ ?> selected="selected" <?php } ?>>20</option>
            <option value="50" <?php if($config_max_rows == '50'){ ?> selected="selected" <?php } ?>>50</option>
            <option value="100" <?php if($config_max_rows == '100'){ ?> selected="selected" <?php } ?>>100</option> 
        </select>
</td>
</tr>
</table>