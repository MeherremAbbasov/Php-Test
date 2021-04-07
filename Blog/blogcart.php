<?php 
/*if(!isset($_SESSION)) { 
  session_start(); 
} 

if (!isset($_SESSION["Ad"])) {
    header("Location: loginhtml.php");
}*/

include "bloginsertdatabase.php";

include "html.php";




$topla = $blogdb->prepare("SELECT *FROM Blog_data");

$topla->execute(array());

$x = $topla->fetchAll(PDO::FETCH_ASSOC);

 foreach ($x as $yaz) {
  ?>
  <div class="card" style="width: 60rem;">

  <div class="card-body">

  <h5 class="card-title" style="color: blue">Blog Sahibi:  <?php echo $yaz["blog_yazan"]; ?>;</h5>

  <h5 class="card-title" style="color: blue">Blog Tarixi:  <?php echo $yaz["blog_tarixi"]; ?>;</h5>

  <h6 class="card-subtitle mb-2 text-muted"><p style="color: blue">Bloq Basliqi:  <?php echo $yaz["blog_basliq"];?></h6></p>

  <p class="card-text" style="color: black; font-family: tahoma;font-size: 15px;"><?php echo substr ($yaz["blog_aciqlama"],0,180);?>.......</p>
  </div>

  <a href="next.php?id=<?php echo $yaz['blog_id'];?>">Davami</a>

  <?php
  	
 }



?>

