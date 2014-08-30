<?php defined('SYSPATH') or die('No direct script access.'); ?>
<script>
    $(document).ready(function(){
        $('a.delete.event').click(function(){
            var pid = $(this).attr('pid');
            if (window.confirm('<?php echo __('warning_delete') ?>')){
                $.ajax({
                    type: 'GET',
                    url:server+'admin-cp/content/delete/'+pid,
                    data: 'ajax=true',
                    datatype: "html",
                    success: function(msg){
                        window.location.reload();
                    },
                    error: function (request,setting){
                        alert(request+ ' ' + setting);
                    }
                });
            }
        });
    });
</script>

<h2><?php echo Helper_Common::label(i18n::get('content_listing'),'Career Page');?></h2>
<div class="ls10"></div>
<div class="bar"></div>
<div class="ls10"></div>

<div>
    <a class="new agent" href="<?php echo Kohana::$base_url;?>admin-cp/career/new"></a>
</div>
<div class="ls5"></div>

<?php if (!isset($var_listing)) : ?>
    <div class="warning3"><?php echo i18n::get('error_no_data'); ?></div>
<?php else: ?>
<table class="listing_data">
    <thead>
        <tr>
            <th class="checkall"><input type="checkbox" id="ipt_checkall"/></th>
            <th>#</th>
            <th>
                <?php
                    $direction = Request::factory()->param('id4');
                    $direction = isset($direction) && $direction == 'desc' ? 'asc' : 'desc';
                ?>
                <a href="<?php echo BS_ADDR;?>admin-cp/career/manage/sort/title/<?php echo $direction;?>">Title</a>
            </th>
			<th><a href="<?php echo BS_ADDR;?>admin-cp/career/manage/sort/location/<?php echo $direction;?>">Location</a></th>
            <th><a href="<?php echo BS_ADDR;?>admin-cp/career/manage/sort/start_date/<?php echo $direction;?>">Posted Date</a></th>
			<th><a href="<?php echo BS_ADDR;?>admin-cp/career/manage/sort/end_date/<?php echo $direction;?>">Closing Date</a></th>
            <th><a href="<?php echo BS_ADDR;?>admin-cp/career/manage/sort/status/<?php echo $direction;?>">Status</a></th>
            <!--th><a href="<?php echo BS_ADDR;?>admin-cp/career/manage/sort/order/<?php echo $direction;?>">Order</a></a></th-->
            <!--th><a href="<?php echo BS_ADDR;?>admin-cp/career/manage/sort/added/<?php echo $direction;?>">Added</a></th>
            <th><a href="<?php echo BS_ADDR;?>admin-cp/career/manage/sort/modified/<?php echo $direction;?>">Modified</a></a></th-->
            <th class="function_content">Function</th>
        </tr>
    </thead>
    
    <tbody>
    <?php
        $index = 1;
        $penomoran_start = empty($_GET['page']) ? 1 : ((int)($_GET['page'])-1)*$perpage+1;
        foreach ($var_listing as $item):
			$arr_status     = i18n::get('status_value');
		
            $class      = $index % 2 == 0 ? 'genap' : 'ganjil';
            //if ($item['editable'] != 1 ) { $class = 'merah'; }
            if ($item['status'] == 0 ) { $class = 'merah'; }
			if ($item['is_deleted'] != 0 ) { $class = 'marun'; }
            if (isset($current_list) && $current_list == $item['id']) $class = 'hijau';
			?>
            <tr class="listing_<?php echo $class;?> <?php echo $class;?>">
                <td class="center">
                    <input type="checkbox" class="ipt_tocheck" pid="<?php echo $item['id'];?>" hash="<?php echo Helper_Common::encript($item['id']); ?>"/>
				</td>
				<td class="center"><?php echo $penomoran_start;?></td>
					<td class="bold">
                    <a href="<?php echo Kohana::$base_url.'admin-cp/career/view/'.$item['id'];?>"><?php echo $item['name'];?></a>
						<?php echo !empty($detail_data[$item['id']]) ? '('.$detail_data[$item['id']]['name'].')' : '<span class="red"> (No Detail)</span>'; ?>
				</td>
				<td><?php echo ucfirst($item['location']); ?></td>
				<td><?php echo date('d M Y', $item['start_date']); ?></td>
				<td><?php echo date('d M Y', $item['end_date']); ?></td>
                <td class="center">
					<?php 
					$arr_status = i18n::get('status_value');
					$arr_delete = i18n::get('delete_value');
					if (!empty($arr_status) && empty($item['is_deleted'])):
						//echo Form::select('status', $arr_status, $item['status'], array('class'=>'default_status_one_click', 'pid' => $item['id'], 'hash' => Helper_Common::encript($item['id']),'url'=>'content/aupdate'));
					else:
						//echo Form::select('delete', $arr_delete, $item['is_deleted'], array('class'=>'default_delete_one_click', 'pid' => $item['id'], 'hash' => Helper_Common::encript($item['id']),'url'=>'content/aupdate'));
					endif;	
					?>
				</td>
                <!--td class="center">
					<?php 
					//echo $item['order'] == 0 ? '-' : $item['order'];
					//if ($item['order'] > 1):
                       // echo '<a class="odr_up" href="'.Kohana::$base_url.'admin-cp/career/up/'.$item['id'].'/'.$item['order'].'"></a>';
                    //endif;
                    //if ($index < count($item)):
                        //echo '<a class="odr_down" href="'.Kohana::$base_url.'admin-cp/career/down/'.$item['id'].'/'.$item['order'].'"></a>';
                    //endif;	
					?>
				</td-->
                <!--td class="center"><?php echo Helper_Common::convertTime($item['added'],"d-M-Y");?></td>
					<?php $modified = $item['added'] == $item['modified'] ? '-' : Helper_Common::convertTime($item['modified'],"d-M-Y");?>
                <td class="center"><?php echo $modified;?></td-->
                <td>
				<?php
                    //if ($item['editable'] == 1 ){
					?>
                        <a class="edit" href="<?php echo Kohana::$base_url.'admin-cp/career/edit/'.$item['id']; ?>"></a>
                        <a class="delete event" pid="<?php echo $item['id'];?>"></a>
					<?php		
                   // }
                ?>
				</td>
				</tr>
			<?php
            $index++; $penomoran_start++;
        endforeach;
    ?>
    </tbody>
    <tfoot>
        <tr>
            <td id="corner"><img src="<?php echo IMG; ?>admin/list-corner.gif"/></td>
            <td colspan="9">
                <div id="selection_action">
                <?php echo i18n::get('changed_status'); ?> : 
				<?php
					//$arr_status = array_merge(array('select'=>''), i18n::get('status_value'));
					//echo Form::select('status_listing_one_click', $arr_status, '', array('id'=>'status_listing_one_click', 'url' => 'content/aupdate', 'lastpid' => $item['id']));
				?>
                </div>
                <div id="selection_page">
                    <?php echo isset($var_paging) ? $var_paging : ''; ?>
                </div>
                <div class="clear"></div>
            </td>
        </tr>
    </tfoot>
</table>
<div class="ls4"></div>
<div>Total Records : <?php echo $total_record;?></div>

<div class="ls10"></div>
<?php endif; ?>
<div class="ls10"></div>
<div class="bar"></div>