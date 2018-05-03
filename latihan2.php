<?php 

$nama=$_REQUEST['nama'];
$nrp=$_REQUEST['nrp'];
$jurusan=$_REQUEST['jurusan'];
$tanggal=$_REQUEST['hari']."/".$_REQUEST['bulan']."/".$_REQUEST['tahun'];
$alamat=$_REQUEST['alamat'];

		echo "Nama : " .$nama. "<br>";
		echo "NRP : " .$nrp. "<br>";
		echo "Tanggal Lahir : " .$tanggal. "<br>";
		echo "Alamat : " .$alamat. "<br>";
		echo "Jurusan : " .$jurusan. "<br>";
		echo "Matkul : ";
	if (!empty($_REQUEST['cekbox'])) {
		foreach ($_REQUEST['cekbox'] as $selected) {
			echo $selected.",";
		}
	}
?>