<html>
<head>
	<title>Pengolahan form</title>
</head>
<body>
	<FORM ACTION="" METHOD="POST" NAME="input">
		Nama  : <input type="text" name="nama"><br>
		Kelas : <input type="text" name="kelas"><br>
		Alamat : <input type="text" name="alamat"><br>
		Hobi : <input type="text" name="hobi"><br>
	    <input type="submit" name="input" value="input">
	</FORM>

</body>
</html>

<?php
 if (isset($_POST['input'])) {  
 	$nama = $_POST['nama'];
 	$kelas = $_POST['kelas'];
 	$alamat = $_POST['alamat'];
 	$hobi = $_POST['hobi'];  
 	echo "Nama : <b>$nama</b><br>"; 
 	echo "Kelas : <b>$kelas</b><br>"; 
 	echo "Alamat : <b>$alamat</b><br>";
 	echo "Hobi : <b>$hobi</b><br>"; 
 }
?>
