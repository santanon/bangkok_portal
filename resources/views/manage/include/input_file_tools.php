<input id="<?php echo $this_name ?>" name="<?php echo $this_name ?>" type="hidden" class="sm-input" style="width:99%;height:30px;" value="<?php echo $this_value ?>">  

<input id="<?php echo $this_name ?>_alt" name="<?php echo $this_name ?>_alt" type="hidden" class="sm-input" style="width:99%;height:30px;" value="<?php echo @$this_value_alt ?>"> 

<input id="<?php echo $this_name ?>_alt_en" name="<?php echo $this_name ?>_alt_en" type="hidden" class="sm-input" style="width:99%;height:30px;" value="<?php echo @$this_value_alt_en ?>"> 

<input id="<?php echo $this_name ?>_alt_sort" name="<?php echo $this_name ?>_alt_sort" type="hidden" class="sm-input" style="width:99%;height:30px;" value="<?php echo @$this_value_alt_sort ?>"> 

<iframe class="this_iframe" id="list_rec_<?php echo $this_name ?>" src="/upload_tools/manage.php?limit=<?php echo $this_limit ?>&m=<?php echo $config_mod ?>&f=<?php echo $this_name ?>&w=<?php echo $this_w ?>&h=<?php echo $this_h ?>&alt_text=<?php echo @$get_alt ?>&alt_text_en=<?php echo @$get_alt_en ?>&alt_text_sort=<?php echo @$get_alt_sort ?>" width="100%" height="1" scrolling="no" frameborder="0"></iframe>