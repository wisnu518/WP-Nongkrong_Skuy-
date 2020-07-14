<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama_temp_nongkrong = $_POST['nama_temp_nongkrong'];
$alamat = $_POST['alamat'];
$jam_operasional = $_POST['jam_operasional'];

mysqli_query($link,"update tempat_nongkrong set nama_temp_nongkrong='$nama_temp_nongkrong', alamat='$alamat', jam_operasional='$jam_operasional' where id='$id'");

header("location:index.php");

?>