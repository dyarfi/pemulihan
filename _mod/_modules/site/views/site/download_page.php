<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div id="subBanner">
	<h4><?php echo ucfirst($page_category->title); ?></h4>
	<?php
		$file_img = !empty($category_files[$page_category->id]->file_name) ? $category_files[$page_category->id]->file_name : '';
		$caption = !empty($category_files[$page_category->id]->caption) ? text::limit_words(strip_tags($category_files[$page_category->id]->caption),20) : 'Title not available';
		if (is_file($category_upload_url . $file_img)) :
			$file_data = URL::base().$category_upload_url.str_replace('.', '_crop_640x121.', $file_img);
		else :
			$file_data = IMG . 'themes/content/subbanner1.jpg';
		endif;
	?>
	<img class="imgsub_ban" src="<?php echo $file_data; ?>" title="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>" alt="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>"/>
</div><!-- end subBanner -->	
<ul id="breadcrumb">
	<li><a href="<?php echo URL::site();?>" title="Home">Home</a></li>
	<li>/</li>
	<li><a href="<?php echo URL::site('download');?>" title="Download">Download</a></li>
</ul><!-- end breadcrumb -->
<div id="content">
	<h1>Download</h1>
	<ul id="LiDownload">
		<?php 
		$last =''; 
		$i = count($downloadtype);
		$j = 1;	
		$ahref_links = URL::site('login');
		foreach ($downloadtype as $types): 
			if($j == $i) $last = ' last'; 
			$class_login = ($types->visible == 1 && empty($member)) ? 'iframe ' : '';
			$ahref_links = ($types->visible == 1 && empty($member)) ? URL::site('login') : URL::site('download/'.$types->name);
		?>
		<li class="<?php echo $last;?>">
			<a href="<?php echo $ahref_links;?>" class="<?php echo $class_login?> download_li_img" title="<?php echo Text::limit_chars(ucfirst($types->subject),25);?>">
				<?php	
					unset($file_img,$caption,$file_data);
					$file_img = !empty($downloadtypefiles[$types->id]->file_name) ? $downloadtypefiles[$types->id]->file_name : '';
					$caption = !empty($downloadtypefiles[$types->id]->caption) ? text::limit_words(strip_tags($downloadtypefiles[$types->id]->caption),20) : 'Title not available';
					if (is_file($downloadtype_upload_path . $file_img)) :
						$file_data = URL::base().$downloadtype_upload_url.str_replace('.', '_crop_143x143.', $file_img);
					else :
						$file_data = IMG . 'themes/content/media2.jpg';
					endif;
				?>
				<img class="hoverizr" src="<?php echo $file_data; ?>" title="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>" alt="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>"/>
				<span><?php echo Text::limit_chars(ucfirst($types->subject),25);?></span>
			</a>
		</li>
		<?php
		$j++;
		endforeach; 
		?>	
	</ul>
	<div class="space1"></div>
	<div id="wrapPagination">
		<?php echo $pagination->render(); ?>
	</div><!-- end wrap pagination -->
</div><!-- end content -->