<?php
 $nim = "0411500400";
 $nama = 'Rama';
 $umur = 23;
 $nilai = 82.25;
 $status = TRUE;

 echo "Nim : " . $nim. "<br>";
 echo "Nama : $nama<br>";
 print "Umur : " . $umur; print"<br>";
 printf("Nilai : %.3f<br>", $nilai);
 if ($status) 
 	echo "Status : Aktif";
 else
 	echo "Status : Tidak Aktif";
?>