<?php


include "Connection.php";


class User extends Connection
{
    public $name;

    public $surname;

    public $email;

    public $password;

    public $passwordT;

    
    public function __construct()
    {
        $this->name = $_POST["username"];
        $this->surname = $_POST["surname"];
        $this->email = $_POST["email"];
        $this->password = $_POST["password"];
        $this->passwordT = $_POST["passwordT"];
    }

    public function yoxla()
    {
        if (empty($this->name)) {
            $_SESSION["name"] = "Adin yaz";
            header("Location:http://localhost/OPPBlog/qeydiyyatol.php");
            die();
        }


        if (!preg_match("/^[a-zA-Z-' ]*$/",$this->name)) {
            $_SESSION["name"] = "Adinizi Duzgun Yazin";
            header("Location:http://localhost/OPPBlog/qeydiyyatol.php");
            die();
        }


        if (empty($this->surname)) {
            $_SESSION["surname"] = "Soyadin Yaz";
            header("Location:http://localhost/OPPBlog/qeydiyyatol.php");
            die();
        }


        if (!preg_match("/^[a-zA-Z-' ]*$/",$this->surname)) {
            $_SESSION["surname"] = "Soyadinizi Duzgun Yazin";
            header("Location:http://localhost/OPPBlog/qeydiyyatol.php");
            die();
        }


        if (empty($this->email)) {
            $_SESSION["email"] = "Emaili Yaz";
            header("Location:http://localhost/OPPBlog/qeydiyyatol.php");
            die();
        }


        if (!filter_var($this->email,FILTER_VALIDATE_EMAIL)) {
            $_SESSION["email"] = "Emaili Duzgun Yazin";
            header("Location:http://localhost/OPPBlog/qeydiyyatol.php");
            die();

        }


        if (empty($this->password)) {
            $_SESSION["password"] = "Parolunuzu Yazin";
            header("Location:http://localhost/OPPBlog/qeydiyyatol.php");
            die();
        }


        if (strlen($this->password)<8) {
            $_SESSION["password"] = "Parolunuz Cox Qisadi";
            header("Location:http://localhost/OPPBlog/qeydiyyatol.php");
            die();


        }


        if (empty($this->passwordT)) {
            $_SESSION["passwordt"] = "Parolunuzu Yazin";
            header("Location:http://localhost/OPPBlog/qeydiyyatol.php");
            die();

        }


        if ($this->password != $this->passwordT) {
            $_SESSION["password"] = "Parolu Duzgun Tesdiqleyin";
            header("Location:http://localhost/OPPBlog/qeydiyyatol.php");
            die();

        }
    }


    public function Insert()

    {   parent::__construct();


        $sorgu=$this->DB->prepare("INSERT INTO Register SET User_name=?,User_Surname=?,User_Password=?,User_Email=?");
        $sorgu->execute(array($this->name,$this->surname,$this->password,$this->email));
        header("Location:http://localhost/OPPBlog/loginhtml.php");
 }

}


$user = new User();

$user->yoxla();

$user->Insert(); 




