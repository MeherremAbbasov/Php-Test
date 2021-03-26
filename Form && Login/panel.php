<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("Location:loginhtml.php");
}
echo "Xos Geldin  ".$_SESSION["username"].'<br>';
echo "<a href='cixis.php'>Hesabdan Cixis ET</a>";
?>