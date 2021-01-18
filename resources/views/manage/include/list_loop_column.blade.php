<?php
$column_title = $config_list_column_title;
$column_width = $config_list_column_width;
$column_name = $config_list_column_name;
 
$column_each2 = $column_width;
$column_each3 = $column_name;

$index_run = 0;
foreach($column_title as $column_each)
{ 
	?>
    <th <?php 
	
	if($column_each2[$index_run] <> '')
	{
		?> width="<?php echo $column_each2[$index_run] ?>" <?php
	}
	
	?>> 
    <span class="fontfacetext"><?php echo $TextLanguage->lang($column_each) ?>
    <?php
    if($_SESSION[$config_mod.'_sort_1'] == $column_each3[$index_run] && $_SESSION[$config_mod.'_sort_2'] == 'asc')
    {
        ?><a style="text-decoration:none;"><i style="font-size:16px;color:rgb(112, 112, 112)" class="icon-caret-up"></i></a><?php	
    }
    else
    {
        ?><a style="text-decoration:none;" href="set_order_by?m=<?php echo $config_mod ?>&sort1=<?php echo $column_each3[$index_run] ?>&sort2=asc"><i style="font-size:13px;color:#fff" class="icon-caret-up"></i></a><?php
    }
    ?>
    
    <?php
    if($_SESSION[$config_mod.'_sort_1'] == $column_each3[$index_run] && $_SESSION[$config_mod.'_sort_2'] == 'desc')
    {
        ?><a style="text-decoration:none;"><i style="font-size:16px;color:rgb(112, 112, 112)" class="icon-caret-down"></i></a><?php	
    }
    else
    {
        ?><a style="text-decoration:none;" href="set_order_by?m=<?php echo $config_mod ?>&sort1=<?php echo $column_each3[$index_run] ?>&sort2=desc"><i style="font-size:13px;color:#fff" class="icon-caret-down"></i></a><?php
    }
    ?>
    </span>
    </th>
    <?php
	$index_run++;	 
}  
?>