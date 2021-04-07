<?php
if(!isset($_SESSION)) 
    { 
     session_start(); 
} 
if (!isset($_SESSION["Ad"])) {
    header("Location: loginhtml.php");
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<a href="bloginput.php">Blog Yarat</a>
</form>
</body>
</html>
