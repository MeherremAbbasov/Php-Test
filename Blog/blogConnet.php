<?php
if(!isset($_SESSION)){ 
    session_start(); 
} 

if (!isset($_SESSION["Ad"])) {
    header("Location: loginhtml.php");
}
try{
	$db = new PDO("mysql:host=localhost;dbname=Blog_register","root"," ");
}
catch(PDOexception $e){
	echo "Xeta".$e->getMessage();

}


