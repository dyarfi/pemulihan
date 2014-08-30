<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<h2><?php echo $module_menu;?></h2>
<div class="ls10"></div>
<div class="ls10"></div>
<?php if (!isset($setting)) : ?>
    <div class="warning3"><?php echo i18n::get('error_no_data'); ?></div>
<?php else: ?>    
<?php echo Form::open(URL::site('admin-cp/'.$module_name.'/edit/'.$setting->id), array(
															'enctype' => 'multipart/form-data', 
															'method' => 'get', 
															'class' => 'general autovalid',
															'id' => 'edit-users'
															));	
?>
	<div class="form_wrapper">
		<div class="cd_left"><label>Alias</label></div>
		<div class="cd_center">:</div>
		<div class="cd_right"><?php echo $setting->alias; ?></div>
		<div class="clear ls4"></div>
		<div class="cd_left"><label>Parameter</label></div>
		<div class="cd_center">:</div>
		<div class="cd_right"><?php echo $setting->parameter; ?></div>
		<div class="clear ls4"></div>
		<div class="cd_left"><label>Value</label></div>
		<div class="cd_center">:</div>
		<div class="cd_right"><?php echo $setting->value; ?></div>
		<div class="clear ls4"></div>
		<div class="cd_left"><label>Status</label></div>
		<div class="cd_center">:</div>
		<div class="cd_right"><?php echo ucfirst($setting->status); ?></div>
		<div class="clear ls4"></div>
		<div class="cd_left"><label>System</label></div>
		<div class="cd_center">:</div>
		<div class="cd_right">
		<?php 
			$system = Lib::config('setting.is_system');
			echo ucfirst($system[$setting->is_system]); 
		?>
		</div>
		<div class="clear ls4"></div>
		<div class="cd_left"><label>Created</label></div>
		<div class="cd_center">:</div>
		<div class="cd_right"><?php echo ($setting->added != 0) ? date(Lib::config('admin.date_format'), $setting->added) : '-'; ?></div>
		<div class="clear ls4"></div>
        <div class="cd_left"><label>Last Modified</label></div>
		<div class="cd_center">:</div>
		<div class="cd_right"><?php echo ($setting->modified != 0) ? date(Lib::config('admin.date_format'), $setting->modified) : '-'; ?></div>
		<div class="clear ls4"></div>
    </div>
	<div class="clear ls10"></div>
	<a href="<?php echo Kohana::$base_url;?>admin-cp/<?php echo $module_name;?>/edit/<?php echo $setting->id;?>">
		<img src="<?php echo IMG; ?>admin/edit_button.png"/>
	</a>	
<?php echo Form::close();?>
<?php endif;?>