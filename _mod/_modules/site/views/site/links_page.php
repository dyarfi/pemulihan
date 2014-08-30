<div id="content">	
	<?php //if ($page_category && $category_files):?>
	<div id="subBanner">
		<h4><?php echo ucfirst($page_category->title); ?></h4>
		<?php
			$file_img = !empty($category_files[$page_category->id]->file_name) ? $category_files[$page_category->id]->file_name : '';
			$caption = !empty($category_files[$page_category->id]->caption) ? text::limit_words(strip_tags($category_files[$page_category->id]->caption),20) : 'Title not available';
			if (is_file($category_upload_url . $file_img)) :
				$file_data = url::base().$category_upload_url.str_replace('.', '_crop_640x121.', $file_img);
			else :
				$file_data = IMG . 'themes/content/subbanner_contact.jpg';
			endif;
		?>
		<img class="imgsub_ban" src="<?php echo $file_data; ?>" title="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>" alt="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>"/>
	</div><!-- end subBanner -->	
	<?php //endif; ?>
	<ul id="breadcrumb">
		<li><a href="<?php echo URL::site();?>" title="Home">Home</a></li>
		<li>/</li>
		<li><a href="<?php echo URL::site('links');?>" title="Links">Links</a></li>					
	</ul><!-- end breadcrumb -->
	<?php foreach($linkstype as $type):?>
		<h1><?php echo Text::limit_words(trim(strip_tags(ucfirst($type->description))),8,'');?></h1>
			<ul class="linkUl">
			<?php 
			foreach ($links as $link):
				if ($type->id == $link->type_id):
				?>
				<li><?php echo trim(strip_tags(ucfirst($link->description)));?> : 
					<a href="<?php echo !strstr($link->name, 'http://') ? 'http://'. trim(strip_tags($link->name)) : trim(strip_tags($link->name));?>" target="_blank" title="<?php echo trim(strip_tags(ucfirst($link->description)));?>"><?php echo !strstr($link->name, 'http://') ? 'http://'. trim(strip_tags($link->name)) : trim(strip_tags($link->name));?></a>
					</li>
				<?php 
				endif;
			endforeach;
			?>
			</ul>
	<?php endforeach;?>				
</div><!-- end content -->