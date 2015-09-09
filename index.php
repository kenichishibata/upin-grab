<?php
header('Content-Type: text/html');

$SITE_ROOT = "http://www.uniqlo.com/jp/sp";
$array_ro = array("%20","+"," ","?^?^?","?^?^?","?^?","%E3%80%82","?^?^?","%E3%80%81","?^?^?","%EF%BC%81","?^?");


 if(isset($_GET['title'])){
        $urltemp                ="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $url                    = htmlentities($urltemp, ENT_QUOTES);
        $title                  = $_GET['title'];
        $description            = $_GET['description'];
        $image                  = $_GET['image'];
        $site_name              = "Uniqlo";
        $app_id                 = 176318562473204;
        include_once("contents.html");
        echo 'success!';
        echo $title;
        echo $description;
        echo $image;
}
else
    	echo 'Something went wrong. mail kenichi.shibata@fastretailing.com';
?>
