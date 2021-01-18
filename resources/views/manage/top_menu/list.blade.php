<?php
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
?>
@include('manage.include.main_list_header')

<?php
$run = 1; 
foreach ($list as $row)
{   
	?>
    <tr>
    <td align="center">#<?php echo sprintf('%06d', $row->id) ?></td> 
    <td align="left"> &nbsp; <?php if($row->title <> ''){echo $row->title;}else if($row->en_title <> ''){echo $row->en_title;}else{echo '-';} ?>
    
    <?php 		
	/*switch($row->page_type)
	{
		case "group" :
			?> &nbsp; 
             <span class="link-text">[ <a href="<?php echo base_url() ?>panels/page/set_cat/<?php echo $row->id ?>"> <?php echo $TextLanguage->lang('sub_menu_list') ?> ( <?php echo $list_sub_count[$row->id] ?> ) </a> ]</span> 
               <?php	
			break;
		case "texteditor" :
			?> 
			<?php
			if($row->can_review == '1')
			{
				?>
				&nbsp; <img src="<?php echo base_url() ?>assets/panel/comment.png" align="absmiddle" style="cursor:pointer;" onclick="callLightbox('<?php echo base_url(); ?>panels/<?php echo $config_mod ?>/comment_text/<?php echo $row->id ?>/top',800,640);return false;" />
				<?php
			}
			?> 
			<?php
			break;
		case "url" :
			?><?php
			break;
		case "news" :
			?> &nbsp; [ <span class="link-text"><a href="<?php echo base_url() ?>panels/news/set_cat_from_top_menu/<?php echo $row->data_id ?>"> <?php echo $list_page_mod_title[$row->id] ?> ( <?php echo $list_page_mod_count[$row->id] ?> ) </a></span> ]  <?php
			break;
		case "calendar" :
			?> &nbsp; [ <span class="link-text"><a href="<?php echo base_url() ?>panels/activities/set_cat_from_top_menu/<?php echo $row->data_id ?>"> <?php echo $list_page_mod_title[$row->id] ?> ( <?php echo $list_page_mod_count[$row->id] ?> ) </a></span> ]  <?php
			break;
		case "faq" :
			?> &nbsp; [ <span class="link-text"><a href="<?php echo base_url() ?>panels/faq/set_cat_from_top_menu/<?php echo $row->data_id ?>"> <?php echo $list_page_mod_title[$row->id] ?> ( <?php echo $list_page_mod_count[$row->id] ?> ) </a></span> ]  <?php
			break;
		case "gallery" :
			?> &nbsp; [ <span class="link-text"><a href="<?php echo base_url() ?>panels/gallery/set_cat_from_top_menu/<?php echo $row->data_id ?>"> <?php echo $list_page_mod_title[$row->id] ?> ( <?php echo $list_page_mod_count[$row->id] ?> ) </a></span> ]  <?php
			break;
		case "banner" :
			?> &nbsp; [ <span class="link-text"><a href="<?php echo base_url() ?>panels/banner/set_cat_from_top_menu/<?php echo $row->data_id ?>"> <?php echo $list_page_mod_title[$row->id] ?> ( <?php echo $list_page_mod_count[$row->id] ?> ) </a></span> ]  <?php
			break;
		case "download" :
			?> &nbsp; [ <span class="link-text"><a href="<?php echo base_url() ?>panels/download/set_cat_from_top_menu/<?php echo $row->data_id ?>"> <?php echo $list_page_mod_title[$row->id] ?> ( <?php echo $list_page_mod_count[$row->id] ?> ) </a></span> ]  <?php
			break;
		case "question" :
			?> &nbsp; [ <span class="link-text"><a href="<?php echo base_url() ?>panels/question/set_cat_from_top_menu/<?php echo $row->data_id ?>"> <?php echo $list_page_mod_title[$row->id] ?> ( <?php echo $list_page_mod_count[$row->id] ?> ) </a></span> ]  <?php
			break;
		case "poll" :
			?> &nbsp; [ <span class="link-text"><a href="<?php echo base_url() ?>panels/poll/set_cat_from_top_menu/<?php echo $row->data_id ?>"> <?php echo $list_page_mod_title[$row->id] ?> ( <?php echo $list_page_mod_count[$row->id] ?> ) </a></span> ]  <?php
			break;
		case "webboard" :
			?> &nbsp; [ <span class="link-text"><a href="<?php echo base_url() ?>panels/webboard/set_cat_from_top_menu/<?php echo $row->data_id ?>"> <?php echo $list_page_mod_title[$row->id] ?> ( <?php echo $list_page_mod_count[$row->id] ?> ) </a></span> ]  <?php
			break; 
		default :
			?>-<?php
			break;	
	}*/
	?>
    </td>
    <td align="center">
    <?php  		
	switch($row->page_type)
	{
		case "group" :
			?><?php echo $TextLanguage->lang('group_page') ?><?php
			break;
		case "texteditor" :
			?><?php echo $TextLanguage->lang('texteditor_page') ?><?php
			break;
		case "url" :
			?><?php echo $TextLanguage->lang('url_link') ?><?php
			break;
		case "news" :
			?><?php echo $TextLanguage->lang('news') ?><?php
			break;
		case "calendar" :
			?><?php echo $TextLanguage->lang('activities_calendar2') ?><?php
			break;
		case "faq" :
			?><?php echo $TextLanguage->lang('faq') ?><?php
			break;
		case "gallery" :
			?><?php echo $TextLanguage->lang('image_gallery') ?><?php
			break;
		case "banner" :
			?><?php echo $TextLanguage->lang('banner_link') ?><?php
			break;
		case "download" :
			?><?php echo $TextLanguage->lang('download_file') ?><?php
			break;
		case "question" :
			?><?php echo $TextLanguage->lang('question_form') ?><?php
			break;
		case "poll" :
			?><?php echo $TextLanguage->lang('poll_vote') ?><?php
			break;
		case "webboard" :
			?><?php echo $TextLanguage->lang('webboard1') ?><?php
			break; 
		default :
			?>-<?php
			break;	
	}
	?>
    </td>
    <td align="center"><span class="link-text"><a href="#" title="<?php echo date("d/m/Y [H:i:s]",$row->last_create) ?>"> <?php echo $CustomHelper->time_elapsed_string_th($row->last_create) ?> </a></span></td> 
    
    <?php
	$this_data['this_id'] = $row->id;
	$this_data['this_sort'] = $row->sort;
	$this_data['this_status'] = $row->status;
	?>
    @include('manage.include.list_loop_footer')      
    </tr>
    <?php
} 
?>                                                     
@include('manage.include.main_list_footer')  