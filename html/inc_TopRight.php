<div id="TopRight">
	<div class="search">
		<div class="search_bagLeft"></div>
		<form action="" method="post" class="form">	
			<div class="search_bagCenter">
				<input type="text" class="inputSearch" value="Search" onfocus="if(value=='Search')value='';" onblur="if(value=='')value='Search'";/>
			</div>
			<div class="wrapButtonGo">
				<input type="submit" value="GO" class="button_go"/>
			</div>
		</form>
	</div>
	
	<div id="wrap_fb">
		<div class="bg_fbLeft"></div>
		<div class="bg_fbCenter">
			<div class="isiFbCenter">
				<img src="images/content/like_fb.png" alt=""/>
			</div>
		</div>
		<div class="bg_fbRight"></div>	
	</div><!-- end wrap fb -->					
</div><!-- end Top Right -->

<div id="mainMenu">					
	<ul class="menu dropdown">
		<li class="menu1">
			<a <?php if($page=="page1") echo ' class="active"'?> id="menu1" href="index.php" alt="">Home</a>
		</li>
		<li><div class="line"></div></li>
		<li class="menu2">
			<a <?php if($page=="page2") echo ' class="active"'?> id="menu2" href="about.php" alt="">About Us</a>
		</li>
		<li><div class="line"></div></li>
		<li class="menu3">
			<a <?php if($page=="page3") echo ' class="active"'?> id="menu3" href="download.php" alt="">Download</a>
		</li>
		<li><div class="line"></div></li>
		<li class="menu4">
			<a <?php if($page=="page4") echo ' class="active"'?> id="menu4" href="#" alt="">Articles</a>
			<ul class="drop">
				<li><a href="artikel_gereja.php" alt="">Gereja</a></li>
				<li><a href="#" alt="">Injil</a></li>
				<li><a href="#" alt="">Doa</a></li>
				<li><a href="#" alt="">Pendalaman Alkitab</a></li>
				<li class="noBor"><a href="#" alt="">Kehidupan Orang Kristen</a></li>
			</ul>
		</li>
		<li><div class="line"></div></li>
		<li class="menu5">
			<a <?php if($page=="page5") echo ' class="active"'?> id="menu5" href="media.php" alt="">Media</a>
		</li>
		<li><div class="line"></div></li>
		<li class="menu6">
			<a <?php if($page=="page6") echo ' class="active"'?> id="menu6" href="links.php" alt="">Links</a>
		</li>
		<li><div class="line"></div></li>
		<li class="menu7">
			<a <?php if($page=="page7") echo ' class="active"'?> id="menu7" href="contact.php" alt="">Contact Us</a>
		</li>
		<li><div class="line"></div></li>
		<li class="Right">
			<a id="menu8" class="example1" href="popup/formLogin.php" alt="">Login</a>
		</li>
	</ul>
	<div class="line_bottomMenu"></div>
</div>
<!--------------------------------------------------------- end main menu --------------------------------->