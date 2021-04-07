<?php
if(!isset($_SESSION)){ 
    session_start(); 
} 
include "blogConnet.php";


if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$username = $_POST["username"];
	$surname = $_POST["surname"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$passwordt = $_POST["passwordt"];
}
if (!preg_match(" /^[a-zA-Z-' ]*$/", $_POST["username"])) {
	header("Location:regisderol.php?nameerror");
	die();
}
if (empty($_POST["username"])) {
	header("Location:regisderol.php?nameerror");
	die();
}
if (!preg_match(" /^[a-zA-Z-' ]*$/", $_POST["surname"])) {
	header("Location:regisderol.php?nameerror");
	die();
}
if (empty($_POST["surname"])) {
	header("Location:regisderol.php?nameerror");
	die();
}
if (empty($_POST["email"])) {
	header("Location:regisderol.php?nameerror");
	die();
}
if (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
	header("Location:regisderol.php?nameerror");
	die();
}
if (empty($_POST["password"])) {
	header("Location:regisderol.php?nameerror");
	die();
}
if (empty($_POST["passwordt"])) {
	header("Location:regisderol.php?nameerror");
	die();
}
if ($_POST["password"] !== $_POST["passwordt"]) {
 	header("Location:regisderol.php?nameerror");
 	die();
 } 

$insert = $db->prepare("INSERT INTO User set UserName=?,Surname=?,User_Email=?,Password=?,passwordt=?");
$insert ->execute(array($username,$surname,$email,$password,$passwordt));
if ($insert) {
	header("Location:loginhtml.php");
}

