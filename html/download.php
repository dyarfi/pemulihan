<?php $page = "page3"?>
<?php include('inc_header.php');?>	
		
	<div id="centerWrap">
		<div class="wrapper">
			<div id="BoxLeft">
				<div id="sideLeft">
					<div class="sideLeft_top">
						<?php include('inc_sideLeftTop.php');?>
						<div id="member">
							<div class="contentMember">
								<div class="lMember">
									<span class="hello">Hello,</span>
									<span class="user">Usermember 01</span>
								</div>
								<div class="rMember">
									<span class="boxLogout">
									<a class="btn_Logout" href="#" alt=""><span>Logout</span></a>
									</span>
								</div>
							</div>
						</div><!-- end member -->	
						<div id="bgBlue">
							<div class="socialMedia">
								<span class="share">Share :</span>
								<ul class="ulSocial">
									<li><a class="fb" href="#" alt=""><img src="images/material/share_fb.jpg" alt=""/></a></li>
									<li><a class="tw" href="#" alt=""><img src="images/material/share_twitter.jpg" alt=""/></a></li>
									<li><a class="plusg" href="#" alt=""><img src="images/material/share_plusg.jpg" alt=""/></a></li>
								</ul>
							</div>
							
						</div><!-- end bgBLue -->
						
					</div><!-- end sideLeft top -->
				</div><!-- end sideLeft -->				
				<div id="boxLiveChat">
					<div class="boxChat_top">
						<div class="txtTop">
							<span>Live Chat</span>
						</div>
					</div>
					<div class="boxChat_bot">
						<img src="images/content/img_chat.jpg" alt=""/>
					</div>
				</div><!-- end bocLiveChat-->
			</div><!-- end boxLeft -->
			
			<div id="BoxRight">
				<?php include('inc_TopRight.php');?>
				<div id="subBanner">
					<h4>Download</h4>
					<img class="imgsub_ban" src="images/content/subbanner_download.jpg"/>						
				</div><!-- end subBanner -->	
				<ul id="breadcrumb">
					<li><a href="#">Home</a></li>
					<li>/</li>
					<li><a href="#">Download</a></li>
				</ul><!-- end breadcrumb -->
				<div id="content">					
					<ul id="LiDownload">
						<li>							
							<a href="download_detail1.php" class="download1"><span>Arus Hayat Voice Note</span></a>							
						</li>
						<li>
							<a href="download_detail2.php" class="download2"><span>Powerpoint</span></a>
						</li>
						<li>
							<a href="download_detail3_login.php" class="download3"><span>Garis Besar Cerita</span></a>
						</li>
						<li class="last">
							<a href="download_detail4.php" class="download4"><span>Other</span></a>
						</li>
					</ul>
				</div><!-- end content -->				
				
				
			</div><!-- end boxRight -->
			
		<div class="clear"></div>		
		</div><!-- end wrapper -->
	</div><!-- end centerWrap --> 
		
<?php include('inc_footer.php');?>	

		
		