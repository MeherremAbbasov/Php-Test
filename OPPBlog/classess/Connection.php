<?php
session_start();
if (isset($_SESSION)OR(isset($_SESSION["istifadeci"]))) {
    
}else{
    header("Location:http://localhost/OPPBlog/qeydiyyatol.php");
}
    

    

 class Connection {

    protected $host = "localhost";

    protected $dbname = "Veb_Sayt";

    protected $user = "root";

    protected $pass = "";

    protected $DB;

    function __construct() {

        try {

            $this->DB = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
        }
        catch (PDOException $m) {

            echo "qosulma zamani xeta bas verdi".$m->getMessage();
        }


       
    }

  }

 $con = new Connection();

