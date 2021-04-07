<?php
if(!isset($_SESSION)){ 
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
	<form action="blogdata.php" method="post">
		<p style="color: red">
			 <?php
			 if (isset($_GET["name"])) {
				echo "Adini Yazmagi Unutma";
			 }
			 ?>
		     </p>
		<input type="text" name="blogname" placeholder="Adiniz..">
			<p style="color: red">
			 <?php
			 if (isset($_GET["name"])) {
				echo "Blog Basliqini Yazmagi Unutma";
			 }
			 ?>
		     </p>
		<textarea placeholder="Blog Basliqi" name="blog_basliq"></textarea><br>
			<p style="color: red">
			 <?php
			 if (isset($_GET["name"])) {
				echo "Metin Basliqini Yazmagi Unutma";
			 }
			 ?>
		     </p>

		<textarea placeholder="Blog Metni" name="blog_metin"></textarea><br><br>
		<button>Blog Gonder</button>
	</form>
</body>
</html>