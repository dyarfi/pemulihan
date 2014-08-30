<div id="toolbar">
	<div class="btn-back">
		<a href="<?php echo URL::site();?>"><img src="<?php echo IMG;?>mobile/material/btn-back.png"/></a>
	</div> 
	<h2>Media</h2>
	<div class="btn-home">
		<a href="<?php echo URL::site();?>"><img src="<?php echo IMG;?>mobile/material/ico-home.png"/></a>
	</div> 
</div>
	<div id="list_info" class="hayat">			
		<h2 style="font-size:15px;">Media <?php echo '- '. Text::limit_chars(ucfirst($mediarelease->subject),75); ?></h2>
		<?php 
		if (!empty($medias)): ?>
		<ul class="listDownload">	
			<?php 
			$last =''; 
			$i = count($medias);
			$j = 1;
			foreach ($medias as $media): 
			?>
			<li class="hover_player">
				<div class="text_holder">
				<?php echo Text::limit_chars(ucfirst($media->subject),12);?> :
				<?php echo Text::limit_chars(trim(strip_tags($media->description)),18);?>
				</div>
				<div class="media_holder">
					<?php
					if (!empty($mediafiles[$media->id])) {
						$class = '';
						foreach ($mediafiles[$media->id] as $mfiles) {
							$class = (strstr($mfiles->file_name,'mp3')) ? 'btnah_left' : 'btnah_right';
							if(file_exists($mediafile_upload_path . $mfiles->file_name)) :
								if($class =='btnah_left') :
								?>
								<div class="jp-pemulihan" style="display:block;">
									<div id="jquery_jplayer_<?php echo $j;?>" class="jp-jplayer"></div>
									<div id="jp_container_<?php echo $j;?>" class="jp-audio">
										<div class="jp-type-single">
											<div class="jp-gui jp-interface">
												<ul class="jp-controls">
												<li><a href="javascript:;" class="jp-play" tabindex="1" title="Play">play</a></li>
												<li><a href="javascript:;" class="jp-pause" tabindex="1" title="Pause">pause</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<?php
								endif; 
								?>	 
								<div class="file_media_holder">
									<span class="<?php echo $class;?>">
									<a class="btnMPAM" target="_blank" title="Download : <?php echo strtoupper(str_replace('.','', strstr($mfiles->file_name,'.')) .' | ' . Text::bytes(filesize($mediafile_upload_path . $mfiles->file_name)) );?>" href="<?php echo URL::site().'media/download/'.base64_encode($mediafile_upload_path . $mfiles->file_name);?>" alt="<?php echo $mfiles->caption;?>">
										<span><?php echo strtoupper(str_replace('.','', strstr($mfiles->file_name,'.'))); ?></span>
									</a>
									</span>
								</div>
							<?php
							endif;
						}
					} else {
					?>
					<span class="btnah_right">&nbsp;&nbsp;-&nbsp;-</span>
					<?php
					}
					?>
				</div>
			</li>
			<?php 
			$j++;
			$i++;
			endforeach; 
			?>
		</ul><!-- end artikelBox -->	
		<?php else:?>
			Tidak ada File di dalam <?php echo ucfirst($mediarelease->subject); ?>
			<br/><br/>
		<?php endif;
		?>
		<div class="space5"></div>
		<div id="wrapPagination">
			<?php echo $pagination->render(); ?>
		</div><!-- end wrap pagination -->
		<div class="space5"></div>
	</div><!-- end list_info -->
<script type="text/javascript">
//<![CDATA[	
<?php 
if (!empty($medias)) { 
	$i_js = 1;
	foreach ($medias as $media_js) {
		if (!empty($mediafiles[$media_js->id])) {
			foreach ($mediafiles[$media_js->id] as $mfiles_js) {
				if (strstr($mfiles_js->file_name,'mp3')) {
					if(file_exists($mediafile_upload_path . $mfiles_js->file_name)) {
?>
$("#jquery_jplayer_<?php echo $i_js;?>").jPlayer({
	ready: function () {
		$(this).jPlayer("setMedia", {
			mp3: "<?php echo URL::site() . $mediafile_upload_url . $mfiles_js->file_name;?>"
		});
	},
	play: function() { // To avoid both jPlayers playing together.
		$(this).jPlayer("pauseOthers");
	},
	preload: "none",
	solution: "flash, html",
	swfPath: "<?php echo ASSETS;?>js/library/jPlayer",
	supplied: "mp3",
	cssSelectorAncestor: "#jp_container_<?php echo $i_js;?>",
	wmode: "window"
});
<?php
					} 
				}
			}
		}
		$i_js++;
	}
}
?>	
//]]>
</script>
<div class="wrapper_mobile">			
	<div class="clearfix space50"></div>
	<div id="copyright"><?php echo trim(strip_tags($data['copyright']));?>&nbsp;
	<?php echo trim(strip_tags($data['registered']));?>
		<br/>
		<a class="href_button" href="<?php echo URL::site('?ver=website');?>" title="Website Version">Go to Website Version</a>
	</div>
</div>
