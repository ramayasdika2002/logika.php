<?php
 if (isset($_POST['Pilih'])) {
 	$nama = $_POST['nama'];
 	$nis = $_POST['nis'];
 	$alamat = $_POST['alamat'];
 	$kelamin = $_POST['kelamin'];
 	$agama = $_POST['agama'];
 	$asal = $_POST['asal'];
 	$namaa = $_POST['namaa'];
 	$mapel = $_POST['mapel'];
 	$nama = $_POST['nama'];
 	$ijasah = $_POST['ijasah'];
 	$email = $_POST['email'];

 	echo "<pre>";
 	echo "Nama                          :$nama<br>";
 	echo "Nis                           :$nis<br>";
 	echo "Alamat                        :$alamat<br>";
 	echo "Jenis kelamin                 :$kelamin<br>";
 	echo "Agama                         :$agama<br>";
 	echo "Asal Sekolah                  :$asal<br>";
 	echo "Nama OrangTua/Wali            :$namaa<br>";
 	echo "Mata Pelajaran Yang Disukai ";
 	if (isset($_POST['mapel1'])) {
 		echo ", " . $_POST['mapel1'];
 	}if (isset($_POST['mapel2'])) {
 		echo ", " . $_POST['mapel2'];
 	}if (isset($_POST['mapel3'])) {
 		echo ", " . $_POST['mapel3'];
 	}if (isset($_POST['mapel4'])) {
 		echo ", " . $_POST['mapel4'];
 	}if (isset($_POST['mapel5'])) {
 		echo ", " . $_POST['mapel5']."<br>";
 	}

 	echo "Email                              :$email<br>";
 	if ($nilai>23) {
 		echo "Status : Lulus<br>";
 	}else{
 		echo "Status : Tidak Lulus<br>";
 	}

 	echo "</pre>";
 }
?>