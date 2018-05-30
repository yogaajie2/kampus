<?php
	include 'koneksi.php';

	$id=$_REQUEST['id'];

	$sql = "DELETE FROM motogp WHERE id = '$id'";

	$result = mysqli_query ($koneksi, $sql);
	header("location:../home.php");
?>