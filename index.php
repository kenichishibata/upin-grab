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
	// twitter specific
	$username = $_GET['username'];
}
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Uniqlo Digital Chirashi</title>
	<!-- dynamic meta tags -->
	<meta property="og:url" content="<?php echo $url;?>" />
	<meta property="og:type" content="website" /> 
	<meta property="og:title" content="<?php echo $title;?>" />
	<meta property="og:description" content="<?php echo $description;?>" />
	<meta property="og:image" content="<?php echo $image;?>" />
	<meta property="og:site_name" content="<?php echo $site_name;?>">
	<!-- twitter specific meta tags -->
	<meta name="twitter:card" content="product">
	<meta name="twitter:site" content="@UNIQLO_JAPAN">
	<meta name="twitter:creator" content="<?php echo $username;?>">
	</head>
<body>
</body>

</html>

<?php 
?>