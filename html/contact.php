<?php $page = "page7"?>
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
					<h4>Contact Us</h4>
					<img class="imgsub_ban" src="images/content/subbanner_contact.jpg"/>						
				</div><!-- end subBanner -->	
				<ul id="breadcrumb">
					<li><a href="#">Home</a></li>
					<li>/</li>
					<li><a href="#">Contact Us</a></li>					
				</ul><!-- end breadcrumb -->
				<div id="content">	
					<div class="boxContact">
						<p>
							Bila Anda mempunyai pertanyaan, kirimkan pertanyaan Anda kepada kami melalui email di bawah ini. Kami dengan sendang hati akan membantu Anda. Tuhan memberkati.
						</p>
						<form action="" method="post" class="formContact">
							<fieldset>
								<div class="formBox_top"></div>
								<div class="formBox_mid">
									<div class="isiMid">
										<p>
											<label>Name :</label>											
											<span class="box_input">
												<input class="input" type="text"/>
											</span>
										</p>
										<p>
											<label>Email :</label>											
											<span class="box_input">
												<input class="input" type="text"/>
											</span>
										</p>
										<p>
											<label>Message :</label>											
											<span class="box_area">
												<textarea class="txtarea"></textarea>
											</span> 
										</p>
										<span class="boxSend">
											<input type="submit" value="Send" class="btn_send"/>
										</span>
									</div>									
								</div>
								<div class="formBox_bot"></div>								
							</fieldset>
						</form>
					</div>
				</div><!-- end content -->				
								
			</div><!-- end boxRight -->
			
		<div class="clear"></div>		
		</div><!-- end wrapper -->
	</div><!-- end centerWrap --> 
		
<?php include('inc_footer.php');?>	

		
		