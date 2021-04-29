<?php
include "Connection.php";

class Blog extends Connection
{
	public $blogBasliqi;

	public $blogMetni;

	public function __construct()
	{
		$this->blogBasliqi = $_POST["blogbasliqi"];
		$this->blogMetni = $_POST["blogmetni"];
	}


	public function Validation()
	{
		if (empty(trim($this->blogBasliqi))) {
			$_SESSION["blogbasliqvalidation"] = "Blog Basliqi Yazmagi Unutmayin";
			header("Location:http://localhost/OPPBlog/bloghtml.php");
			die();
		}

		if (empty(trim($this->blogMetni))) {
			$_SESSION["blogmetinvalidation"] = "Blog Metni Yazmagi Unutmayin";
			header("Location:http://localhost/OPPBlog/bloghtml.php");
			die();
		}
	}



	public function Bloginsert()
	{
		parent::__construct();

		$bloginsert = $this->DB->prepare("INSERT INTO Bloglar Set Blog_Basliqi=?,Blog_Metni=?");
		$bloginsert->execute([$this->blogBasliqi,$this->blogMetni]);

		if ($bloginsert) {
			header("Location:BlogData.php");
		}
	}
}

$blog = new Blog();
$blog->Validation();
$blog->Bloginsert();

