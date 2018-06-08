<?php
	include 'koneksi.php';

	$id = $_REQUEST['id'];
	$nama = $_REQUEST['nama'];
	$negara = $_REQUEST['negara'];
	$kode_negara = $_REQUEST['kode-negara'];
	$nomor = $_REQUEST['nomor'];
	$tim = $_REQUEST['tim'];
	$motor = $_REQUEST['motor'];
	$tempat_lahir = $_REQUEST['tempat-lahir'];
	$tanggal_lahir = $_REQUEST['tanggal-lahir'];
	$berat_badan = $_REQUEST['berat-badan'];
	$tinggi = $_REQUEST['tinggi'];
	$kemenangan_seri = $_REQUEST['kemenangan-seri'];
	$kemenangan_kejuaraan = $_REQUEST['kemenangan-kejuaraan'];


	$motogp = "SELECT * FROM motogp WHERE id = '$id'";
    $hasil_motogp = mysqli_query($koneksi, $motogp);
    if (!$hasil_motogp) {
      echo "ERROR";
    }

    while ($row_motogp = mysqli_fetch_array($hasil_motogp, MYSQLI_ASSOC)) {
    	$foto_image = "../" . $row_motogp['foto'];

	    if ($_FILES["foto"]["name"] == "") {
			$foto_path = $row_motogp['foto'];
		}
		else {
			//delete previous image
			unlink($foto_image);
			//Upload image
			$foto_dir = "../img/rider/";
			$foto_file = $foto_dir . basename($_FILES["foto"]["name"]);
			$foto_path = "img/rider/" . basename($_FILES["foto"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($foto_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if (isset($_POST["submit"])) {
			    $check = getimagesize ($_FILES["foto"]["tmp_name"]);
			    if ($check !== false) {
			        echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists
			if (file_exists($foto_file)) {
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}

			// Allow certain file formats
			if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $foto_file)) {
			        echo "The file ". basename( $_FILES["foto"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}
		}

    	$foto_motor_image = "../" . $row_motogp['foto_motor'];

	    if ($_FILES["foto-motor"]["name"] == "") {
			$foto_motor_path = $row_motogp['foto_motor'];
		}
		else {
			//delete previous image
			unlink($foto_motor_image);
			//Upload image
			$foto_motor_dir = "../img/motor/";
			$foto_motor_file = $foto_motor_dir . basename($_FILES["foto-motor"]["name"]);
			$foto_motor_path = "img/motor/" . basename($_FILES["foto-motor"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($foto_motor_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if (isset($_POST["submit"])) {
			    $check = getimagesize ($_FILES["foto-motor"]["tmp_name"]);
			    if ($check !== false) {
			        echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists
			if (file_exists($foto_motor_file)) {
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}

			// Allow certain file formats
			if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["foto-motor"]["tmp_name"], $foto_motor_file)) {
			        echo "The file ". basename( $_FILES["foto-motor"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}
		}
	}

	$sql = "UPDATE `motogp` SET `negara`='$negara',`kode_negara`='$kode_negara',`nomor`='$nomor',`foto`='$foto_path',`nama`='$nama',`foto_motor`='$foto_motor_path',`tim`='$tim',`motor`='$motor',`tempat_lahir`='$tempat_lahir',`tanggal_lahir`='$tanggal_lahir',`berat_badan`='$berat_badan',`tinggi_badan`='$tinggi',`kemenangan_seri`='$kemenangan_seri',`kemenangan_kejuaraan`='$kemenangan_kejuaraan' WHERE `id`='$id'";

	$result = mysqli_query($koneksi, $sql);

	header("location:../home.php");
?>