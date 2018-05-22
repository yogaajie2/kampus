<?php
	include 'koneksi.php';

	$nama = $_REQUEST['nama'];
	$negara = $_REQUEST['negara'];
	$kode_negara = $_REQUEST['kode-negara'];
	$nomor = $_REQUEST['nomor'];
	$tim = $_REQUEST['tim'];
	$motor = $_REQUEST['motor'];
	$tempat_lahir = $_REQUEST['tempat-lahir'];
	$tanggal_lahir = $_REQUEST['tanggal-lahir'];
	$berat_badan = $_REQUEST['berat-badan'];
	$tinggi = $_REQUEST['tinggi'];
	$kemenangan_seri = $_REQUEST['kemenangan-seri'];
	$kemenangan_kejuaraan = $_REQUEST['kemenangan-kejuaraan'];

	//image uploader
	$foto_dir = "img/rider/";
	$foto = $foto_dir . basename($_FILES["foto"]["name"]);

	$foto_motor_dir = "img/motor/";
	$foto_motor = $foto_motor_dir . basename($_FILES["foto-motor"]["name"]);

	$sql = "INSERT INTO `motogp` (`negara`,`kode_negara`,`nomor`,`foto`,`nama`,`foto_motor`,`tim`,`motor`,`tempat_lahir`,`tanggal_lahir`,`berat_badan`,`tinggi_badan`,`kemenangan_seri`,`kemenangan_kejuaraan`) VALUES ('$negara','$kode_negara','$nomor','$foto','$nama','$foto_motor','$tim','$motor','$tempat_lahir','$tanggal_lahir','$berat_badan','$tinggi','$kemenangan_seri','$kemenangan_kejuaraan')";

	$result = mysqli_query($koneksi, $sql);

	header("location:../index.php");
?>