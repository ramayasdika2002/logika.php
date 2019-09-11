<!DOCTYPE html>
<html>
<head>
	<title>Bintang</title>
</head>
<body>
	<form action="" method="post">

		Masukkan Bintang : <input type="number" name="bintang" required><br>
		<td><input type="submit" name="Input" value="masukan" required></td>

	</form>
</body>
</html>

<?php
  if (isset($_POST['Input'])) {
  	$bintang = $_POST['bintang'];

  	for ($a=1; $a <=$bintang ; $a++) {
  		echo "*";
  	}
  	echo "<br>";
     	echo "Jumlah Bintang = $bintang";
}
?>
  	 