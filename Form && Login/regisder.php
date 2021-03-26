<?php

include "databaseControl.php";
require "Myfunction/control.php";

$name = Control(@$_POST["name"]);
$surname = Control(@$_POST["surname"]);
$password = Control(@$_POST["password"]);
$email = Control(@$_POST["email"]);

$errors = [];
$querystring = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["name"])) {
		$errors["name"] = "Adinizi Yazin";
	}
	elseif (empty($_POST["surname"])) {
		$errors["surname"] = "Soyadinizi Yazin";
	}
	elseif (empty($_POST["password"])) {
		$errors["password"] = "Parolunuzu Yazin";
	}
	elseif (empty($_POST["email"])) {
		$errors["email"] = "Emailinizi Yazin";
	}
	elseif (!filter_var(Control($_POST["email"],FILTER_VALIDATE_EMAIL))) {
		$errors["email"] = "Eamilinizi Duzgun Yazin";
	}
	elseif (!preg_match("/^[a-zA-Z-' ]*$/", Control($_POST["name"]))) {
		$errors["name"] = "Adinizi Duzgun Yazin";
	}
	elseif (!preg_match("/^[a-zA-Z-' ]*$/", Control($_POST["surname"]))) {
		$errors["surname"] = "Soyadinizi Duzgun Yazin";
	}
	elseif (strlen(Control($_POST["password"])) <8 ) {
		$errors["password"] = "parolunuz cox qisadi";
	}
	elseif ($_SERVER["REQUEST_METHOD"]!= "POST") {
	 	echo "Giris QAdagandir";
	 } 


 else{
  $Addto = $db->prepare("INSERT INTO istifadeci SET UserName = ?,Surname = ?,UserEmail = ?,Userpassword = ?");
  $Addto ->execute([$name,$surname,$email,$password]);

 }#elsen in axiri


}#if in axiri

foreach ($errors as $key => $value) {
	  if (!$querystring) {
		$querystring = $querystring . '?' .$key .'='.$value;
	  }
	  else{
		$querystring = $querystring . '&' .$key .'='.$value;
	   }

}

header("Location: form.php".$querystring);

if ($Addto == TRUE) {
	header("Location: loginhtml.php");	

	}	



	





 

?>