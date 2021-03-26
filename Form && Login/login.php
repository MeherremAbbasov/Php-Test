<?php include "databaseControl.php";

$username = @$_POST["username"];
$password = @$_POST["password"];

$check = $db->query("SELECT *FROM istifadeci WHERE UserName = '$username' AND Userpassword = '$password'")->fetch();

if ($check) {
	$_SESSION['username'] = $username;
	$_SESSION["password"] = $password;
	header("Location: panel.php");
	die();
}
else{
	header("Location: loginhtml.php?error=1");

}



















/*$ex = $yoxla->execute([$username,$password]);
if ($ex) {
	echo "Emeliiyat Ugurludur";
}else{
	echo "Ugursuz";
}*/






























/*$user = $db->query("SELECT *FROM istifadeci WHERE UserName= '$username' AND Userpassword='$password'")->fetch();
$user->execute([$username,$password]);


if ($islem) {
	$_SESSION["ad"] = $islem["UserName"];
	$_SESSION["parol"] = $islem["Userpassword"];
	header("Location:trans.php");

}else{
	echo "Xeta";
}*/









?>




