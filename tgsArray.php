<?php
 $arrNama = array("Ajeng" => 90, "Mamat" => 70, "Ucup" => 87, "Aang" => 95, "Syahrul" => 75);

foreach ($arrNama as $nama => $nilai) {
	echo "<pre>";
if ($nilai > 85 ) {
 	echo "nama : $nama , nilai : $nilai Grade A <br>";
 }elseif ($nilai > 75) {
 	echo "nama : $nama , nilai : $nilai Grade B <br>";
 }elseif ($nilai > 65) {
 	echo "nama : $nama , nilai : $nilai Grade C <br>";
 }
 echo "<hr>";
}

?>