<!DOCTYPE html>
<html>
<head>
	<title>DATA TEMPAT NONGKRONG</title>
</head>
<body>

	<h2>CRUD DATA TEMPAT NONGKRONG</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA TEMPAT NONGKRONG</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>
				<td>Nama tempat nongkrong</td>
				<td><input type="text" name="nama_temp_nongkrong"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>jam operasional</td>
				<td><input type="text" name="jam_operasional"></td>
			</tr>
			<tr>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>
</html>