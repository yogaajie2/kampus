<?php
	//Parameter ('hostname', 'username', 'password', 'namadb') 
	$koneksi = mysqli_connect('localhost', 'root', '', 'pbw');

	//Pilih database
	mysqli_select_db($koneksi, 'pbw');

	//Error checking
	if (!$koneksi) {
		echo "Gagal koneksi";
	}
?>