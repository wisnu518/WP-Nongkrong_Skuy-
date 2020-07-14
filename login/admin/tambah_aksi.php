<?php

include 'koneksi.php';

$nama_temp_nongkrong =$_POST['nama_temp_nongkrong'];
$alamat =$_POST['alamat'];
$jam_operasional =$_POST['jam_operasional'];

mysqli_query($link, "insert into tempat_nongkrong value('','$nama_temp_nongkrong','$alamat','$jam_operasional')");

header("location:index.php");

?>