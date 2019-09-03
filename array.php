<?php
 $a = array('ahmad',19,true,3.19);
 //menampilkan array satu satu
 echo $a[0] . "<br>";
 echo $a[3] . "<br>";

 echo "<br>";
 echo "Array Menggunakan Looping For <br>";
 for ($i=0; $i < count($a) ; $i++) { 
 	echo "Array - " .  $a[$i] . "<br>";
 }

 echo "<br>";
 foreach ($a as $data) {
 	echo "Array - " . $data . "<br>";
 }
?>