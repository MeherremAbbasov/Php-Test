<?php
include "Connection.php";

class Davam extends Connection
{   public $id;

	public function __construct()
	{
		$this->id = $_GET["id"];
	}

	public function idShow()
	{
		parent::__construct();

		$idcon = $this->DB->prepare("SELECT *FROM Bloglar WHERE Blog_id=?");
		$idcon->execute([$this->id]);
		$x = $idcon->fetchAll(PDO::FETCH_ASSOC);

		foreach ($x as $n) {
			echo $n["Blog_Metni"];
		}
	}
}

$davam = new Davam();
$davam->idShow();