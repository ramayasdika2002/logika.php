<!DOCTYPE html>
<html>
<head>
	<title>Form Penggajian</title>
</head>
<body>
	<FORM ACTION="prosesGaji.php" METHOD="POST">
		<center><h2>GAJIAN</h2></center>
		<table>
			<tr>
				<td>Nama : </td>
				<td><input type="text" name="nama" required=""><br></td>
			</tr>
			<tr>
				<td>NIP : </td>
				<td><input type="number" name="nip" required=""><br></td>
			</tr>
			<tr>
				<td>Jenis Kelamin : </td>
				<td>
					<input type="radio" name="kelamin" value="Laki Laki" required>Laki Laki
					<input type="radio" name="kelamin" value="Perempuan" required>Perempuan
				</td>
			</tr>
			<tr>
				<td>Alamat : </td>
				<td><textarea name="alamat" cols="20" rows="2"></textarea></td>
			</tr>
			<tr>
				<td>Status : </td>
				<td>
					<select name="status">
						<option>PILIH</option>
						<option name="sudah" value="Menikah">Menikah</option>
						<option name="belum" value="Belum Menikah">Belum Menikah</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jabatan : </td>
				<td>
					<select name="jabatan">
						<option>PILIH</option>
						<option value="HRD">HRD</option>
						<option value="Manager">Manager</option>
						<option value="Staff">Staff</option>
						<option value="Karyawan">Karyawan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Potongan : </td>
				<td>
					<input type="checkbox" name="bpjs" value="BPJS">BPJS
					<input type="checkbox" name="koperasi" value="Koperasi">Koperasi
					<input type="checkbox" name="jamsostek" value="Jamsostek">Jamsostek
				</td>
			</tr>
			<tr>
				<td>Golongan : </td>
				<td>
					<select name="gol">
						<option>PILIH</option>
						<option value="A1">A1</option>
						<option value="A2">A2</option>
						<option value="A3">A3</option>
					</select>
				</td>
			</tr>
		</table>
		<input type="submit" name="pilih" value="Input">
	</FORM>
</body>
</html>