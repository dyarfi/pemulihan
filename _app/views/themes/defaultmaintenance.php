<?php defined('SYSPATH') OR die('No direct access allowed.');?>

<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->

<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->

<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="viewport" content="width=device-width">

<link rel="shortcut icon" href="<?php echo BS_URL;?>favicon.ico" type="image/x-icon">

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">

<meta name="keywords" content="<?php echo $meta_keywords; ?>">

<meta name="description" content="<?php echo $meta_description;?>">

<meta name="copyright" content="<?php echo $meta_copyright;?>">

<meta name="robots" content="all,index,follow">

<meta name="googlebot" content="all,index,follow">

<meta name="allow-search" content="yes">

<meta name="audience" content="all">

<meta name="revisit" content="2 days">

<meta name="revisit-after" content="2 days">

<meta name="author" content="Web Architect">

<meta name="creator" content="Web Architect indonesia">

<meta http-equiv="Reply-to" content="info@webarq.com">

<meta name="distribution" content="global">

<meta name="document-classification" content="general">

<meta name="rating" content="general">

<link rel="canonical" href="http://www.example.com">

<!--

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Developed by WEBARQ ( http://www.webarq.com )

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 

Generated : <?php echo date('d/m/Y H:m:s') . "\n";?>

-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-36154228-1', 'pemulihan.or.id');
  ga('send', 'pageview');

</script>


<script type="text/javascript"> var base_URL = '<?php echo BS_URL; ?>';</script>

<?php foreach($styles as $file => $type) { echo HTML::style(CSS.$file, array('media' => $type)), "\n"; }?>

<?php foreach($scripts as $file) { echo HTML::script(JS.$file, NULL, TRUE), "\n"; }?>

<!--[if IE 7]> <link href="css/styleIE7.css" rel="stylesheet" type="text/css"> <![endif]-->

<!--[if IE 8]> <link href="css/styleIE8.css" rel="stylesheet" type="text/css"> <![endif]-->

<!--[if IE 9]> <link href="css/styleIE9.css" rel="stylesheet" type="text/css"> <![endif]-->

<title><?php echo $page_title; ?></title>

</head>

<?php $current_page = Request::factory()->current()->controller(); ?>

<body id="<?php echo ($current_page != 'home') ? $current_page : 'homePage';?>">

<div id="wrapper" role="main" class="maintenance">		

	<div id="container">

		<div id="centerWrap">

			<div class="wrapper">

				<div id="BoxLeft">

					<div id="sideLeft">

						<div class="sideLeft_top">

							<a class="logo" href="<?php echo URL::site(); ?>" alt=""><img src="<?php echo IMG; ?>themes/content/logo.png" alt=""/></a>

							<div class="clear"></div>		

								<h1 style="

								z-index: 99; 

								color: #dc021b; 

								left: 0px; 

								right: 0px; 

								margin: 22px auto 0 auto;

								text-align: center;

								clear: none;

								font-size: 14px;

								">The Site is off for Maintenance</h1>

						</div><!-- end sideLeft top -->

					</div><!-- end sideLeft -->

					<div id="sideLeftBottom"></div>

				</div><!-- end boxLeft -->

				<!-- start main content -->

					<?php echo isset($content) ? '' : '';?>

				<!-- end main content -->

			</div>						

		</div><!-- end wrapper -->

	</div><!-- end centerWrap -->	

    <div id="footer">

      <div class="wrapper">

        <div id="footContent">

          <div class="leftFoot"> <span class="lfoot1"><?php echo @$data['registered'];?></span></div>

          <div class="rightFoot"> <span class="rfoot1"><?php echo @$data['copyright'];?> Design by <a href="http://www.webarq.com" target="blank">WEBARQ</a> </span>

            <div class="visitorBox"> <span class="visitor_text">Visitors :</span>

              <div id="acount_visitor">

                <div class="av_left"></div>

                <div class="av_center"><span><?php echo @$data['counter'];?></span></div>

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

  </div>

  <!-- end container -->

  <div class="clear"></div>

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

$(document).ready(function() { });

</script>



</body>

</html>