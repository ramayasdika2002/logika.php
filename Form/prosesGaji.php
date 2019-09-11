<?php
 if (isset($_POST['pilih'])) {
 	$nama = $_POST['nama'];
 	$nip = $_POST['nip'];
 	$kelamin = $_POST['kelamin'];
 	$alamat = $_POST['alamat'];
 	$status = $_POST['status'];
 	$jabatan = $_POST['jabatan'];
  	$golongan = $_POST['gol'];
  	

 	echo "<pre>";
 	echo "Nama          : $nama<br>";
 	echo "NIP           : $nip<br>";
 	echo "Jenis kelamin : $kelamin<br>";
 	echo "Alamat        : $alamat<br>";
 	echo "status        : $status<br>";
 	echo "Jabatan       : $jabatan<br>";
 	

 	echo "Potongan      : ";
 	if (isset($_POST['bpjs'])) {
 		echo "" . $_POST['bpjs'];
 	}if (isset($_POST['koperasi'])) {
 		echo ", " . $_POST['koperasi'];
 	}if (isset($_POST['jamsostek'])) {
 		echo ", " . $_POST['jamsostek'];
 	}
 	echo "<br>golongan      : $golongan<br><br>";

 	echo "<b>Keterangan</b><br>";

 	if ($golongan == "A1") {
 		$z=250000;
 		echo "golongan A1 = Rp.250.00";
 	}elseif ($golongan == "A2") {
 		$z=200000;
 		echo "golongan A2 = Rp.200.000";
 	}elseif ($golongan == "A3") {
 		$z=150000;
 		echo "golongan A3 = Rp.150.000";
 	}
 	echo "<br>";

 	if ($status == "Menikah") {
 		$a=100000;
 		echo "Menikah :" ;
 	}elseif ($status == "Belum Menikah") {
 		$a=50000;
 		echo "Belum Menikah :" ;
 	}
 	echo "<br>";

 	if ($jabatan == "HRD") {
 		$x=5000000;
 		echo "HRD : Rp.5.000.000";
 	}elseif ($jabatan == "Manager") {
 		$x=4500000;
 		echo "Manager : Rp.4,500,000";
 	}elseif ($jabatan == "Staff") {
 		$x=3000000;
 		echo "Staff : Rp.3.000.000";
 	}elseif ($jabatan == "Karyawan") {
 		$x=2500000;
 		echo "Karyawan : Rp.2.500.000";
 	}
 	echo "<br>";

 	if ("BPJS") {
 		$v=250000;
 		$po=$v;
 		echo "BPJS : Rp.250.000";
 	}if ("Koperasi") {
 		$v1=150000;
 		$po=$v+$v1;
 		echo "Koperasi : Rp.150.000";
 	}if ("Jamsostek") {
 		$v2=150000;
 		$po=$v+$v1+$v2;
 		echo "Jamsostek : Rp.150.000";
 	}
 	echo "<br>";

 	$kotor=($z+$a+$x)-$po;
 	$pajak=($kotor*2.5/100);
 	$bersih=$kotor-$pajak;
 	echo "Gaji Kotor =  $kotor<br>";
 	echo "Pajak : $pajak<br>";
 	echo "Gaji Bersih : ".$bersih;
 }
?>