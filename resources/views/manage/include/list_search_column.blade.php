<table width="300">
<tr><form method="post" action="search?m=<?php echo $config_mod ?>">
@csrf <!-- {{ csrf_field() }} -->
<td valign="middle"> <input id="s" name="s" type="text" class="sm-input" style="width:250px;" value="<?php echo $config_search_text ?>" placeholder='<?php echo $TextLanguage->lang('search') ?>'>  <?php if($config_search_text <> ''){ ?><input type="button" value="Reset" onclick="window.location = 'search_reset?m=<?php echo $config_mod ?>';" /><?php } ?>  <input type="image" src="/assets/panel/search_icon.gif" align="absmiddle">  
</td>
</form>
</tr>
</table>