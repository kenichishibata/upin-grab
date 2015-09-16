<?php

$SITE_ROOT = "http://www.uniqlo.com/jp/sp";

 if(isset($_GET['title'])){
	$urltemp		="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$url 			= htmlentities($urltemp, ENT_QUOTES);
	$title 			= mysql_real_escape_string($_GET['title']);
	$description 	= mysql_real_escape_string($_GET['description']);
	$image 			= mysql_real_escape_string($_GET['image']); 
	$site_name 		= "Uniqlo";
	$app_id 		= 176318562473204;
}
		include_once("dev-contents.html");
?>