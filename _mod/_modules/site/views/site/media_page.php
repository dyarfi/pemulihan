<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
	<?php //if ($page_category && $category_files):?>
	<div id="subBanner">
		<h4><?php echo ucfirst($page_category->title); ?></h4>
		<?php
			$file_img = !empty($category_files[$page_category->id]->file_name) ? $category_files[$page_category->id]->file_name : '';
			$caption = !empty($category_files[$page_category->id]->caption) ? text::limit_words(strip_tags($category_files[$page_category->id]->caption),20) : 'Title not available';
			if (is_file($category_upload_url . $file_img)) :
				$file_data = URL::base().$category_upload_url.str_replace('.', '_crop_640x121.', $file_img);
			else :
				$file_data = IMG . 'themes/content/subbanner_media.jpg';
			endif;
		?>
		<img class="imgsub_ban" src="<?php echo $file_data; ?>" title="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>" alt="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>"/>
	</div><!-- end subBanner -->	
	<?php //endif; ?>
	<ul id="breadcrumb">
		<li><a href="<?php echo URL::site();?>" title="Home">Home</a></li>
		<li>/</li>
		<li><a href="<?php echo URL::site('download');?>" title="Media">Media</a></li>
	</ul><!-- end breadcrumb -->
<div id="content">
	<h1>Media</h1>
	<ul class="mediaul">
		<?php 
		$last =''; 
		$i = count($mediarelease);
		foreach ($mediarelease as $release): ?>
		<li<?php echo $last;?>>
			<div class="boxMed"> 
			<a href="<?php echo URL::site('media/'.$release->name);?>" class="alink" title="<?php echo Text::limit_chars(ucfirst($release->subject),25);?>">
				<?php	
					unset($file_img,$caption,$file_data);
					$file_img = !empty($mediareleasefiles[$release->id]->file_name) ? $mediareleasefiles[$release->id]->file_name : '';
					$caption = !empty($mediareleasefiles[$release->id]->caption) ? text::limit_words(strip_tags($mediareleasefiles[$release->id]->caption),20) : 'Title not available';
					if (is_file($media_upload_path . $file_img)) :
						$file_data = URL::base().$media_upload_url.str_replace('.', '_crop_198x179.', $file_img);
					else :
						$file_data = IMG . 'themes/content/media1.jpg';
					endif;
				?>
				<img class="imgbMed" src="<?php echo $file_data; ?>" title="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>" alt="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>"/>
				<span><?php echo Text::limit_chars(ucfirst($release->subject),25);?></span>
			</a>
			</div>
		</li>
		<?php 
		$i++;
		endforeach; 
		?>
	</ul><!-- end artikelBox -->
	<div class="space1"></div>
	<div id="wrapPagination">
		<?php echo $pagination->render(); ?>
	</div><!-- end wrap pagination -->
</div><!-- end content -->