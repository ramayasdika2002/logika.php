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
  
  echo "Bintang<br>";
  if (isset($_POST['Input'])) {
  	$bintang = $_POST['bintang'];

  	for ($a=1; $a <=$bintang ; $a++) {
  		echo "*";
  	}
  	echo "<br>";
     	echo "Jumlah Bintang = $bintang";
}

echo "<hr>";

 echo "Bintang Miring<br>";
 if (isset($_POST['Input'])) {
 	$bintang = $_POST['bintang'];

 	for ($a=1; $a <=$bintang ; $a++) { 
 		for ($b=1; $b < $a; $b++) {
 			echo "*";
 		}
 		echo "<br>";
 	}
 	echo "<br>";
 	echo "Jumlah Bintang = $bintang";
 }

 echo "<hr>";

 echo "Bintang piramid<br>";
 if (isset($_POST['Input'])) {
 	$bintang = $_POST['bintang'];

 	for ($a=0; $a <=$bintang ; $a++) { 
 		for ($b=1; $b <= $bintang-$a; $b++) {
 			echo "&nbsp;&nbsp;";
 		}
 		for ($c=1; $c <= $a; $c++) { 
 			echo "*&nbsp;&nbsp";
 		}
 		echo "<br>";
 	}
 	echo "<br>";
 	echo "Jumlah Bintang = $bintang";
 }

 echo "<hr>";
 
 echo "Bintang Terbalik<br>";
 
 if (isset($_POST['Input'])) {
 	$bintang = $_POST['bintang'];

 	for ($d=0; $d <=$bintang ; $d++) { 
 		for ($e=1; $e <= $d; $e++) {
 			echo "&nbsp;&nbsp;";
 		}
 		for ($f=1; $f <= $bintang-$d; $f++) { 
 			echo "*&nbsp;&nbsp";
 		}
 		echo "<br>";
 	}
 	echo "<br>";
 	echo "Jumlah Bintang = $bintang";
 }

 echo "<hr>";

echo "Bintang Belah Ketupat<br>";
if (isset($_POST['Input'])) {
 	$bintang = $_POST['bintang'];

 	for ($a=0; $a <=$bintang ; $a++) { 
 		for ($b=1; $b <= $bintang-$a; $b++) {
 			echo "&nbsp;&nbsp;";
 		}
 		for ($c=1; $c <= $a; $c++) { 
 			echo "*&nbsp;&nbsp";
 		}
 		echo "<br>";
 	}
 	for ($d=0; $d <=$bintang ; $d++) { 
 		for ($e=1; $e <= $d; $e++) {
 			echo "&nbsp;&nbsp;";
 		}
 		for ($f=1; $f <= $bintang-$d; $f++) { 
 			echo "*&nbsp;&nbsp";
 		}
 		echo "<br>";
 	}
 	echo "<br>";
 	echo "Jumlah Bintang = $bintang";
 }
?>
