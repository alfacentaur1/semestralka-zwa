<?php
session_start();
if(!isset($_SESSION["username"])){
    $message = urlencode("Nastala chyba.");
    header("Location: login.php?error=$message");
    exit;
}

require "functions.php";
$ads = loadAds();
if(isset($_GET["id"])){
    $rest = [];
    $ad_id = $_GET["id"];
    foreach($ads as $ad){
        if($ad["id"] != $ad_id){
            $rest[] = $ad;
        }
    }
    saveAd($rest);
    $image_id = $_GET["id"]; 
    $image_path = './images/' . $image_id . '.jpg'; // path to file

// check if image exists, if yes, delete
if (file_exists($image_path)) {
    unlink($image_path);
} 
    header("Location: index.php");
}else{
    header("Location: index.php?php=id nenalezeno");
}
?>