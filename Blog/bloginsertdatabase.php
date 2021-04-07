<?php

if(!isset($_SESSION)){ 
    session_start(); 
}

if (!isset($_SESSION["Ad"])) {
	header("Location: loginhtml.php");
}
try{
	$blogdb = new PDO("mysql:host=localhost;dbname=Blog","root"," ");
}
catch(PDOexception $f){
	echo "Baglanmadi blog".$f->getMessage();
}