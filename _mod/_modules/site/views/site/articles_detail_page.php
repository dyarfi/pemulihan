<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div id="subBanner">
	<h4>Artikel</h4>
	<img class="imgsub_ban" src="<?php echo IMG; ?>themes/content/subbanner_artikel.jpg" title="Artikel" alt="Artikel"/>
</div><!-- end subBanner -->	
<ul id="breadcrumb">
	<li><a href="<?php echo URL::site();?>" title="Home">Home</a></li>
	<li>/</li>
	<li><a href="<?php echo URL::site('articles');?>" title="Artikel">Artikel</a></li>
	<li>/</li>	
	<li><a href="#"><?php echo ucfirst($article_detail->subject);?></a></li>					
</ul><!-- end breadcrumb -->
<div id="content">					
	<h2><?php echo ucfirst($article_detail->subject);?></h2>
	<div class="postDetail">
		<span class="spanTgl">Posted <?php echo date('d/m/Y | h:m',strtotime($article_detail->publish_date)); ?></span>
	</div>
	<?php	
		unset($file_img,$caption,$file_data);
		$file_img = !empty($article_files[$article_detail->id]->file_name) ? $article_files[$article_detail->id]->file_name : '';
		$caption = !empty($article_files[$article_detail->id]->caption) ? text::limit_words(strip_tags($article_files[$article_detail->id]->caption),20) : 'Title not available';
		if (is_file($aupload_path . $file_img)) :
			$file_real = URL::site().$aupload_url.$file_img;
			$file_data = URL::site().$aupload_url.str_replace('.', '_resize_280x172.', $file_img);
			?>
			<a href="<?php echo $file_real;?>" class="colorbox" title="<?php echo $caption;?>"><img class="imgLeft" src="<?php echo $file_data;?>" />
			</a>
		<?php
		endif;
		?>
	<p><?php echo ucfirst(strip_tags($article_detail->text, '<p><a><b><u><strong><acronym><span><div><br><br/><em><abbr>'));?></p>
	<br />
	<div class="space1"></div>
	<div id="bottomBox">
		<div class="likeBox">
			<?php
					$bitly			= strpos(URL::site(), 'localhost') ? '' : Lib::bitly_url(URL::site(Request::$current->detect_uri()));
					$txths['url']   = $bitly ? $bitly : '';
					$txths['text']	= trim(strip_tags($article_detail->subject),"\n\r\x00..\x1F") .' - '. trim(Text::limit_words(strip_tags($article_detail->text),10,''),"\n\r\x00..\x1F");;
					$txths['via']	= Kohana::$config->load('site.twit_via');
			?>
			<a href="https://twitter.com/share?<?php echo @http_build_query($txths,'','+','PHP_QUERY_RFC1738');?>" class="twitter-share-button">Tweet</a>
			<script type="text/javascript">!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>			
			<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo urlencode(URL::site(Request::$current->detect_uri()));?>&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;height=35" scrolling="no" frameborder="0" style="border:none;
  height:20px;
  margin:0 0 0 -28px;
  overflow:hidden;
  padding:0;
  position:relative;
  width:100px;" allowTransparency="true"></iframe>
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
	</div><!-- end bottomBox -->
</div><!-- end content -->	
<div class="space20"></div>
<?php if ($article_detail->allow_comment == 1):?>
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
	