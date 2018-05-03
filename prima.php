<!DOCTYPE html>
<html>
<head>
	<title>Bilangan Prima</title>
</head>
<body>
	<?php 
		echo "Bilangan Prima : ";
		for ($i=2; $i <=50 ; $i++) { 
			$k = 0;

			for ($j=1; $j <= $i; $j++) { 
				if ($i % $j == 0) {
					$k++;
				}
			}
			if ($k == 2) {
				echo $i." ";
			}
		}
	?>
</body>
</html>