<?php 
session_start();
try{
$db=new PDO("mysql:host=localhost;dbname=Qeydiyyat;charset=utf8","root","");
}catch(PDOexception $e){
	echo "Xeta ".$e->getMessage();
}
?>