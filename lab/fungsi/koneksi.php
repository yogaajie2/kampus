<?php
	//Parameter ('hostname', 'username', 'password', 'namadb') 
	$koneksi = mysqli_connect('localhost', 'root', '', '3mei');

	//Pilih database
	mysqli_select_db($koneksi, '3mei');

	//Error checking
	if (!$koneksi) {
		echo "Gagal koneksi";
	}
?>