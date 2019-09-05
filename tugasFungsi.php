<?php
 function luas_segitiga($alas,$tinggi,$luas){
 	echo "Alas Segitiga Adalah : $alas <br>";
 	echo "Tinggi Segitiga Adalah : $tinggi <br>";
 	echo "Luas Segitiga Adalah : $luas <br>";
 }

 $a = 100;
 $b = 9;
 $c = $a*$b/2;
 echo "<b>Menghitung Luas Segitiga : <br></b>";
 luas_segitiga($a,$b,$c);
 echo "<hr>";

 //Lingkaran
 function lingkiran($jari,$keliling,$luas){
 	echo "Jari jari Lingkaran Adalah : $jari <br>";
 	echo "Luas Lingkaran Adalah : $luas <br>";
 	echo "Keliling Lingkaran Adalah : $keliling <br>";
 }
 
$q = 10;
$w = 10/2;
$e = 3.14*($w*$w);
$r = 2*(3.14*$w);
echo "<b>Menghitung Lingkaran : <br></b>";
lingkiran($w,$r,$e);
echo "<hr>";

?>





SO AM I