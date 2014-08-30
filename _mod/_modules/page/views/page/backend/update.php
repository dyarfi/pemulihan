<?php defined('SYSPATH') or die('No direct script access.'); ?>
<script type="text/javascript">
$(document).ready(function () {
	$('#language_select').change(function() {
	<?php
	$prefix = array();
	foreach($languages['var_listing'] as $row):
		//$file_data	= pathinfo($language_file[$row->id]->file_name);
		//$thumb		=(Kohana::config('language.image'));
		//$img		= url::base().Kohana::config('language.upload_url').$file_data['filename']."_resize_".$thumb['thumbnails'][1].".".$file_data['extension'];
		$img		= IMG.'languages/'.$row['file_name'];
		$prefix[$row['langId']] = $row['prefix'];
		?>
		if($(this).val() == <?php echo $row['langId']; ?> && $(this).val() != 0) {
			$("<?php echo '#lang_' . $row['prefix']; ?>").fadeIn();
			$(".flag_holder").html('<img src="<?php echo $img;?>" alt="<?php echo $row['name']; ?>"/>');	
		} else {
			$("<?php echo '#lang_' . $row['prefix']; ?>").fadeOut();
		}
		<?php
	endforeach;
	?>
		//alert($(this).find('option').text());		
		//if ($(this).text() == $(".flag_holder").find('img').attr('alt')) {
			//alert($(".flag_holder").find('img').attr('alt'));
		//}
	}).eq(0).change();
});
</script>
<?php //print_r($menu_title); ?>
<h2><?php echo Helper_Common::label(i18n::get('content_edit'),'Career');?></h2>
<div class="ls10"></div>
<div class="bar"></div>
<div class="ls10"></div>

<?php if (!isset($menu_title['var_listing'])) : ?>
    <div class="warning3"><?php echo i18n::get('error_no_data'); ?></div>

    <div class="ls10"></div>
    <div class="bar"></div>
    <div class="ls10"></div>
<?php else: $data = $menu_title['var_listing'][0];
	?>
    <form action="<?php echo Kohana::$base_url;?>admin-cp/career/update/<?php echo $titleId;?>" enctype="multipart/form-data" class="general autovalid" method="post">
        <input type="hidden" name="titleId" id="titleId" value="<?php echo $titleId; ?>" />
		
		<fieldset>		
			<legend>Menu Title</legend>
			<?php echo Form::label('title','Title Menu &nbsp; <span class="red">* Permalink - [a-z/_/0-9]</span>'); ?>
			<div class="ls5"></div>
			<?php echo Form::input('title',$data['title'],array('id'=>'title', 'class'=>'required')); ?>
			<div class="ls5"></div>
		</fieldset>
		
		<div style="margin:10px">
				<label>Change Language</label>
				<select name="language_select" id="language_select" class="required">
					<?php 
					foreach($languages['var_listing'] as $flag):
						//$file_data	= pathinfo($language_file[$flag->langaugeId]->file_name);
						//$thumb =(Kohana::config('language.image'));
						//$img = url::base().Kohana::config('language.upload_url').$file_data['filename']."_resize_".$thumb['thumbnails'][1].".".$file_data['extension'];
						$img		= IMG.'languages/'.$flag['file_name'];
					?>
						<!--div class="lang_desc"-->
							<!--a href="javascript:void(0);" id="handler_<?php echo $flag['prefix'];?>" title="<?php echo $flag['name']; ?>"><img src="<?php echo $img; ?>" alt="<?php echo $flag['name'];?>"/></a-->
						<!--/div-->
						<option value="<?php echo $flag['langId'];?>" <?php echo ($flag['langId'] == 1) ? 'selected="selected"' : ''; ?>><?php echo $flag['name']; ?></option>
					<?php 
					endforeach; 
					?>
				</select>
				<div class="flag_holder"></div>
				<span class="lang_field_err red" style="display:none">Please check other language data before submitting</span>
		</div>
		
		<fieldset>		
        <legend>Menu Content</legend>
		<?php 
			$i=0;
			foreach($languages['var_listing'] as $language):
				//if (!empty($language_file[$language['langId']]->id)):
					//$file_data	= pathinfo($language_file[$language['langId']]->file_name);
					//$thumb =(Kohana::config('language.image'));
					//$img = url::base().Kohana::config('language.upload_url').$file_data['filename']."_resize_".$thumb['thumbnails'][1].".".$file_data['extension'];
					$img		= IMG.'languages/'.$language['file_name'];
					if (!empty($detail_data[$language['langId']]['langId']) && $detail_data[$language['langId']]['langId'] == $language['langId']):
				?>	
				<div id="lang_<?php echo $prefix[$language['langId']]; ?>">
					<?php //echo sprintf($errors['title'], 'Title'); ?>
					<div class="form_row">
						<label>Title</label>
						<div class="ls2"></div>
						<div class="lang_desc_row"><a class="right_float" href="javascript:void(0);" title="<?php echo $language['name']; ?>">&nbsp;<img src="<?php echo $img; ?>" alt="<?php echo $language['name'];?>"/>&nbsp;<?php echo $language['name']; ?></a></div>
						<input type="text" name="detail[<?php echo $language['langId'];?>][title]" id="title_<?php echo $detail_data[$language['langId']]['langId']; ?>_<?php echo $detail_data[$language['langId']]['langId']; ?>" class="required" value="<?php echo $detail_data[$language['langId']]['name']; ?>" />
						<input type="hidden" name="detail[<?php echo $language['langId'];?>][id]" id="detail_id_<?php echo $detail_data[$language['langId']]['contentId']; ?>" value="<?php echo $detail_data[$language['langId']]['contentId']; ?>" />
						<input type="hidden" name="detail[<?php echo $language['langId'];?>][lang_id]" id="language_id_<?php echo $language['langId']; ?>" value="<?php echo $language['langId']; ?>" />
					</div>
					<?php //echo sprintf($errors['description'], 'Description'); ?>
					<div class="form_row">
						<label>Description</label>
						<textarea name="detail[<?php echo $language['langId'];?>][description]" id="description_<?php echo $detail_data[$language['langId']]['langId']; ?>_<?php echo $detail_data[$language['langId']]['langId']; ?>" class="required ckeditor"><?php echo $detail_data[$language['langId']]['full_desc']; ?></textarea>
					</div>	
				</div>	
				<?php 
					else:
				?>
				<div id="lang_<?php echo $prefix[$language['langId']]; ?>">
					<div class="form_row">
						<label>Title</label>
						<div class="ls2"></div>
						<div class="lang_desc_row"><a class="right_float" href="javascript:void(0);" title="<?php echo $language['name']; ?>">&nbsp;<img src="<?php echo $img; ?>" alt="<?php echo $language['name'];?>"/>&nbsp;<?php echo $language['name']; ?></a></div>
						<input type="text" name="detail[<?php echo $language['langId'];?>][title]" id="title_<?php echo $language['langId']; ?>" class="required" value="" />
						<input type="hidden" name="detail[<?php echo $language['langId'];?>][id]" id="language_id_<?php echo $language['langId']; ?>" value="<?php echo isset($detail_data[$language['langId']]->id) ? $detail_data[$language['langId']]->id : ''; ?>" />
						<input type="hidden" name="detail[<?php echo $language['langId'];?>][lang_id]" id="language_id_<?php echo $language['langId']; ?>" value="<?php echo $language['langId']; ?>" />
					</div>
					<?php //echo sprintf($errors['description'], 'Description'); ?>
					<div class="form_row">
						<label>Description</label>
						<textarea name="detail[<?php echo $language['langId'];?>][description]" id="description_<?php echo $language['langId']; ?>" class="required ckeditor"></textarea>
					</div>	
				</div>
			<?php
				//endif;
			endif;
			?>
		<?php 
			$i++;
		endforeach;
		?>
		</fieldset>
		
        <!--div class="ls9"></div>
        Order
        <div class="ls2"></div>
        <input type="text" value="<?php echo empty($_POST['order']) ? @$data['order'] : $_POST['order']; ?>" name="order" style="width: 30px;"/-->
		
		<div class="ls9 clearfix" style="clear:both"></div>
		
        <?php echo i18n::get('status');?>
        <div class="ls2"></div>
		<?php 
			$arr_status = i18n::get('status_value');
			echo Form::select('status', $arr_status, empty($_POST['status']) ? $data['status'] : $_POST['status']); 
		?>
        
        <div class="ls10"></div>  
        <input type="image" src="<?php echo IMG; ?>admin/save_button.png"/>
    </form>
<?php endif; ?>
