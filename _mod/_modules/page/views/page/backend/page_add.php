<?php defined('SYSPATH') OR die('No direct access allowed.'); ?><h2><?php echo $module_menu; ?></h2><?php echo Form::open('admin-cp/'.$module_name.'/add', array(																'enctype' => 'multipart/form-data', 																'method' => 'post', 																'class' => 'general autovalid form_details',																'id' => ''																));?>	<div class="form_wrapper">	    <div class="form_row">            <label>Subject</label>            <input type="text" name="subject" id="subject" class="required" value="<?php echo $fields['subject']; ?>" />			<?php echo sprintf($errors['subject'], 'Subject'); ?>        </div>        <div class="form_row">            <label>Name</label>            <input type="text" name="name" id="name" class="required" value="<?php echo $fields['name']; ?>" />			<?php echo sprintf($errors['name'], 'Name'); ?>        </div>        <?php if (isset($show_category) && $show_category) : ?>        <?php echo sprintf($errors['category_id'], 'Category'); ?>        <div class="form_row">            <label>Category</label>            <select name="category_id" id="category_id" class="required">                <option value="">&nbsp;</option>                <?php foreach ($categories as $row) : ?>                <option value="<?php echo ($row->status == 'publish') ? $row->id : 0;?>" <?php echo ($row->status != 'publish') ? 'disabled="disabled"' : '';?> <?php echo ($row->id == $fields['category_id']) ? 'selected="selected"' : ''; ?>><?php echo str_repeat('&nbsp;', $row->sub_level * 5).HTML::chars($row->title, TRUE); ?></option>                <?php endforeach; ?>            </select>        </div>        <?php else : ?>        <input type="hidden" name="category_id" id="category_id" value="<?php echo $fields['category_id']; ?>" />        <?php endif; ?>        <?php if (isset($show_publish_date) && $show_publish_date) : ?>        <?php echo sprintf($errors['publish_date'], 'Publish Date'); ?>        <div class="form_row">            <label>Publish Date</label>            <input type="text" name="publish_date" id="publish_date" value="<?php echo $fields['publish_date']; ?>" class="datepicker" />        </div>        <?php endif; ?>        <?php if (isset($show_unpublish_date) && $show_unpublish_date) : ?>        <?php echo sprintf($errors['unpublish_date'], 'Unpublish Date'); ?>        <div class="form_row">            <label>Unpublish Date</label>            <input type="text" name="unpublish_date" id="unpublish_date" value="<?php echo $fields['unpublish_date']; ?>" class="datepicker" />        </div>        <?php endif; ?>        <?php if (isset($show_synopsis) && $show_synopsis) : ?>        <?php echo sprintf($errors['synopsis'], 'Synopsis'); ?>        <div class="form_row">            <label>Synopsis</label>            <textarea name="synopsis" id="synopsis" class="small"><?php echo $fields['synopsis']; ?></textarea>        </div>        <?php endif; ?>        <?php echo sprintf($errors['text'], 'Text'); ?>        <div class="form_row">            <label>Text</label>            <textarea name="text" id="text" class="ckeditor required"><?php echo $fields['text']; ?></textarea>        </div>        <?php 		if (isset($show_upload) && $show_upload) : ?>        <?php foreach ($uploads as $row_name => $row_params) : ?>            <fieldset style="clear:both;">                <legend><strong><?php echo $row_params['label']; ?></strong></legend>				<?php echo sprintf($errors[$row_name], $row_params['label']); ?>                <div class="form_row">                    <label><?php echo $row_params['label']; ?></label>                    <input type="file" name="<?php echo $row_name; ?>" id="<?php echo $row_name; ?>" />                    <?php if (isset($row_params['note']) && $row_params['note'] != '') : ?>                        <div class="form_row">                            <label>&nbsp;</label>                            <?php echo HTMl::chars($row_params['note'], TRUE); ?>                        </div>                    <?php endif; ?>                </div>                <?php if (isset($row_params['caption']) && $row_params['caption']) : ?>                <div class="form_row">                    <label>Caption</label>                    <input type="text" name="<?php echo $row_name.'_caption'; ?>" id="<?php echo $row_name.'_caption'; ?>" value="<?php echo $fields[$row_name.'_caption']; ?>" />                </div>                <?php endif; ?>    	</fieldset>        <?php endforeach; ?>        <?php endif; ?>		<?php if (isset($show_attribute) && $show_attribute) : ?>        <?php echo sprintf($errors['attribute'], 'Media'); ?>        <div class="form_row">            <label for="attribute">Media</label>            <input type="text" name="attribute" id="attribute" class="" value="<?php echo $fields['attribute']; ?>" />        </div>        <?php endif; ?>        <?php if (isset($show_allow_comment) && $show_allow_comment) : ?>        <?php echo sprintf($errors['allow_comment'], 'Allow Comment'); ?>        <div class="form_row">            <label for="allow_comment">Allow User to Comment?</label>            <input type="checkbox" name="allow_comment" id="allow_comment" value="1" <?php echo ($fields['allow_comment'] == 1) ? 'checked="checked"' : ''; ?> /> <label for="allow_comment" class="sub_label">Yes, user can comment this content</label>        </div>        <?php endif; ?>        <?php if (isset($show_tags) && $show_tags) : ?>        <?php echo sprintf($errors['tags'], 'Tags'); ?>        <div class="form_row">            <label>Tags</label>            <input type="text" name="tags" id="tags" value="<?php echo $fields['tags']; ?>" />        </div>        <?php endif; ?>        <?php if (isset($show_order) && $show_order) : ?>        <?php echo sprintf($errors['order'], 'Order'); ?>        <div class="form_row">            <label>Order</label>            <select name="order" id="order" class="required">                <option value="">&nbsp;</option>                <?php foreach ($orders as $row) : ?>                <option value="<?php echo $row->order; ?>" class="category_<?php echo $row->category_id; ?> page_<?php echo $row->id; ?>" <?php echo ($fields['order'] == ($row->order + 1)) ? 'selected="selected"' : ''; ?>><?php echo HTMl::chars($row->subject, TRUE); ?></option>                <?php endforeach; ?>            </select>        </div>        <?php endif; ?>        <?php echo sprintf($errors['status'], 'Status'); ?>        <div class="form_row">            <label>Status</label>            <select name="status" id="status" class="required">                <option value="">&nbsp;</option>                <?php foreach ($statuses as $row) : ?>                <option value="<?php echo $row; ?>" <?php echo ($fields['status'] == $row) ? 'selected="selected"' : ''; ?>><?php echo HTMl::chars(ucfirst($row), TRUE); ?></option>                <?php endforeach; ?>            </select>        </div>        <div class="form_row">            <label>&nbsp;</label>            <input type="checkbox" name="add_another" id="add_another" value="TRUE" /> <label for="add_another" class="sub_label">Add another <?php echo ucwords(str_replace('_', ' ', $module_name)); ?></label>        </div>	</div>	<div class="form_row">		<label>&nbsp;</label>		<input type="submit" class="btn_add" value="" />	</div><?php echo Form::close(); ?><?php if (isset($show_upload) && $show_upload) : ?>	<script type="text/javascript">		<?php 			foreach ($uploads as $row_name => $row_params) : 				if (isset($row_params['file_type']) && $row_params['file_type'] != '') :					$accepted	= explode(',', $row_params['file_type']);		?>			var file_fields		= '<?php echo $row_name; ?>';			var accepted_type	= '<?php echo $row_params['file_type']; ?>';		<?php 				endif;			endforeach; 		?>    </script><?php endif; ?>