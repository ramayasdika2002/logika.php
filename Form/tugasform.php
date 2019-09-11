<!DOCTYPE html>
<html>
<head>
	<title>Tugas Form</title>
</head>
<body>
	<FORM ACTION="prosesTugas.php" METHOD="POST" NAME="input">
		<center><h2>Tugas</h2></center>
		<table>
			<tr>
				<td>Nama : </td>
				<td><input type="text" name="nama" required=""><br></td>
			</tr>
			<tr>
				<td>Nis</td>
				<td><input type="number" name="nis" required=""><br></td>
			</tr>
			<tr>
				<td>Alamat : </td>
				<td><textarea name="alamat" cols="50" rows="5"></textarea><br></td>
			</tr>
			<tr>
				<td>Jenis Kelamin : </td>
				<td>
					<input type="radio" name="kelamin" checked>Laki Laki
				    <input type="radio" name="kelamin" checked>Perempuan
				</td>
			</tr>
			<tr>
				<td>Agama : </td>
				<td>
					<select name="agama">
						<option value="Islam">Islam</option>
				        <option value="Khatolik">Khatolik</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Asal Sekolah : </td>
				<td><input type="text" name="asal" required=""><br></td>
			</tr>
			<tr>
				<td>Nama Orang Tua /Wali</td>
				<td><input type="text" name="namaa" required=""><br></td>
			</tr>
			<tr>
				<td>Mata Pelajaran</td>
				<td>
					 <input type="checkbox" name="mapel1" checked>Matematika
					 <input type="checkbox" name="mapel2" checked>Ilmu Pengatahuan Alam
					 <input type="checkbox" name="mapel3" checked>Ilmu Pengatahuan Sosial
					 <input type="checkbox" name="mapel4" checked>Pendidikan Agama Islam
					 <input type="checkbox" name="mapel5" checked>Bahasa Indonesia
				</td>
			</tr>
			<tr>
				<td>Total Nilai Ijasah SMK</td>
				<td><input type="text" name="ijasah" required=""><br></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="Email" name="email" required=""><br></td>
			</tr>
		</table>
		<input type="submit" name="Pilih" value="Input Data">
	</FORM>
</body>
</html>

<!-- Nama   : <input type="text" name="nama" required=""><br> aoi behind
		Nis    : <input type="number" name="nis" required=""><br>
		Alamat : <textarea name="alamat" cols="50" rows="5"></textarea><br>
		Jenis kelamin : <input type="radio" name="laki" checked>Laki Laki
		                <input type="radio" name="perempuan" checked>Perempuan
		Agama <select name="agama">
			  <option value="Islam">Islam</option>
		      <option value="Khatolik">Khatolik</option>
		</select>
		Asal Sekolah   : <input type="text" name="asal" required=""><br>
		Nama Orang Tua/Wali  : <input type="text" name="namaa" required=""><br>
		Mata Pelajaran yang disukai : <input type="checkbox" name="mtk">Matematika<input type="checkbox" name="mtk">IPS
		                              <input type="checkbox" name="ipa">Ilmu Pengatahuan<input type="checkbox" name="mtk">B.indonesia -->
