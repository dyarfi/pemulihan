<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<h2><?php echo $module_menu;?></h2>
<div class="ls10"></div>
<div class="bar"></div>
<div class="ls10"></div>
<form class="general autovalid " action="<?php echo url::site('admin-cp/'.$module_name.'/add'); ?>" method="post">
	<div class="form_details">
		<?php echo sprintf($errors['name'], 'Name'); ?>
        <div class="form_row">
            <label>Name</label>
            <input type="text" name="name" id="name" class="required" value="<?php echo $fields['name']; ?>" />
        </div>
        <?php echo sprintf($errors['backend_access'], 'Backend Access'); ?>
        <div class="form_row">
            <label>Backend Access</label>
            <input type="checkbox" name="backend_access" id="backend_access" value="TRUE" <?php echo ($fields['backend_access']) ? 'checked="checked"' : ''; ?> />
        </div>
        <?php echo sprintf($errors['full_backend_access'], 'Full Backend Access'); ?>
        <div class="form_row">
            <label>Full Backend Access</label>
            <input type="checkbox" name="full_backend_access" id="full_backend_access" value="TRUE" <?php echo ($fields['full_backend_access']) ? 'checked="checked"' : ''; ?> />
        </div>
        <?php echo sprintf($errors['status'], 'Status'); ?>
        <div class="form_row">
            <label>Status</label>
            <select name="status" id="status" class="required">
                <option value="">&nbsp;</option>
                <?php foreach ($statuses as $row) : ?>
                <option value="<?php echo $row; ?>" <?php echo ($fields['status'] == $row) ? 'selected="selected"' : ''; ?>><?php echo HTML::chars(ucfirst($row), TRUE); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form_row">
            <label>&nbsp;</label>
            <input type="checkbox" name="add_another" id="add_another" value="TRUE" /> <label for="add_another" class="sub_label">Add another <?php echo ucwords(str_replace('_', ' ', $module_name)); ?></label>
        </div>
    </div>
	<div class="clear ls20"></div>
	<div class="bar"></div>
	<div class="ls10"></div>	
	<div class="ls10"></div>  
	<div class="form_row">
		<input type="submit" class="btn_add" value="" />
	</div>
</form>