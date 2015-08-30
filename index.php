<?php

$SITE_ROOT = "http://www.uniqlo.com/jp/sp";
$array_r = array("%20","+"," ","。","、","！");

 if(isset($_GET['title'])){
	$urltemp		="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$url 			= htmlentities($urltemp, ENT_QUOTES);
	$title 			= $_GET['title'];
	$description 	= $_GET['description'];
	$image 			= $_GET['image']; 
	$site_name 		= "Uniqlo";
	$app_id 		= 176318562473204;
}
		include_once("contents.html");
?>