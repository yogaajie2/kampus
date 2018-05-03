<!DOCTYPE html>
<html>
<head>
	<title>function</title>
</head>
<body>
	<?php 
		function cetaknama($x) {
			echo "nama saya ".$x;
		}

		function hitung($x, $y, $z) {
			if ($z=='+') {
				$hasil=$x+$y;
				echo "<h1>".$hasil."</h1>";
			} elseif ($z=='-') {
				$hasil=$x-$y;
				echo "<h1>".$hasil."</h1>";
			} elseif ($z=='*') {
				$hasil=$x*$y;
				echo "<h1>".$hasil."</h1>";
			} else {
				if ($y==0) {
					echo "Bilangan 2 tidak boleh kosong (0)";
				} else {
					$hasil=$x/$y;
					echo "<h1>".$hasil."</h1>";
				}
			}
		}
	?>
</body>
</html>