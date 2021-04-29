<?php 
include "classess/Connection.php";

   ?><!DOCTYPE html> 
 <html>
 <head>
	<title></title>
 </head>
 <body>
	<form action="classess/Blog.php" method="post">
		<p style="color: red">
			<?php
			 if (isset($_SESSION["blogbasliqvalidation"])) {
			 	echo $_SESSION["blogbasliqvalidation"];
			 }

			 ?>
		</p>
        <textarea name="blogbasliqi" placeholder="Blog Basliqi..." rows="4" cols="50" >
        </textarea>
        <p style="color: red">
			<?php
			 if (isset($_SESSION["blogmetinvalidation"])) {
			 	echo $_SESSION["blogmetinvalidation"];
			 }

			 ?>
		</p>
		<textarea name="blogmetni" placeholder="Blog Metni..." rows="4" cols="50" >
        </textarea><br><br>
		<button>Blogu Yerlesdir</button>

	</form>
 </body>
 </html>
 
	