<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<h2><?php echo $module_menu;?></h2>
<div class="ls10"></div>
<?php echo Form::open(URL::site('admin-cp/user/edit/'.$user->id), array(
													'enctype' => 'multipart/form-data', 
													'method' => 'get', 
													'class' => 'general autovalid',
													'id' => 'edit-users'
												));	
?>
	<div class="form_wrapper">
		<fieldset>
			<legend>User Information</legend>
			<div class="clear ls4"></div>
			<div class="cd_left"><label>Full Name</label></div>
			<div class="cd_center">:</div>
			<div class="cd_right"><?php echo $user->name; ?></div>
			<div class="clear ls4"></div>
			<div class="cd_left"><label>E-mail</label></div>
			<div class="cd_center">:</div>
			<div class="cd_right"><?php echo $user->email; ?></div>
			<div class="clear ls4"></div>
			<div class="cd_left"><label>Level</label></div>
			<div class="cd_center">:</div>
			<div class="cd_right"><?php echo ucfirst($user_level->name); ?></div>
			<div class="clear ls4"></div>
			<div class="cd_left"><label>Status</label></div>
			<div class="cd_center">:</div>
			<div class="cd_right"><?php echo ucfirst($user->status); ?></div>
			<div class="clear ls4"></div>
			<div class="cd_left"><label>Created</label></div>
			<div class="cd_center">:</div>
			<div class="cd_right"><?php echo ($user->added != 0) ? date(Lib::config('admin.date_format'), $user->added) : '-'; ?></div>
			<div class="clear ls4"></div>
			<div class="cd_left"><label>Last Login</label></div>
			<div class="cd_center">:</div>
			<div class="cd_right"><?php echo ($user->last_login != 0) ? date(Lib::config('admin.date_format'), $user->last_login) : '-'; ?></div>
			<div class="clear ls4"></div>
		</fieldset>
		<fieldset>
			<legend>Profile Information</legend>
			<?php if (!empty($profile)):?>
			<div class="clear ls4"></div>
			<div class="cd_left"><label>About</label></div>
			<div class="cd_center">:</div>
			<div class="cd_right"><?php echo !empty($profile->about) ? $profile->about : '-'; ?></div>
			<div class="clear ls4"></div>
			<div class="cd_left"><label>Gender</label></div>
			<div class="cd_center">:</div>
			<div class="cd_right"><?php echo !empty($profile->gender) ? ucfirst($profile->gender) : '-'; ?></div>
			<div class="clear ls4"></div>
			<div class="cd_left"><label>Phone</label></div>
			<div class="cd_center">:</div>
			<div class="cd_right"><?php echo !empty($profile->phone) ? $profile->phone : '-'; ?></div>
			<div class="clear ls4"></div>
			<div class="cd_left"><label>Address</label></div>
			<div class="cd_center">:</div>
			<div class="cd_right"><?php echo !empty($profile->address) ? ucfirst($profile->address) : '-'; ?></div>
			<div class="clear ls4"></div>
			<?php else: ?>
			<div class="clear ls4"></div>
			No Profile
			<div class="clear ls4"></div>
			<?php endif;?>
		</fieldset>
    </div>
	<div class="clear ls10"></div>
	<a href="<?php echo Kohana::$base_url;?>admin-cp/user/edit/<?php echo $user->id;?>">
		<img src="<?php echo IMG; ?>admin/edit_button.png"/>
	</a>	
<?php echo Form::close();?>
