<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 4</title>
</head>
<body>
	<!--
	<form action="hasil.php" method="POST">
		<input type="text" name="nama">
		<input type="submit" name="submit" value="submit">
	</form>
	-->

	<form action="hasil.php" method="POST">
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
</body>
</html>