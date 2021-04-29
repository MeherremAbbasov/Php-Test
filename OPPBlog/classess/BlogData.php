<?php

include "Connection.php";
class BlogData extends Connection
{
  public function BlogShow()
  {
  	parent::__construct();

  	$con = $this->DB->prepare("SELECT *FROM Bloglar");
  	$con->execute([]);
  	$x = $con->fetchAll(PDO::FETCH_ASSOC);

  	foreach ($x as $m) {
  	 ?>

  	 <head>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

     </head>

     <div class="card" style="width: 18rem;">

     <div class="card-body">
      
      <h5 class="card-title">Blog Tarixi: <?php echo $m["Blog_Tarixi"]; ?></h5>

     <h5 class="card-title">Blog Yazan Adi: <?php if (isset($_SESSION["istifadeci"])) {
     	echo $_SESSION["istifadeci"];

     } ?></h5> 

     <h5 class="card-title">Blog Basliqi: <?php echo $m["Blog_Basliqi"]; ?></h5>

     <p class="card-text"><h5>Blog Metini:</h5>: <?php echo substr($m["Blog_Metni"],0,180);?>........</p>

     <a href="davam.php?id=<?php echo $m['Blog_id'];?>">Davamini Oxu..</a>

     </div>

    </div>
  	<?	
  	}
  }
}


$blogdata = new BlogData();
$blogdata->BlogShow();


  
