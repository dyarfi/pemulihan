<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div id="bannerSLide">
	<div id="wowslider-container1">
		<div class="ws_images">
			<ul>
				<?php
				$s = 0;
				foreach ($headline_article as $headline):
				?>
					<li>
						<a href="#" title="<?php echo Text::limit_chars(ucfirst($headline->subject),120);?>">
						<?php	
							unset($file_img,$caption,$file_data);
							$file_img = !empty($headline_files[$headline->id]->file_name) ? $headline_files[$headline->id]->file_name : '';
							$caption = !empty($headline_files[$headline->id]->caption) ? text::limit_words(strip_tags($headline_files[$headline->id]->caption),20) : 'Title not available';
							if (is_file($aupload_path . $file_img)) :
								$file_data = URL::base().$aupload_url.str_replace('.', '_crop_640x345.', $file_img);
							else :
								$file_data = IMG . 'themes/slider/slider1.jpg';
							endif;
						?>
						<img src="<?php echo $file_data; ?>" 
						alt="<div class='sliderHolder'>
						<span class='bigSpan'><?php echo Text::limit_words(ucfirst($headline->subject),6,'');?></span>	
						<div class='smallSpan'>
							<?php echo Text::limit_words(ucfirst($headline->synopsis),26,'...');?>
						</div>	
						<a class='btnMore' href='<?php echo URL::site('articles/read/'.$headline->name);?>'></a></div>" class="slider<?php echo $s;?>" id="wows<?php echo $s;?>" title="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>" />
						</a>
					</li>
				<?php
				$s++;
				endforeach; 
				?>
			</ul>
		</div>
		<div class="ws_bullets">
			<div>
				<?php for ($t=0;$t<$s;$t++):?>
					<a href="#">slider<?php echo $t;?></a>
				<?php endfor;?>
			</div>
		</div>
	</div>
<script type="text/javascript" src="<?php echo JS; ?>plugin/wowblur1.js"></script>
</div><!-- end banner slide -->	
<div id="musicBox">
	<div id="jquery_jplayer_home" class="jp-jplayer"></div>
	<div id="jp_container_home" class="jp-audio">
		<div class="jp-type-single">
			<div class="jp-gui jp-interface">
				<ul class="jp-controls">
					<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
					<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
					<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
					<!--li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li-->
					<!--li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li-->
					<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
				</ul>
				<div class="jp-progress">
					<div class="jp-seek-bar">
						<div class="jp-play-bar"></div>
					</div>
				</div>
				<div class="jp-volume-bar">
					<div class="jp-volume-bar-value"></div>
				</div>
				<div class="jp-time-holder">
					<div class="jp-current-time"></div>
					<div class="jp-duration"></div>
				</div>
			</div>
			<div class="jp-playlist">
				<ul>
					<li></li>
				</ul>
			</div>
			<!--div class="jp-title"><ul><li></li></ul></div-->
			<div class="jp-no-solution">
				<span>Update Required</span>
				To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
			</div>
		</div>
	</div>
</div>	
<script type="text/javascript">
//<![CDATA[
var myPlaylist = new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_home",
		cssSelectorAncestor: "#jp_container_home"
	}, [
		<?php 
		foreach ($medias as $media):
			$empty = '';
			if (!empty($mediafiles[$media->id]->file_name) && !empty($media->description)) {
				$default	 = strstr($mediafiles[$media->id]->file_name, '.');
				$temp_title	 = !empty($media->description) ? trim(strip_tags(ucfirst($media->description))) : 'Voice Note';
				$extension	 = str_replace('.', '', $default);
				$real_title	 = trim(strip_tags(ucfirst($media->subject))).' - '.$temp_title;
			?>
		{
			title:'<marquee behavior="scroll" scrollamount="4" direction="left" width="280"><?php echo $real_title; ?></marquee>',
			artist:"<?php echo Lib::_trim_strip(ucfirst($mediafiles[$media->id]->caption)); ?>",
			<?php echo $extension;?>:"<?php echo URL::site() . $mediafile_upload_url . $mediafiles[$media->id]->file_name;?>"
		},
		<?php 
			} else {
				$empty = TRUE;
			}
		endforeach; 
		?>
	], {
		playlistOptions: {
			//enableRemoveControls: true
		},
		play: function(event) { // Add a listener for anything we want when play began
			var cur_media = event.jPlayer.status.media;
			// ... ENTER YOUR CODE HERE
			// cur_media.author - Thats my handwrited Author, see below
			// cur_media.title - Song title
			// Another cur_media.xxxxxxxx - Other data fields that we typed (see below)
			//$('.jp-playlist ul li div').empty();
		},
		ready: function() {},
		solution: "flash, html",
		swfPath: "assets/js/library/jPlayer",
		supplied: "<?php echo !empty($extension) ? $extension : 'mp3' ;?>"
	});	   
	//console.log($('.jp-playlist-item').parents().text());	
//]]>	
</script>
<div class="clear ls10"></div>
<div class="space1"></div>
<div class="clear ls10"></div>
<h3>Latest Article</h3>
<ul id="artikelBox">
	<?php 
		$i = 1;
		$class = '';
		foreach($latest_article as $latests): 
			if ($i % 2 == 0) $class = 'last';
		?>
		<li class="<?php echo $class; ?>">
			<div class="liartikel">
				<div class="liartLeft">
					<?php	
						unset($file_img,$caption,$file_data);
						$file_img = !empty($latest_article_files[$latests->id]->file_name) ? $latest_article_files[$latests->id]->file_name : '';
						$caption = !empty($latest_article_files[$latests->id]->caption) ? text::limit_words(strip_tags($latest_article_files[$latests->id]->caption),20) : 'Title not available';
						if (is_file($aupload_path . $file_img)) :
							$file_data = URL::base().$aupload_url.str_replace('.', '_crop_90x90.', $file_img);
						else :
							$file_data = IMG . 'themes/no-image-90x90.gif';
						endif;
					?>
					<img class="thumbArt" src="<?php echo $file_data; ?>" title="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>" alt="<?php echo ($file_data && $caption != 'Title not available') ? $caption : ""; ?>"/>
				</div>
				<div class="liartRight">
					<span class="spanJudul"><a href="<?php echo URL::site('articles/read/' . $latests->name);?>" title="<?php echo Text::limit_chars(ucfirst($latests->subject),62,''); ?>">
					<?php echo Text::limit_chars(ucfirst($latests->subject),42,''); ?></a></span>
					<span class="spanTgl">Posted <?php echo $latests->publish_date; ?></span>
					<div class="artikShort">
					<?php if (!empty($latests->synopsis)): ?>
						<p><?php echo Text::limit_words(strip_tags(ucfirst($latests->synopsis)),18,'...'); ?></p>
					<?php else :?>
						<p><?php echo Text::limit_words(strip_tags(ucfirst($latests->text)),18,'...'); ?></p>
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
