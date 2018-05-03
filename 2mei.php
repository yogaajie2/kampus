<?php
	echo "<h1>Daftar Maskapai<h1>";

	//Koneksi database
	$id_connect = mysqli_connect('localhost', 'root', '', '2mei');

	//Pilih database
	mysqli_select_db($id_connect, '2mei');

	//Kirim perintah SQL
	$result = mysqli_query( $id_connect, 'select * from maskapai');

	//Menampilkan hasil
	//tabel
	echo "<table border=1>";
	echo "<th><td>Kode</td><td>Nama Maskapai</td><td>Logo</td><td>Negara</td></th>";
	while ($id_record = mysqli_fetch_array($result)) {
		echo $id_record[0] . $id_record[1] . $id_record[2] . $id_record[3];
	}
	
	//Menutup koneksi
	mysqli_close($id_connect);
?>