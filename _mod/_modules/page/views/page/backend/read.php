<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Author       : Defrian Yarfi
 * Code Name    : ViewDetail
 * Copywrigth   : 2012
 * Module       : News
 * Package      : View
**/ 

$arr_status = i18n::get('status_value');
$arr_lang = i18n::get('system_language');
?>

<script type="text/javascript">
$(document).ready(function () {
	$('#language_select').change(function() {
	<?php
	$prefix = array();
	foreach($languages['var_listing'] as $row):
		//$file_data	= pathinfo($language_file[$row['langId']]->file_name);
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
<h2><?php echo Helper_Common::label(i18n::get('content_detail'),'Career');?></h2>
<div class="ls10"></div>
<div class="bar"></div>
<div class="ls10"></div>

<?php if (!isset($var_listing)) : ?>
    <div class="warning3"><?php echo i18n::get('error_no_data'); ?></div>
<?php else: 
	$data = $var_listing[0];
	?>    
    <div class="cd_left">Title <span class="red">* Permalink - [a-z/_/0-9]</span></div>
    <div class="cd_center">:</div>
    <div class="cd_right"><?php echo $data['title']; ?></div>
    <div class="clear ls4"></div> 
    
    <div class="cd_left"><?php echo i18n::get('date');?></div>
    <div class="cd_center">:</div>
    <div class="cd_right"><?php echo Helper_Common::convertTime($data['added'],"d F Y"); ?></div>
    <div class="clear ls4"></div>   
    
    <div class="cd_left"><?php echo i18n::get('status');?></div>
    <div class="cd_center">:</div>
    <div class="cd_right"><?php echo $arr_status[$data['status']]; ?></div>
    <div class="clear ls10"></div>    
    
		<div class="form_row">
		<fieldset class="wrapper_fs"><legend>Detail Language</legend>
				<div class="va-mid-inline">
				<label>Change Language</label>
				<select name="language_select" id="language_select" class="required">
					<?php 
					foreach($languages['var_listing'] as $language):
						//$file_data	= pathinfo($language_file[$language['langId']]->file_name);
						//$thumb =(Kohana::config('language.image'));
						//$img = url::base().Kohana::config('language.upload_url').$file_data['filename']."_resize_".$thumb['thumbnails'][1].".".$file_data['extension'];
						$img		= IMG.'languages/'.$language['file_name'];
					?>
						<!--div class="lang_desc"-->
							<!--a href="javascript:void(0);" id="handler_<?php echo $language['prefix'];?>" title="<?php echo $language['name']; ?>"><img src="<?php echo $img; ?>" alt="<?php echo $language['name'];?>"/></a-->
						<!--/div-->
						<option value="<?php echo $language['langId'];?>" <?php echo ($language['langId'] == 1) ? 'selected="selected"' : ''; ?>><?php echo $language['name']; ?></option>
					<?php 
					endforeach; 
					?>
				</select>
				<div class="flag_holder"></div>
				</div>
				<div class="ls10"></div>
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
							<div class="cd_left">Title</div>
							<div class="cd_center">:</div>
							<div class="cd_right"><?php echo $detail_data[$language['langId']]['name']; ?></div>
							<div class="clear ls4"></div> 
							
							<!--
							<?php if (isset($show_synopsis) && $show_synopsis) : ?>
							<div class="form_row">
								<label>Synopsis</label>
								<div class="form_field"><?php //echo $detail_data[$language['langId']]->synopsis; ?></div>
							</div>
							<?php endif; ?>
							-->

							<?php //echo sprintf($errors['description'], 'Description'); ?>
							<div class="form_row">
								<div class="cd_left">Description</div>
								<div class="cd_center">:</div>
								<div class="clear ls4"></div> 
								<div class="form_field"><?php echo $detail_data[$language['langId']]['full_desc']; ?></div>
							</div>	

						</div>	
					<?php
						endif;
					//endif;
					?>
				<?php 
					$i++;
				endforeach;
				?>
				<div class="ls10"></div>
		</fieldset>
		</div>		
		
        <?php if (isset($show_upload) && $show_upload) : ?>
        <?php foreach ($uploads as $row_name => $row_params) : ?>
            <fieldset style="clear:both;">
                <legend><strong><?php echo $row_params['label']; ?></strong></legend>
				<?php if (isset($files[$row_name])) : ?>

					<div class="form_row">
						<label class="no_border">&nbsp;</label>
						<div class="form_field"><a href="<?php echo url::site('admin-cp/'.$this->uri->segment(2).'/download/'.$files[$row_name]->file_name); ?>"><img src="<?php echo url::base(); ?>images/cms/icon/disk.png" alt="<?php echo $files[$row_name]->file_name; ?>" /></a></div>
					</div>

					<?php if (isset($row_params['caption']) && $row_params['caption']) : ?>
					<div class="form_row">
						<label>Caption</label>
						<div class="form_field"><?php echo htmlspecialchars($files[$row_name]->caption, ENT_QUOTES); ?></div>
					</div>
					<?php endif; ?>
            
                <?php endif; ?>
        	</fieldset>    
        <?php endforeach; ?>
        <?php endif; ?>
	
<?php endif; ?>

<div class="ls10"></div>
<div class="bar"></div>
<div class="ls10"></div>
    
<a href="<?php echo Kohana::$base_url;?>admin-cp/career/edit/<?php echo $titleId;?>">
    <img src="<?php echo IMG; ?>admin/edit_button.png"/>
</a>