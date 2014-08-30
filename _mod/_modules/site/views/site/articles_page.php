<?php defined('SYSPATH') OR die('No direct access allowed.'); 
?>
	<?php //if ($page_category && $category_files):?>
	<div id="subBanner">
		<h4>Artikel</h4>
		<?php
			$file_img = !empty($category_files[$page_category->id]->file_name) ? $category_files[$page_category->id]->file_name : '';
			$caption = !empty($category_files[$page_category->id]->caption) ? text::limit_words(strip_tags($category_files[$page_category->id]->caption),20) : 'Title not available';
			if (is_file($category_upload_url . $file_img)) :
				$file_data = URL::base().$category_upload_url.str_replace('.', '_crop_640x121.', $file_img);
			else :
				$file_data = IMG . 'themes/content/subbanner_artikel.jpg';
			endif;
		?>
		<img class="imgsub_ban" src="<?php echo $file_data; ?>" title="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>" alt="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>"/>
	</div><!-- end subBanner -->	
	<?php //endif; ?>
	<ul id="breadcrumb">
		<li><a href="<?php echo URL::site();?>" title="Home">Home</a></li>
		<li>/</li>
		<li><a href="<?php echo URL::site('articles');?>" title="Artikel">Artikel</a></li>
	</ul><!-- end breadcrumb -->
<div id="content">
	<h1>Artikel</h1>
	<ul id="artikelBox" class="artikelBox2">
		<?php 
		$last =''; 
		$i = count($articles);
		foreach ($articles as $article): 
			if($i % 2 == 0) $last = ' class="last"'; 
		?>
		<li<?php echo $last;?>>
			<div class="liartikel">
				<div class="liartLeft">
					<?php	
						unset($file_img,$caption,$file_data);
						$file_img = !empty($article_files[$article->id]->file_name) ? $article_files[$article->id]->file_name : '';
						$caption = !empty($article_files[$article->id]->caption) ? text::limit_words(strip_tags($article_files[$article->id]->caption),20) : 'Title not available';
						if (is_file($aupload_path . $file_img)) :
							$file_data = URL::base().$aupload_url.str_replace('.', '_crop_90x90.', $file_img);
						else :
							$file_data = IMG . 'themes/no-image-90x90.gif';
						endif;
					?>
					<img class="thumbArt" src="<?php echo $file_data; ?>" title="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>" alt="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>"/>
				</div>
				<div class="liartRight">
					<span class="spanJudul"><a href="<?php echo URL::site('articles/read/'.$article->name);?>" title="<?php echo ucfirst($article->subject);?>"><?php echo ucfirst($article->subject);?></a></span>
					<span class="spanTgl">
						Posted <?php echo date('d/m/Y | h:m',strtotime($article->publish_date)); ?>
					</span>
					<div class="artikShort">
					<?php if (!empty($article->synopsis)): ?>
						<p><?php echo Text::limit_words(strip_tags(ucfirst($article->synopsis)),18,'...'); ?></p>
					<?php else :?>
						<p><?php echo Text::limit_words(strip_tags(ucfirst($article->text)),18,'...'); ?></p>
					<?php endif; ?>
					</div>
				</div><!-- end liartRight -->
			</div><!-- end liartikel -->
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