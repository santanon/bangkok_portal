<?php
if($config_use_sort)
{
	?>
   <td align="center"><input onclick="this.select();" type="text" name="sort[<?php echo $row->id ?>]" id="sort_<?php echo $row->id ?>" value="<?php echo $row->sort ?>" style="width:50px; text-align:center" maxlength="4" tabindex="1" /></td>
	<?php
}
?> 
 <?php
if($config_use_edit)
{
	?>
	<td align="center"><a href="edit?m=<?php echo $config_mod ?>&id=<?php echo $row->id ?>" class="icn-edit" title="<?php echo $TextLanguage->lang('edit'); ?>" ></a></td>
	<?php
}
?> 
<?php
if($config_use_status)
{
	?>
	<td align="center"><?php
    
	if($row->status == 1)
	{
		?>
		<a title="<?php echo $TextLanguage->lang('click_for_hide'); ?>" href="set_status_hide?m=<?php echo $config_mod ?>&id=<?php echo $row->id ?>" onclick="if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>')){ return false; }"><span style="height:15px;width:15px;background-color:rgb(36,153,0);border-radius:50%;display:inline-block;"></span></a>
        <?php
	}
	else
	{
		?>
		<a title="<?php echo $TextLanguage->lang('click_for_show'); ?>" href="set_status_show?m=<?php echo $config_mod ?>&id=<?php echo $row->id ?>" onclick="if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>')){ return false; }"><span class="dot" style="height:15px;width:15px;background-color:rgb(255,0,0);border-radius:50%;display:inline-block;"></span></a>
        <?php
	}
	
	?> 
    </td>
	<?php
}
?>
<?php
if($config_use_delete)
{
	if(@$can_delete == '2')
	{
		?>
		<td align="center"><a href="javascript:;" class="icn-bin" title="Delete" onclick="alert('<?php echo $TextLanguage->lang('cannot_delete_this_item_is_in_use'); ?>');"></a></td>
		<?php	
	}
	else
	{
		?>
		<td align="center"><a href="delete?m=<?php echo $config_mod ?>&id=<?php echo $row->id ?>" class="icn-bin" title="Delete" onclick="if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>')){ return false; }"></a></td>
		<?php	
	}
	
}
?>