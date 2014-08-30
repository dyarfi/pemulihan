<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="viewport" content="width=device-width"/>
<link rel="shortcut icon" href="<?php echo BS_URL;?>favicon.ico" type="image/x-icon"/>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="<? echo $meta_keywords; ?>"/>
<meta name="description" content="<?php echo $meta_description;?>"/>
<meta name="copyright" content="<?php echo $meta_copyright;?>"/>
<meta name="robots" content="all,index,follow"/>
<meta name="googlebot" content="all,index,follow"/>
<meta name="google" content="notranslate"/>
<meta name="allow-search" content="yes"/>
<meta name="audience" content="all"/>
<meta name="revisit" content="2 days"/>
<meta name="revisit-after" content="2 days"/>
<meta name="distribution" content="global"/>
<meta name="document-classification" content="general"/>
<meta name="rating" content="general"/>
<meta name="author" content="Web Architect"/>
<meta name="creator" content="PT. Web Architect Technology (Web Agency in Jakarta)"/>
<meta name="author" content="defrian.yarfi@gmail.com"/>
<meta http-equiv="Reply-to" content="info@webarq.com"/>
<!--
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Developed by WEBARQ ( http://www.webarq.com )
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 
Generated : <?php echo date('d/m/Y H:m:s') . "\n";?>
-->
<script src="http://connect.facebook.net/en_US/all.js" type="text/javascript"></script>
<script type="text/javascript"> var base_URL = '<?php echo BS_URL; ?>';</script>
<?php foreach($styles as $file => $type) { echo HTML::style(CSS.$file, array('media' => $type)), "\n"; }?>
<?php foreach($scripts as $file) { echo HTML::script(JS.$file, NULL, TRUE), "\n"; }?>
<!--[if IE 7]> <link href="css/styleIE7.css" rel="stylesheet" type="text/css"> <![endif]-->
<!--[if IE 8]> <link href="css/styleIE8.css" rel="stylesheet" type="text/css"> <![endif]-->
<!--[if IE 9]> <link href="css/styleIE9.css" rel="stylesheet" type="text/css"> <![endif]-->
<title><?php echo !empty($page_title) ? $page_title : ''; ?></title>
</head>
<?php $current_page = Request::factory()->current()->controller(); ?>
<body id="<?php echo ($current_page != 'home') ? $current_page : 'homePage';?>">
<div id="wrapper" role="main">
	<div id="container">
		<div id="centerWrap">
			<div class="wrapper">
			<div id="BoxLeft">
				<div id="sideLeft">
				<div class="sideLeft_top">
					<a class="logo" href="<?php echo URL::site(); ?>" title="<?php echo @$data['title_default'];?>">
						<img src="<?php echo IMG; ?>themes/content/logo.png" alt="<?php echo @$data['title_default'];?>"/>
					</a>
					<div class="slogan"> 
					<?php echo @$data['site_quote']; ?>
					</div>
					<!-- end slogan -->
					<ul id="menuLeft">
						<li>
							<a class="aKidung" href="http://kidungindo.blogspot.com" title="Kumpulan Kidung-kidung Kristiani" target="_blank">									
								<span class="span1">Kidung</span><br/>	
								<span class="span2">Kumpulan Kidung-kidung Kristiani</span>
							</a>
						</li>
						<li>
							<a class="aHayat" href="http://arushayat.blogspot.com" title="Buku Seri Pelajaran Hayat" target="_blank">									
								<span class="span1">Arus Hayat</span><br/>	
								<span class="span2">Renungan Firman Setiap Hari</span>
							</a>
						</li>
						<li>
							<a class="aVoice" href="<?php echo URL::site('media/arus-hayat-voice-note');?>" title="Dengarkan Kumpulan Voice Note" target="_self">
								<span class="span1">Voice Note</span><br/>	
								<span class="span2">Dengarkan Kumpulan Voice Note</span>
							</a>
						</li>				
					</ul>
					<div id="bgBlue">			
						<div class="MenuCategori">
							<?php if (!empty($data['left_menu'])):?>
							<h1>Kategori Artikel</h1>
							<ul id="category">
							<?php 
								$i = 1;
								$class = '';
								foreach($data['left_menu'] as $left_menu): 
									if ($i == count($data['left_menu'])) $class = ' class="last"';
									?>
									<li<?php echo $class; ?>> 
										<a href="<?php echo URL::site('articles/'.$left_menu->name);?>" title="<?php echo $left_menu->title;?>"> <?php echo Text::limit_chars(ucfirst($left_menu->title),28,'');?> </a> 
									</li>
									<?php 
									$i++;
								endforeach;
							?>
							</ul>
							<?php endif; ?>
						</div>
						<?php if (!empty($data['member'])): ?>
						<!-- START MEMBER SEGMENT : USER INFORMATION -->				
						<div id="member">
							<div class="contentMember">
								<div class="lMember">
									<span class="hello">Hello,</span>
									<span class="user"><?php echo ucfirst($data['member']->name);?></span>
								</div>
								<div class="rMember">
									<span class="boxLogout">
									<a class="btn_Logout" href="<?php echo URL::site('member/logout');?>" title="Logout">
										<span>Logout</span>
									</a>
									</span>
								</div>
							</div>
						</div><!-- end member -->	
						<!-- END MEMBER SEGMENT : USER INFORMATION -->
						<?php endif; ?>			
						<?php
							//$bitly			= strpos(URL::site(), 'localhost') ? '' : Lib::bitly_url(URL::site(Request::$current->detect_uri()));
							$bitly			= strpos(URL::site(), 'localhost') ? '' : URL::site(Request::$current->detect_uri());
							$txths['url']   = $bitly ? $bitly : '';
							$txths['text']	= trim(strip_tags($page_title),"\n\r\x00..\x1F") .' - '. trim(Text::limit_words(strip_tags($meta_description),10,''),"\n\r\x00..\x1F");
							$txths['via']	= Lib::config('site.twit_via');
						?>
						<div class="socialMedia"><span class="share">Share :</span>					
							<ul class="ulSocial">
							<li><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
								<a class="fb facebook_share_button" href="http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo urlencode($page_title .' - '. SITE_NAME);?>&amp;p[url]=<?php echo urlencode(URL::site(Request::detect_uri()));?>&amp;p[summary]=<?php echo urlencode(Text::limit_words($meta_description,80,''));?>&amp;p[images][0]=<?php echo IMG; ?>themes/content/logo.png"><img src="<?php echo IMG; ?>themes/material/share_fb.jpg" alt=""/></a> 	
							</li>
							<li><a class="tw twitter_share_button" href="https://twitter.com/share?<?php echo @http_build_query($txths,'','&');?>" data-lang="en"><img src="<?php echo IMG; ?>themes/material/share_twitter.jpg" alt=""/></a>						
							</li>
							<li><a href="https://plus.google.com/share?<?php echo http_build_query(array('url'=>SITE_NAME));?>" onClick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
								<img src="<?php echo IMG; ?>themes/material/share_plusg.jpg" alt=""/>
								</a>
							</li>
							</ul>
						</div>
					</div>		
					<!-- end bgBLue -->		
					<?php if (!empty($data['member'])): ?>
					<!-- END MEMBER SEGMENT : CBOX -->
					<div id="boxLiveChat">
						<div class="boxChat_top">
							<div class="txtTop">
								<span>Live Chat</span>
							</div>
						</div>
						<div class="boxChat_bot">
						<!-- BEGIN CBOX - www.cbox.ws - v001 -->
							<div id="cboxdiv" style="text-align: center; line-height: 0; border:0px">
							<div><iframe frameborder="0" width="266" height="197" src="http://www7.cbox.ws/box/?boxid=548630&amp;boxtag=5wph5w&amp;sec=main" marginheight="0" marginwidth="0" scrolling="auto" allowtransparency="no" name="cboxmain7-548630" style="border:#ababab 1px solid;" id="cboxmain7-548630"></iframe></div>
							<div><iframe frameborder="0" width="266" height="84" src="http://www7.cbox.ws/box/?boxid=548630&amp;boxtag=5wph5w&amp;sec=form" marginheight="0" marginwidth="0" scrolling="no" allowtransparency="no" name="cboxform7-548630" style="border:#fff 0px solid;border-top:0px;" id="cboxform7-548630"></iframe></div>
							</div>
						<!-- END CBOX -->
						</div>
					</div><!-- end bocLiveChat-->
					<!-- END MEMBER SEGMENT : CBOX -->
					<?php endif; ?>				
				</div>
				<!-- end sideLeft top -->
				</div>
				<!-- end sideLeft -->
				<div id="sideLeftBottom"></div>
			</div>		
			<!-- end boxLeft -->
			<div id="BoxRight">
				<div id="TopRight">
				<div class="search">
					<div class="search_bagLeft"></div>
					<?php 
					$attributes = array('method'=>'post','class'=>"form");
					echo Form::open(URL::site('search'), $attributes);
					?>
					<div class="search_bagCenter"> 
					<?php echo Form::input('search', 'Search', array('class' => 'inputSearch', 
																	'onfocus' => "if(value=='Search')value='';",
																	'onblur' => "if(value=='')value='Search';")); 
					?>
					</div>
					<div class="wrapButtonGo"> <?php echo Form::submit('go', 'Go', array('class'=>'button_go')); ?> </div>
					<?php 
					echo Form::close();
					?>
				</div>
					<div style="width: auto;margin: -10px 0 0 0px; left:150px; position: absolute; border: 0px solid #990000; ">
						<a style="" href="<?php echo $data['socmed_facebook']->value;?>" title="" target="_blank">
							<img src="<?php echo ASSETS;?>images/themes/material/FollowUsFB_small.png"/>
						</a>	
					</div>
				<div id="wrap_fb">
					<div class="bg_fbLeft"></div>
					<div class="bg_fbCenter">
					<div class="isiFbCenter">
						<div id="fb-root"></div>
						<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo SITE_NAME;?>" scrolling="no" frameborder="0" style="float:right; height: 26px; margin: -2px auto 0 auto; padding: 0px; width: 166px;" seamless></iframe>
					</div>
					</div>
					<div class="bg_fbRight"></div>
				</div>
				<!-- end wrap fb -->
				</div>
				<!-- end Top Right -->
				<div id="mainMenu">
					<ul class="menu dropdown">
						<?php					
							$j = 1;
							foreach ($data['default_menus'] as $default_menus => $menus):
								$active = '';
								if (stristr(Request::$current->controller(),$default_menus))
									$active = ' class="active"';
								else if (stristr(Request::$current->controller(),$default_menus) == 'home')
									$active = ' class="active"';
								else
									$active = '';
								// Set url for home controller
								if ($default_menus == 'home')
									$default_menus = '/';
								// Set url for member controller
								if ($default_menus == 'login') {
									if (!empty($data['member'])) {
										$default_menus = 'member/profile?ref=nav';
										$menus = 'Profile';
									} else {
										$default_menus = 'member/login?ref=nav';
									}
								}
								$class = '';
								$aclass = ' id="menu'.$j.'"';
								if ($j == count($data['default_menus'])) {
									$class = ' class="Right"'; //class="example1"
									$aclass = ' id="menu'.$j.'" class="iframe example1"';
								}	
								$class	= ' class="menu'.$j.'"';
								// Set url for articles controller
								if ($default_menus == 'articles'): 
									echo '<li>'; 
									echo '<a'.$active.''.$aclass.' href="'.URL::site($default_menus).'" title="'.$menus.'">'.$menus.'</a>'; 
									echo ( Lib::traverse('drop',$default_menus, $parent_id = 0, $data['article_menus']) );
									echo '</li>';
								else:
								?>
								<li<?php echo $class;?>> 
									<a<?php echo $active;?><?php echo $aclass;?> href="<?php echo URL::site($default_menus); ?>" title="<?php echo $menus; ?>"> <?php echo $menus; ?> </a> 
								</li>
								<?php 
								endif;
								if ($j != count($data['default_menus'])): ?>
								<li>
									<div class="line"></div>
								</li>
							<?php 
							endif;
						$j++;
						endforeach;
						?>
					</ul>
					<div class="line_bottomMenu"></div>
				</div>
				<!-- end main menu -->
				<!-- start main content -->
				<?php echo isset($content) ? $content : '';?>
				<!-- end main content -->
				<div class="clear"></div>
			</div>
			<!-- end wrapper -->
			</div>
			<!-- end centerWrap -->
			<div id="footer">
			<div class="wrapper">
				<div id="footContent">
				<div class="leftFoot"> <span class="lfoot1"><?php echo @$data['registered'];?></span>
					<?php if (Request::$current->user_agent('mobile')): ?>
					<a href="<?php echo URL::site('?ver=mobile');?>" title="Website Version">Go to Mobile Version</a>
					<?php endif; ?>
				</div>
				<div class="rightFoot"> <span class="rfoot1"><?php echo @$data['copyright'];?> Design by <a href="http://www.webarq.com" target="blank">WEBARQ</a> </span>
					<div class="visitorBox"> <span class="visitor_text">Visitors :</span>
						<div id="acount_visitor">
							<div class="av_left"></div>
							<div class="av_center"><span><?php echo @$data['counter'];?></span></div>
							<div class="av_right"></div>						
						</div>
					</div>
					<div class="visitorBox"> <span class="visitor_text">Members :</span>
						<div id="acount_visitor">
							<div class="av_left"></div>
							<div class="av_center"><span><?php echo @$data['members'];?></span></div>
							<div class="av_right"></div>
						</div>
					</div>
					<!-- end visitorBox -->
				</div>
				</div>
				<!-- end foot content -->
				<div class="clear"></div>
			</div>
			</div>
			<!-- end footer -->
			<div class="clear"></div>
		</div><!-- end container -->	
	</div>	
</div>	
<script type="text/javascript">	
<?php if (Session::instance()->get("result") != '') : ?> 
	jAlert("<?php echo Session::instance()->get_once("result"); ?>", "Alert!");
<?php endif; ?>	
<?php if (Session::instance()->get("flash") != '') : ?> 
	jAlert("<?php echo Session::instance()->get_once("flash"); ?>", "Alert!");
<?php endif; ?>		
<?php if (Session::instance()->get("register_info") != '') : ?> 
	jAlert("<?php echo Session::instance()->get_once("register_info"); ?>", "Alert!"); 
<?php endif; ?>			
<?php if (Session::instance()->get("auth_error") != '') : ?> 
	jAlert("<?php echo Session::instance()->get_once("auth_error"); ?>", "Alert!");
<?php endif; ?>				
  var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-36154228-1']); _gaq.push(['_setDomainName', 'pemulihan.or.id']); _gaq.push(['_trackPageview']);
  (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>