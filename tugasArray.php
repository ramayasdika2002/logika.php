<?php
 $a = [
 	("Nama" => 'Ujang',"Kelas" => 'XI RPL 1',"Alamat" => 'TVRI');
    ("Nama" => 'Ahmad',"Kelas" => 'XI RPL 2',"Alamat" => 'TCI');
    ("Nama" => 'Ucok',"Kelas" => 'XI RPL 3',"Alamat" => 'TARATE');
 ];

 echo "<pre>"; 
 print_r ($a);
 echo "</pre>";

 $mode = current($arrNam);  
 echo $mode."<br>";
 $mode = prev($arrName);  
 echo $mode."<br>";
?>