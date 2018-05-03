<?php
	include 'koneksi.php';

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	$sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";

	$result = mysqli_query($koneksi, $sql);

	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		if ($username == $row['username'] && $password == $row['password']) {
			echo "Login sukses.";
			$login=1;
		} else {
			$login=0;
		}
	}

	if ($login == 0) {
		header("Location: ../3mei.php");
	}
?>