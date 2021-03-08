<table>
<tr>
<td valign="middle"><span class="header-text fontfacetext-bold"><?php echo $config_dropdown_title; ?> : </span></td>
<td valign="middle" width="76">
<select class="selectric" name="read_type" id="read_type" onchange="window.location = '<?php echo base_url() . 'panels/'.$config_mod.'/set_cat/' ?>' + this.value;">
<option value="0" <?php if($this_cat_list == '0'){ ?> selected="selected" <?php } ?>>- <?php echo $this->lang->line('select'); ?> -</option>
<option value="1" <?php if($this_cat_list == '1'){ ?> selected="selected" <?php } ?>><?php echo $this->lang->line('unread'); ?></option>
<option value="2" <?php if($this_cat_list == '2'){ ?> selected="selected" <?php } ?>><?php echo $this->lang->line('read'); ?></option>
</select>
</td>
</tr>
</table>