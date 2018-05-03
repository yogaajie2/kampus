<!DOCTYPE html>
<html>
<head>
	<title>hasil</title>
</head>
<body>
	<?php
		include 'function.php';

		//$nama=$_REQUEST['nama'];

		//cetaknama($nama);

		$angka1=$_REQUEST['angka1'];
		$angka2=$_REQUEST['angka2'];
		$operasi=$_REQUEST['operasi'];

		hitung($angka1, $angka2, $operasi);
	?>
</body>
</html>