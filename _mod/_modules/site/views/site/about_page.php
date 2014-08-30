<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
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
				$file_data = IMG . 'themes/content/subbanner1.jpg';
			endif;
		?>
		<img class="imgsub_ban" src="<?php echo $file_data; ?>" title="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>" alt="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>"/>
	</div><!-- end subBanner -->	
	<?php //endif; ?>
	<ul id="breadcrumb">
		<li><a href="<?php echo URL::site();?>" title="Home">Home</a></li>
		<li>/</li>
		<li><a href="<?php echo URL::site('about');?>" title="About">About</a></li>
		<?php if (!empty($about_page)):?><li>/</li><li><a href="<?php echo URL::site('about/read') . '/' . $about_page->name;?>"><?php echo $about_page->subject?></a></li><?php endif;?>
	</ul><!-- end breadcrumb -->
	<?php
	if (!empty($about_page)) :
	?>
		<h1><?php echo $about_page->subject; ?></h1>
		<?php echo $about_page->text;?>
	<?php
	endif;
	?>
	<div class="space1"></div>
	<div id="bottomBox">
		<div class="likeBox">
			<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo urlencode(URL::site(Request::$current->detect_uri()));?>&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;height=35" scrolling="no" frameborder="0" style="border:none;
  height:20px;
  margin:0 0 0 0px;
  overflow:hidden;
  padding:0;
  position:relative;
  width:100px;" allowTransparency="true"></iframe>
			<?php
					$bitly			= strpos(URL::site(), 'localhost') ? '' : Lib::bitly_url(URL::site(Request::$current->detect_uri()));
					$txths['url']   = $bitly ? $bitly : '';
					$txths['text']	= trim(strip_tags($about_page->subject),"\n\r\x00..\x1F") .' - '. trim(Text::limit_words(strip_tags($about_page->text),10,''),"\n\r\x00..\x1F");
					$txths['via']	= Kohana::$config->load('site.twit_via');
			?>
			<a href="https://twitter.com/share?<?php echo @http_build_query($txths,'','+','PHP_QUERY_RFC1738');?>" class="twitter-share-button">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>	
			<!-- Place this tag where you want the +1 button to render. -->
			<div class="g-plusone" data-size="medium" data-href="<?php echo urlencode(URL::site(Request::$current->detect_uri()));?>"></div>
			<!-- Place this tag after the last +1 button tag. -->
			<script type="text/javascript">
			window.___gcfg = {
				lang: 'en-US'
			};
			(function() {
				var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				po.src = 'https://apis.google.com/js/plusone.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			})();
			</script>
		</div>
		<div class="backTop">
			<a class="btnBackTop" href="#">Back to Top</a>
		</div>
		<?php if (!empty($about_pages_others)):?>
		<div class="space10"></div>
		Baca juga tentang :
		<ul class="linkUlPage">
		<?php foreach ($about_pages_others as $others):?>
			<li><a href="<?php echo URL::site('about/read') .'/'. $others->name;?>" title="<?php echo $others->subject;?>"><?php echo $others->subject;?></a></li>
		<?php endforeach;?>
		</ul>	
		<div class="space10"></div>
		<?php endif; ?>
	</div><!-- end bottomBox -->
<div class="space10"></div>
<?php if ($about_page->allow_comment == 1):?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	<div class="fb-comments" data-href="<?php echo Request::$current->url();?>" data-num-posts="2" data-width="638"></div>
<?php else: ?>
	Fitur komentar ditutup.
<?php endif; ?>
</div>
