<?php
 $array = array('penulis');
 $aso = [
 	[
 		'Judul' => 'Belajar PHP & MySQL untuk pemula',
 		'penulis' => 'Admin SMK',

 	],
 	[
 		'Judul' => 'Tutorial PHP dari nol hingga mahir',
 		'penulis' => 'Admin SMK',
 	],
 	[
 		'Judul' => 'Membuat Aplikasi Web dengan PHP',
 		'penulis' => 'SMK Assalam',
 	]
 ];

 foreach ($aso as $value) {
 	echo "<h1>" . $value["Judul"] . "</h1><br>";
 	echo "penulis : " . $value ["penulis"] . "<br>";
 	echo '<hr>';
 }
?>