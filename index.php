<?php
//Real escape string without mysql 
function mysql_escape_mimic($inp) { 
    if(is_array($inp)) 
        return array_map(__METHOD__, $inp); 
    if(!empty($inp) && is_string($inp)) { 
        return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp); 
    } 
    return $inp; 
} 
// reserve this line....
//URL getter starts here...
$SITE_ROOT = "http://www.uniqlo.com/jp/sp";
 	if(isset($_GET['title'])){
		$urltemp= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$url = htmlspecialchars_decode($urltemp);
		$title = htmlspecialchars_decode($_GET['title']);
		$description =  htmlspecialchars_decode($_GET['description']);
		$image = htmlspecialchars_decode($_GET['image']); 
		$site_name = "Uniqlo";
		$app_id = 176318562473204;
}
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Uniqlo Digital Chirashi</title>

	<!-- dynamic meta tags -->
	<meta property="og:url" content="<?php echo mysql_real_escape_string($url);?>" />
	<meta property="og:type" content="website" /> 
	<meta property="og:title" content="<?php echo mysql_real_escape_string($title);?>" />
	<meta property="og:description" content="<?php echo mysql_real_escape_string($description);?>" />
	<meta property="og:image" content="<?php echo mysql_real_escape_string($image);?>" />
	<meta property="og:site_name" content="<?php echo mysql_escape_mimic($site_name);?>">
	<!-- twitter specific meta tags -->
	<meta name="twitter:card" content="product">
	<meta name="twitter:site" content="@UNIQLO_JAPAN">
	</head>
<body>
</body>

</html>
