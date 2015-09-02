<?php
	$urltemp		="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$url 			= htmlentities($urltemp, ENT_QUOTES);

header('Location : $url');
$SITE_ROOT = "http://www.uniqlo.com/jp/sp";
$array_replaceable = array("%20","+"," ","。","、","！","%E3%80%82","。","%E3%80%81","、","%EF%BC%81","！");


 if(isset($_GET['title'])){
	// $urltemp		="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	// $url 		= htmlentities($urltemp, ENT_QUOTES);
	$title 			= $_GET['title'];
	$description 	= $_GET['description'];
	$image 			= $_GET['image']; 
	$name  			= $_GET['name'];
	$site_name 		= "Uniqlo";
	$app_id 		= 176318562473204;
}
		include_once("contents.html");
?>