<?php
	include 'koneksi.php';

	$id = $_REQUEST['id'];
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
	/*$foto_dir = "img/rider/";
	$foto = $foto_dir . basename($_FILES["foto"]["name"]);

	$foto_motor_dir = "img/motor/";
	$foto_motor = $foto_motor_dir . basename($_FILES["foto-motor"]["name"]);
	*/

	$sql = "UPDATE `motogp` SET `negara`='$negara',`kode_negara`='$kode_negara',`nomor`='$nomor',`nama`='$nama',`tim`='$tim',`motor`='$motor',`tempat_lahir`='$tempat_lahir',`tanggal_lahir`='$tanggal_lahir',`berat_badan`='$berat_badan',`tinggi_badan`='$tinggi_badan',`kemenangan_seri`='$kemenangan_seri',`kemenangan_kejuaraan`='$kemenangan_kejuaraan' WHERE `id`='$id'";

	$result = mysqli_query($koneksi, $sql);

	header("location:../index.php");
?>