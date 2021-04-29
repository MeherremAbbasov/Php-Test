<?php

include "Connection.php";

class Login extends Connection
{
	public $name;

	public $password;

	public function __construct()
	{
		$this->name = $_POST["username"];
		$this->password = $_POST["password"];
	}


	public function Control()
	{
		parent::__construct();
		$data = $this->DB->prepare("SELECT *FROM Register WHERE User_Name=? AND User_Password=?");
		$data->execute([$this->name,$this->password]);
		$control = $data->rowCount();
	
        if ($control==0) {
			$_SESSION["yalnis"] = "istifadeci Adi Ve Ya Parol Yalnisdir";
			header("Location: http://localhost/OPPBlog/loginhtml.php");
			die();

		}else{
			$_SESSION["istifadeci"] = $this->name;
			$_SESSION["parol"] = $this->password;
			header("Location:http://localhost/OPPBlog/index.php");

			
		}

		
	}


}


$login =  new Login();
$login->Control();
