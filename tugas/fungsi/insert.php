<?php
	include 'koneksi.php';

	$nama = $_REQUEST['nama_buku'];
	$penerbit = $_REQUEST['penerbit'];
	$tahun = $_REQUEST['tahun'];
	$penulis = $_REQUEST['penulis'];

	$sql = "INSERT INTO `buku` (`nama_buku`,`penerbit`,`tahun`,`penulis`) VALUES ('$nama','$penerbit','$tahun','$penulis')";

	$result = mysqli_query($koneksi, $sql);

	header("location:../175-crud.php");
?>