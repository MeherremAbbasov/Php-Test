<?php
$a = @$_POST["reqema"];
$b = @$_POST["reqemb"];
$Emelliyyat = @$_POST["Emelliyyat"];
if (empty($_POST["reqema"]) OR empty($_POST["reqemb"]) ) {
	echo "<p style=color:red>Xanalari doldurun</p>";
}
if (!is_numeric($a) OR !is_numeric($b) ) {
	echo "<p style=color:red>Sadece Reqem Daxil Ede Bilersiz</p>";
}
if ($Emelliyyat == 1) {
	$cavab = $a+$b;
}
if ($Emelliyyat == 2) {
	$cavab = $a-$b;
}
if ($Emelliyyat == 3) {
	$cavab = $a*$b;
}
if ($Emelliyyat == 4) {
	$cavab = $a/$b;
}

echo "<p style=color:green;fontsize:1000px;>CAVAB $cavab </p>";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<h1 style="color:blue">Hesabla</h1>
		<input type="text" name="reqema" placeholder="Reqem Daxil Edin"><br>
		<input type="text" name="reqemb" placeholder="Reqem Daxil Edin"><br>
		<select name="Emelliyyat">
			<option value="1">Toplama</option>
			<option value="2">Cixma</option>
			<option value="3">Vurma</option>
			<option value="4">Bolme</option>
		</select><br><br>
		<button>Hesabla</button>
	</form>
</body>
</html>