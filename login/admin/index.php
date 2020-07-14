<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
</head>
<body>
	<h2>Halaman Admin</h2>
	
	<br/>
 
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
 
	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>!</h4>
 
	<br/>
	<br/>
	<h2>DATA TEMPAT NONGKRONG</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH TEMPAT NONGKRONG</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama Tempat Nongkrong</th>
			<th>Alamat</th>
			<th>Jam Oprasi</th>
			<th>OPSI</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($link,"select*from tempat_nongkrong");
		while ($d = mysqli_fetch_array($data)) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_temp_nongkrong']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['jam_operasional']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php			
		}
		?>
	</table>
 
	<a href="logout.php">LOGOUT</a>
 
 
</body>
</html>