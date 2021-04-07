<?php
if(!isset($_SESSION)){ 
    session_start(); 
}
include "blogConnet.php";


$username = $_POST["username"];
$password = $_POST["password"];

$control = $db->query("SELECT *FROM User WHERE Username = '$username' AND Password = '$password'")->fetch();

if ($control) {
	$_SESSION["Ad"] = $username;
	$_SESSION["parol"] = $password;
	header("Location: blog.php");

}

else{
	header("Location: loginhtml.php?name=1");
}
