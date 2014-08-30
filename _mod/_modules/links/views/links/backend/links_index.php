<?php defined('SYSPATH') or die('No direct script access.'); ?>
<script>
$(document).ready(function(){
	$('a.delete.<?php echo $module_name;?>').click(function(){
		/*
		var pid = $(this).attr('pid');
		if (window.confirm('<?php echo __('warning_delete') ?>')){
			$.ajax({
				type: 'GET',
				url:server+'admin-cp/<?php echo $module_name;?>/delete/'+pid,
				data: 'ajax=true',
				datatype: "html",
				success: function(msg){
					window.location.reload();
				},
				error: function (request,setting){
					alert(request+ ' ' + setting);
				}
			});
		}*/
	});
});
</script>
<h2><?php echo $module_menu; ?></h2>
<div class="ls10"></div>
<div class="bar"></div>
<div class="ls10"></div>
    <div id="forms_holder">
        <form id="listing_search" action="<?php echo URL::site() .'admin-cp/'. $module_name; ?>/index" method="post">
            <select name="field" id="field">
                <?php foreach ($search_keys as $row => $label) : ?>
                <option value="<?php echo $row; ?>" <?php echo ($row == $field) ? 'selected="selected"' : ''; ?>><?php echo $label; ?></option>
                <?php endforeach; ?>
            </select>
            <input type="text" name="keyword" id="keyword" value="<?php echo $keyword; ?>" />
            <input type="submit" name="find" id="find" class="btn_find" value="" />
        </form>
        <form id="listing_add" action="<?php echo URL::site() .'admin-cp/'. $module_name; ?>/add" method="get">
            <input type="submit" class="btn_add new agent" value="" />
        </form>
    </div>	
<div class="ls5"></div>
<?php if (count($listings) == 0) :?>
	<div class="ls15 clear"></div>
		<h3 class="warning3"><?php echo i18n::get('error_no_data'); ?></h3>
	<div class="ls15"></div>
<?php else: ?>
<?php		
echo Form::open('admin-cp/'.$module_name.'/change',array('method'=>'post','class'=>'form_details')); 
echo Form::hidden('page',$page_index);
echo Form::hidden('order',$order);
echo Form::hidden('sort',$sort);
?> 
<table class="listing_data">
	<thead>
		<tr>
			<th><input type="checkbox" name="check_all" id="check_all" /></th>
			<th><strong>#</strong></th>
			<?php foreach ($table_headers as $key => $value) : ?>
			<?php
				if ($sort == $key) :
					if ($order == 'asc') :
						$order = 'desc';
						$order_sign	= '&nbsp;<img src="'.IMG.'admin/order-asc.gif" alt="&or;" />';
					else :
						$order = 'asc';
						$order_sign	= '&nbsp;<img src="'.IMG.'admin/order-desc.gif" alt="&and;" />';
					endif;
			?>
			<th><a href="<?php echo url::site('admin-cp/'.$module_name.'/index/sort/'.$key.'/order/'.$order.$page_url); ?>" id="active_col"><?php echo $value . $order_sign; ?></a></th>
			<?php else : ?>
			<th><a href="<?php echo url::site('admin-cp/'.$module_name.'/index/sort/'.$key.'/order/asc/'.$page_url); ?>"><?php echo $value; ?></a></th>
			<?php endif; ?>
			<?php endforeach; ?>
			<th>Functions</th>
		</tr>
	</thead>
    <tbody>
    <?php
	    $i = $pagination->current_first_item;
        $index = 1;
        foreach ($listings as $row):
			$arr_status     = i18n::get('status_value');
            $class      = $index % 2 == 0 ? 'even' : 'odd';
            //if ($row['editable'] != 1 ) { $class = 'red'; }
			if ($row->status == 'deleted' ) { $class = 'yellow'; }
            if ($row->status == 'unpublish' ) { $class = 'red_row'; }
            if (isset($current_list) && $current_list == $row->id) $class = 'green';
			?>
            <tr class="listing_<?php echo $class;?> <?php echo $class;?>" id="row_<?php echo $row->id;?>">
                <td class="center">
					<input type="checkbox" name="check[]" id="check_<?php echo $row->id; ?>" value="<?php echo $row->id; ?>" />
				</td>
				<td class="center"><?php echo $i;?></td>
					<td class="bold">
                    <a href="<?php echo Kohana::$base_url.'admin-cp/'.$module_name.'/view/'.$row->id;?>">
						<?php echo Text::limit_words(strip_tags($row->name),4);?>
					</a>
						<?php //echo !empty($detail_data[$row->id]) ? '('.$detail_data[$row->id]['name'].')' : '<span class="red"> (No Detail)</span>'; ?>
				</td>			
				<td><?php echo trim(Text::limit_chars(ucfirst(strip_tags($row->description)),30)); //echo date('d M Y', $row->start_date); ?></td>
				<td align="right">
				<?php 
					echo !empty($linkstypes[$row->type_id]) ? Text::limit_chars(ucfirst($linkstypes[$row->type_id]->name),30) : '(No Type)';
				?>
				</td>	
				<td align="center" style="margin:0 auto; vertical-align: middle">
					<div style="width: 34px;">
						<?php 
						if ($row->order >= 1 && $row->order != $max_order->last_order($row->type_id)):
							echo '<a class="odr_up" title="Order Up" href="'.URL::site('admin-cp/'.$module_name).'/order/up/'.$row->id.'/'.$row->order.'/'.$row->type_id.'"></a>';
						endif;
						if ($row->order <= $max_order->last_order($row->type_id) && $row->order != $min_order->first_order($row->type_id) && $row->order != $max_order->last_order($row->type_id) + 1):
							echo '<a class="odr_down" title="Order Down" href="'.URL::site('admin-cp/'.$module_name).'/order/down/'.$row->id.'/'.$row->order.'/'.$row->type_id.'"></a>';
						endif;						
						?>
					</div>
				</td>					
				<td><?php echo ucfirst($row->status); //echo date('d M Y', $row->end_date); ?></td>
				<td><?php echo date(Lib::config('admin.date_format'), $row->added); ?></td>
				<td><?php echo ( $row->modified != 0) ? date(Lib::config('admin.date_format'), $row->modified) : '-'; ?></td>                
                <td>
				<?php
                    //if ($row['editable'] == 1 ){
					?>
						<a class="view" title="View" href="<?php echo URL::site('admin-cp/'.$module_name.'/view/' . $row->id); ?>">View</a>
                        <a class="edit" title="Edit" href="<?php echo URL::site('admin-cp/'.$module_name.'/edit/'.$row->id); ?>">Edit</a>
                        <a class="delete" title="Delete" pid="<?php echo $row->id;?>" href="<?php echo URL::site('admin-cp/'.$module_name.'/delete/' . $row->id); ?>">Delete</a>
					<?php		
                   // }
                ?>
				</td>
				</tr>
			<?php
            $index++; $i++;
        endforeach;
    ?>
    </tbody>
    <tfoot>
        <tr>
            <td id="corner"><img src="<?php echo IMG; ?>admin/list-corner.gif"/></td>
            <td colspan="<?php echo (count($table_headers) + 2); ?>">
				<div id="selection">
					<?php echo i18n::get('changed_status'); ?> : 
					<select name="select_action" id="select_action">
						<option value="">&nbsp;</option>
						<?php foreach ($statuses as $row) : ?>
						<option value="<?php echo $row; ?>"><?php echo ucfirst($row); ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div id="table_pagination"><?php echo $pagination->render(); ?></div>
            </td>
        </tr>
    </tfoot>
</table>
<?php 
echo Form::close();
?>
<div class="ls4"></div>
<div>Total Records : <?php echo $total_record;?></div>
<div class="ls5"></div>
<?php endif; ?>
<div class="ls5"></div>
<div class="bar"></div>