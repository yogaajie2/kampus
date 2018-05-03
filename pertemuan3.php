<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 3</title>
</head>
<body>
	<?php 
		if (isset($_POST['hitung'])) {
			$angka1 = $_REQUEST['angka1'];
			$angka2 = $_REQUEST['angka2'];
		} else {
			$angka1 = 0;
			$angka2 = 0;
		}
	?>

	<form action="pertemuan3.php" method="POST">
		<input type="text" name="angka1" value="<?php $angka1; ?>">
		<select name="operasi">
			<option value="+">+</option>
			<option value="*">*</option>
			<option value="-">-</option>
			<option value="/">/</option>
		</select>
		<input type="text" name="angka2" value="<?php $angka2; ?>">
		<input type="submit" name="hitung" value="hitung">
	</form>

	<?php	 
		if (isset($_POST['hitung'])) {
			$angka1 = $_REQUEST['angka1'];
			$angka2 = $_REQUEST['angka1'];
			$operasi = $_REQUEST['operasi'];

			if ($operasi=='+') {
				$hasil=$angka1+$angka2;
				echo "<h1>".$hasil."</h1>";
			} elseif ($operasi=='-') {
				$hasil=$angka1-$angka2;
				echo "<h1>".$hasil."</h1>";
			} elseif ($operasi=='*') {
				$hasil=$angka1*$angka2;
				echo "<h1>".$hasil."</h1>";
			} else {
				if ($angka2==0) {
					echo "Bilangan 2 tidak boleh kosong (0)";
				} else {
					$hasil=$angka1/$angka2;
					echo "<h1>".$hasil."</h1>";
				}
			}
		}
	?>
</body>
</html>