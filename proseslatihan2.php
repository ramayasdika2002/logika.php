<?php
 if (isset($_POST['input'])) {  
 	$nama = $_POST['nama'];
 	$mapel1 = $_POST['mapel1'];
 	$mapel2 = $_POST['mapel2'];
 	$rata = ($mapel1+$mapel2)/2;  
 	if ($rata>75) {
 		echo "Nama : <b>$nama</b><br>"; 
 	echo "Mapel 1 : <b>$mapel1</b><br>"; 
 	echo "Mapel 2 : <b>$mapel2</b><br>";
 	echo "Rata : <b>$rata</b><br>"; 
 	echo "Status : <b>LULUS</b><br>";
 	}elseif ($rata < 75) {
 		echo "Nama : <b>$nama</b><br>"; 
 	echo "Mapel 1 : <b>$mapel1</b><br>"; 
 	echo "Mapel 2 : <b>$mapel2</b><br>";
 	echo "Rata : <b>$rata</b><br>"; 
 	echo "Status : <b>Tidak Lulus</b><br>";
 	}
 }
?>