<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MYSQL</title>
</head>
<body>

	<h2>DATA TEMPAT NONGKRONG</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA TEMPAT NONGKRONG</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($link, "select * from tempat_nongkrong where id='$id'");
	while ($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>
					<td>Nama Tempat Nongkrong</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama_temp_nongkrong" value="<?php echo $d['nama_temp_nongkrong']; ?>">
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"</td>
					
				</tr>
				<tr>
					<td>Jam Operasional</td>
					<td><input type="text" name="jam_operasional" value="<?php echo $d['jam_operasional']; ?>"</td>
					
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="SIMPAN"></td>
				</tr>
			</table>
		</form>
		<?php
	}
	?>

</body>
</html>