<?php
$SITE_ROOT = "http://www.uniqlo.com/jp/sp";

 if(isset($_GET['title'])){
	$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$title = $_GET['title'];
	$dxescription =  $_GET['description'];
	$image = $_GET['image']; 
	//The recommended dimension is more than 1200x630 for best display on high resolution devices
	// Minimum dimension is 600x315
	// advance og tags
	$site_name = "Uniqlo";
	$app_id = 176318562473204;
}
	// $try = file_get_contents('http://www.uniqlo.com/jp/');

?>
<!DOCTYPE html>
<html>
	<head>
	<title>Uniqlo Digital Chirashi</title>
	<!-- add some design responsiveness -->

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- dynamic meta tags -->
	<meta property="og:url" content="<?php echo $url;?>" />
	<meta property="og:type" content="website" /> 
	<meta property="og:title" content="<?php echo $title;?>" />
	<meta property="og:description" content="<?php echo $description;?>" />
	<meta property="og:image" content="<?php echo $image;?>" />
	<meta property="og:site_name" content="<?php echo $site_name;?>">
	<!-- facebook sdk script -->
	<script type="text/javascript" src="fb-sdk.js"></script>
	<!-- <script type="text/javascript" src="fb-share.js"></script> -->
	<!-- <script type="text/javascript" src="fb-share-og.js"></script> -->
	<script type="text/javascript" src="fb-share-jquery.js"></script>
	<!-- eof facebook script -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
	</head>
<body>
<div id="fb-root"></div>
<div 	class="fb-share-button" 
        data-href="http://www.uniqlo.com/jp/store/feature_mb/uq/list_s/chirashi_flyer/women" 
        data-layout="button_count">
    </div>

</body>

</html>

<?php 
?>