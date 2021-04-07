<?php
/*if(!isset($_SESSION)){ 
    session_start(); 
}
if (!isset($_SESSION["Ad"])) {
    header("Location: loginhtml.php");
}*/

include "bloginsertdatabase.php";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$blog_basliq = $_POST["blog_basliq"];
	$blog_metin = $_POST["blog_metin"];
	$blogname = $_POST["blogname"];

}
if (empty($_POST["blog_basliq"])) {
	header("Location:bloginput.php?name=0");
	die();
}
if (empty($_POST["blog_metin"])) {
	header("Location:bloginput.php?name=0");
	die();
}
if (empty($_POST["blogname"])) {
	header("Location:bloginput.php?name=0");
	die();
}


$insert = $blogdb->prepare("INSERT INTO Blog_data set blog_basliq=?,blog_aciqlama=?,blog_yazan=?");
$insert ->execute(array($blog_basliq,$blog_metin,$blogname));
if ($insert) {
	header("Location: blogcart.php");
}
