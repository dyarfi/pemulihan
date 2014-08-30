<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<h2><?php echo $module_menu; ?></h2>
<div class="ls10"></div>
<div class="bar"></div>
<div class="ls10"></div>
<?php echo Form::open('admin-cp/'.$module_name.'/add', array(
																'enctype' => 'multipart/form-data', 
																'method' => 'post', 
																'class' => 'general autovalid',
																'id' => ''
																));
?>
	<div class="form_details">
        <div class="form_row">
            <?php echo Form::label('name','Name'); ?>
			<?php echo Form::input('name',!empty($fields['name']) ? $fields['name'] : '',array('id'=>'namelink', 'class'=>'name required', 'rel'=>$module_name)); ?>
			<span class="red"></span>
			<?php echo sprintf($errors['name'], 'Name'); ?>
        </div>
		<?php echo sprintf($errors['type_id'], 'Type'); ?>
        <div class="form_row">
            <label for="type_id">Type</label>
            <select name="type_id" id="type_id" class="required">
                <option value="">&nbsp;</option>
                <!--option value="0">This <?php //echo str_replace('_', ' ', $this->uri->segment(2)); ?> is parent</option-->
                <?php foreach ($linkstype as $row) : ?>
              <option value="<?php echo $row->id; ?>" class="division_<?php echo $row->id; ?>" <?php if ($fields['type_id'] == $row->id) echo 'selected="selected"';?> >
				<?php echo htmlspecialchars($row->name, ENT_QUOTES); ?>
			  </option>
                <?php endforeach; ?>
            </select>
        </div>
        <?php echo sprintf($errors['description'], 'Description'); ?>
        <div class="form_row">
            <?php echo Form::label('description','Description'); ?>
			<?php echo Form::textarea('description',!empty($fields['description']) ? $fields['description'] : '' ,array('id'=>'description', 'class'=>'required ckeditor400')); ?>
			<?php echo !empty($errors['description']) ? ucfirst($errors['description']) : ''; ?>
        </div>
        <?php if (isset($show_upload) && $show_upload) : ?>
		<?php 
		foreach ($uploads as $row_name => $row_params) : 
			//print_r($row_params['label']); exit();
			?>
            <fieldset style="clear:both;">
                <legend><strong><?php echo $row_params['label']; ?></strong></legend>
				<?php //echo sprintf($errors[$row_name], $row_params['label']); ?>
                <div class="form_row">
                    <label><?php echo $row_params['label']; ?></label>
                    <input type="file" name="<?php echo $row_name; ?>" id="<?php echo $row_name; ?>" />
                    <?php if (isset($row_params['note']) && $row_params['note'] != '') : ?>
                        <div class="form_row">
                            <label>&nbsp;</label>
                            <?php echo htmlspecialchars($row_params['note'], ENT_QUOTES); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if (isset($row_params['caption']) && $row_params['caption']) : ?>
                <div class="form_row">
                    <label>Caption</label>
                    <input type="text" name="<?php echo $row_name.'_caption'; ?>" id="<?php echo $row_name.'_caption'; ?>" value="<?php echo $fields[$row_name.'_caption']; ?>" />
                </div>
                <?php endif; ?>
    		</fieldset>
        <?php 
		//$i++;
		endforeach; 
		?>
        <?php endif; ?>
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