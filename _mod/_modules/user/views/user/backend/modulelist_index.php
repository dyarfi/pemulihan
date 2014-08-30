<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<script type="text/javascript"></script>
<h2><?php echo $module_menu;?></h2>
<div class="ls10"></div>
<div class="bar"></div>
<div class="ls10"></div>
<?php if (count($listings) == 0) :?>
<h3>There is not available data to display</h3>
<?php else : ?>
<?php		
echo Form::open('admin-cp/'.$module_name.'/edit',array('method'=>'post','class'=>'form_details')); 
?> 
Role Based Access Control :
<table class="listing_data" width="100%">
		<thead>
			<tr>
				<th><strong>#</strong></th>
				<?php foreach ($table_headers as $key => $value) : ?>
                <th><?php echo $value; ?></th>
				<?php endforeach; ?>
			</tr>
		</thead>
		<tbody>
			<?php
			$i	= 1;
			foreach ($listings as $row) :
			?>
			<tr id="row_<?php echo $row->id; ?>" class="<?php echo ($i % 2) ? 'even_row' : 'odd_row'; ?>">
					<td align="center">
						<?php echo $i; ?>
					</td>
					<td align="left">
						<a href="javascript:void(0);" id="mod_id_<?php echo $row->id;?>" class="mod_id">
						<?php if (($row->parent_id != 0)): ?>
							<!--strong>
								<?php echo str_repeat('&nbsp;', 5) . ucwords($row->module_name); ?>
							</strong-->
						<?php else: ?>
							<?php echo ($row->parent_id != 0) ? str_repeat('&nbsp;', 5) : ''; ?>
							<h3><?php echo ucwords($row->module_name); ?></h3>
						<?php endif; ?>
						</a>
					</td>
                    <?php 
						foreach($user_level as $var) { 
							eval("\$level_id = \$row->level_id_$var->id;");
							?>
							<td align="center" class="select_holder">
							<?php echo (($row->parent_id != 0)) ? str_repeat('&nbsp;', 5) : ''; ?>
							<input class="lvl_id" type="checkbox" name="level_id_<?php echo $var->id; ?>[<?php echo $row->id; ?>]" id="check_<?php echo $row->id; ?>" value="1" <?php echo ($level_id) ? 'checked="checked"' : ''; ?> <?php echo ($var->id == 1) ? 'readonly="readonly"' : ''; ?> />
							<?php if (isset($module_permission)):?>
								<table width="100%" style="display:block" class="mod_func" id="mod_func_<?php echo $row->id;?>">
									<?php 
									$module_config = Lib::config($row->module_name.'.module_function');
									$j	= 1;
									foreach ($module_permission as $permission):
									eval("\$perm_id = 'level_id_$var->id';");
									if ($permission->module_id === $row->id && !empty($module_config[$permission->module_link])):?>
									<tr class="<?php echo ($j % 2) ? 'white_row' : 'green_row'; ?>" style="border:1px solid #eee !important">
										<td align="right">
										<input type="checkbox" class="checkbox_func" name="module_permission[level_id_<?php echo $var->id; ?>][<?php echo $permission->id; ?>]" id="check_<?php echo $permission->id; ?>" value="1" <?php echo ($permission->$perm_id == 1) ? 'checked="checked"' : ''; ?> <?php echo ($var->id == 1) ? 'readonly="readonly"' : ''; ?> />
										</td>
										<td align="left">
											<span><?php echo $module_config[$permission->module_link];?></span>
										</td>
									</tr>
									<?php 
									endif;
									$j++;
									endforeach; 
									?>
								</table>	
							<?php endif; ?>
							</td>
					<?php
					} 
					?>
				</tr>
			<?php
			$i++;
			endforeach;
			?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="<?php echo (count($table_headers) + 1); ?>">
                	<div id="table_pagination"><input type="submit" class="btn_save" value="" /></div>
                </td>
			</tr>
		</tfoot>
	</table>
<?php Form::close(); ?>
<?php endif; ?>
