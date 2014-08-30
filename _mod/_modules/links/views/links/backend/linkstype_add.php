<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<h2><?php echo $module_menu; ?></h2>
<div class="ls10"></div>
<div class="bar"></div>
<div class="ls10"></div>
<?php echo Form::open('admin-cp/'.$class_name.'/add', array(
																'enctype' => 'multipart/form-data', 
																'method' => 'post', 
																'class' => 'general autovalid',
																'id' => ''
																));
?>
	<div class="form_details">
        <div class="form_row">
            <?php echo Form::label('name','Name'); ?>
			<?php echo Form::input('name',!empty($fields['name']) ? $fields['name'] : '',array('id'=>'nametype', 'class'=>'name required', 'rel'=>$module_name)); ?>
			<span class="red"></span>
			<?php echo sprintf($errors['name'], 'Name'); ?>
        </div>
        <?php echo sprintf($errors['description'], 'Description'); ?>
        <div class="form_row">
            <?php echo Form::label('description','Description'); ?>
			<?php echo Form::textarea('description',!empty($fields['description']) ? $fields['description'] : '' ,array('id'=>'description', 'class'=>'required ckeditor')); ?>
			<?php echo !empty($errors['description']) ? ucfirst($errors['description']) : ''; ?>
        </div>
        <?php echo sprintf($errors['status'], 'Status'); ?>
        <div class="form_row">
			<?php echo Form::label('status','Status'); ?>
            <select name="status" id="status" class="required">
                <option value="">&nbsp;</option>
                <?php foreach ($statuses as $row) : ?>
                <option value="<?php echo $row; ?>" <?php echo ($fields['status'] == $row) ? 'selected="selected"' : ''; ?>><?php echo htmlspecialchars(ucfirst($row), ENT_QUOTES); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
	</div>    
	<div class="clear ls20"></div>
	<div class="bar"></div>
	<div class="ls10"></div>	
	<div class="ls10"></div>  
	<?php //echo Form::image(NULL, NULL, array('src' => IMG.'admin/cancel_button.png', 'onclick'=>"location.href='".URL::site('admin-cp/'.$module_name)."'")); ?>
	<?php echo Form::image(NULL, NULL, array('src' => IMG.'admin/save_button.png')); ?>
<?php echo Form::close();?>
<?php if (isset($show_upload) && $show_upload) : ?>
	<!--script type="text/javascript">
		var file_fields = "";
		var accepted_type = "";
		<?php 
			$i = 0;
			foreach ($uploads as $row_name => $row_params) : 
				if (isset($row_params['file_type']) && $row_params['file_type'] != '') :
					$accepted	= explode(',', $row_params['file_type']);
		?>
			var file_fields["<?php echo $i; ?>"]  = '<?php echo $row_name; ?>';
			var accepted_type["<?php echo $i; ?>"] = '<?php echo $row_params['file_type']; ?>';
		<?php 
				endif;
			$i++;	
			endforeach; 
		?>
		//alert(file_fields);
    </script-->
<?php endif; ?>