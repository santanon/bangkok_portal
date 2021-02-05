<table>
<tr>
<td valign="middle"><span class="header-text fontfacetext-bold"><?php echo $config_dropdown_title; ?> : </span></td>
<td valign="middle" width="76">
<select class="selectric" name="read_type" id="read_type" onchange="window.location = '<?php echo 'http://127.0.0.1:8000/manage-admin/set_cat?m='.$config_mod.'&id=' ?>' + this.value;">
<option value="0" <?php if($this_cat_list == '0'){ ?> selected="selected" <?php } ?>>- <?php echo $TextLanguage->lang('select'); ?> -</option>
<option value="1" <?php if($this_cat_list == '1'){ ?> selected="selected" <?php } ?>><?php echo $TextLanguage->lang('unread'); ?></option>
<option value="2" <?php if($this_cat_list == '2'){ ?> selected="selected" <?php } ?>><?php echo $TextLanguage->lang('read'); ?></option>
</select>
</td>
</tr>
</table>