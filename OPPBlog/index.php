<?php
echo "<form action='bloghtml.php' method='post'>";
echo "<button>Blog Yarat</button>";

echo "</form>";

echo "<a href='qeydiyyatol.php'>Qeydiyyat</a>"."<br><br>";

echo "<a href='loginhtml.php'>Giris Et</a>"."<br><br>";

echo "<a href='classess/BlogData.php'>Bloglar</a><br><br>";


?>
<?php
/*session_start();
class Cixis
{
	public function Exit()
	{
		session_destroy();

		header("Location:loginhtml.php");
	}
}

$cixis = new Cixis();
$cixis->Exit();*/