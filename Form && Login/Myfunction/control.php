<?php
function Control($text){
    $text=trim($text);
    $text=htmlspecialchars($text);
    $text=stripslashes($text);
    return $text;

}






?>