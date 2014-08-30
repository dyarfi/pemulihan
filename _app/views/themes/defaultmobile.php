<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo BS_URL;?>favicon.ico" type="image/x-icon">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta name="keywords" content="<? echo $meta_keywords; ?>">
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
<!--[if IE 7]> <link href="css/mobile/styleIE7.css" rel="stylesheet" type="text/css"> <![endif]-->
<!--[if IE 8]> <link href="css/mobile/styleIE8.css" rel="stylesheet" type="text/css"> <![endif]-->
<!--[if IE 9]> <link href="css/mobile/styleIE9.css" rel="stylesheet" type="text/css"> <![endif]-->
<title><?php echo $page_title; ?></title>
</head>
<body>
<div id="container">
	<div id="logo">	
		<div class="top_holder">
			<a rel="download" class="href_button" href="<?php echo URL::site('touch?ref=download');?>" title="Download"><img src="<?php echo IMG;?>mobile/material/logo.jpg" alt="Download"/>
			</a>
			<a rel="download_app" class="download_app" href="<?php echo URL::site('/pemulihan.apk');?>" title="Download Apps"><img src="<?php echo IMG;?>mobile/material/download_app.png" alt="Download"/>
			</a>
		</div>	
	</div>
	<div id="list_info">
		<h2>Info</h2>
		<div class="inside_info">

Perkenalkan, kami dari :
<p>
AHVN = Arus Hayat Voice Note adalah renungan audio (suara) Firman Tuhan (dalam bahasa Indonesia) yang disebarkan secara gratis (FREE) untuk semua anak-anak Tuhan di seluruh dunia melalui berbagai sosial media.
<p>
Bagi Saudara Saudari yang ingin berlanganan AHVN, dapat menghubungi kami melalui : <p>

<strong>1.SMS ke [ 08 77 77 11 47 77] dengan:</strong><br>
- NAMA LENGKAP<br>
- KOTA TEMPAT TINGGAL<br>
- PIN BB & TYPE BB (bila mau dikirimkan via BBM)<br>
- NO WHATSAPP (bila mau dikirimkan via WhatsApp)<br>


<p>

<strong>2. Website: <a href="http://pemulihan.or.id">pemulihan.or.id</a></strong><br>
* perlu registrasi bila belum jadi member & harus login terlebih dahulu bila mau download

<p>

<strong>3. facebook: <a href="https://www.facebook.com/ArusHayat.VoiceNote">ArusHayat.VoiceNote</a>

<p>
<strong>4. Aplikasi Android: <a href="http://pemulihan.or.id/pemulihan.apk">pemulihan.or.id/pemulihan.apk</a></strong><br>
- Langkah-langkah mendownload aplikasi AHVN :<br>
<a href="http://gg.gg/Tutorial_download_aplikasi_AHVN_mp4">http://gg.gg/Tutorial_download_aplikasi_AHVN_mp4</a><br>

<p>
Info lebih lanjut atau pertanyaan-pertanyaan dapat dikirimkan via sms ke [ 08 77 77 11 47 77]
<p>
Terima Kasih,<br>
Salam - Tim AHVN.

            
            
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="wrapper_mobile">			
<div class="clearfix space50"></div>
	<div id="copyright"><?php echo trim(strip_tags($data['copyright']));?>&nbsp;
	<?php echo trim(strip_tags($data['registered']));?><br/>
	<a class="href_button" href="<?php echo URL::site('?ver=website');?>" title="Website Version">Go to Website Version</a>
</div>
</div>
</body>
</html>