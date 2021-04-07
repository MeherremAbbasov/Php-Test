<?php 
if(!isset($_SESSION)){ 
    session_start(); 
}
include "bloginsertdatabase.php";

$id = $_GET["id"];

$n = $blogdb->prepare("SELECT *FROM Blog_data WHERE blog_id=?");

$n->execute(array($id));

$x = $n->fetchAll(PDO::FETCH_ASSOC);

foreach ($x as $e) {
  echo $e["blog_aciqlama"];
}
