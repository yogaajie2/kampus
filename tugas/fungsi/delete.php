<?php
	include 'koneksi.php';

	$id=$_REQUEST['id'];

	$sql = "DELETE FROM buku WHERE id_buku = '$id'";

	$result = mysqli_query ($koneksi, $sql);
	header("location:../175-crud.php");
?>