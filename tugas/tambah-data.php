<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Flags CSS -->
    <link rel="stylesheet" type="text/css" href="flags/css/flag-icon.css">
    <!-- Google Fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Sunflower:300" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Main CSS -->
    <style type="text/css">
      h1, h5, p, a {
        font-family: 'Sunflower', sans-serif;
      }

      a {
        color: #000;
        text-decoration: none;
      }

      a:hover {
        color: #808080;
        text-decoration: none;
      }
    </style>

	<title>Tambah Data Pembalap</title>
</head>
<body>
	<div class="container">
		<div class="row my-5">
			<div class="col-4"></div>
			<div class="col-4">
				<form action="fungsi/insert.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nama">Nama Pembalap</label>
						<input type="text" class="form-control" name="nama" id="nama">
					</div>
					<div class="form-group">
						<label for="negara">Negara</label>
						<input type="text" class="form-control" name="negara" id="negara">
					</div>
					<div class="form-group">
						<label for="kode-negara">Kode Negara</label>
						<input type="text" class="form-control" name="kode-negara" id="kode-negara" placeholder="Gunakan kode ISO Alpha-2, huruf kecil">
					</div>
					<div class="form-group">
						<label for="nomor">Nomor Pembalap</label>
						<input type="text" class="form-control" name="nomor" id="nomor">
					</div>
					<div class="form-group">
						<label for="tim">Tim</label>
						<input type="text" class="form-control" name="tim" id="tim">
					</div>
					<div class="form-group">
						<label for="motor">Motor Pembalap</label>
						<input type="text" class="form-control" name="motor" id="motor">
					</div>
					<div class="form-group">
						<label for="tempat-lahir">Tempat Lahir</label>
						<input type="text" class="form-control" name="tempat-lahir" id="tempat-lahir">
					</div>
					<div class="form-group">
						<label for="tanggal-lahir">Tanggal Lahir</label>
						<input type="date" class="form-control" name="tanggal-lahir" id="tanggal-lahir">
					</div>
					<div class="form-group">
						<label for="berat-badan">Berat Badan</label>
						<input type="text" class="form-control" name="berat-badan" id="berat-badan" placeholder="Masukkan nominal saja">
					</div>
					<div class="form-group">
						<label for="tinggi">Tinggi Badan</label>
						<input type="text" class="form-control" name="tinggi" id="tinggi" placeholder="Masukkan nominal saja">
					</div>
					<div class="form-group">
						<label for="kemenangan-seri">Kemenangan Seri</label>
						<input type="text" class="form-control" name="kemenangan-seri" id="kemenangan-seri">
					</div>
					<div class="form-group">
						<label for="kemenangan-kejuaraan">Kemenangan Kejuaraan</label>
						<input type="text" class="form-control" name="kemenangan-kejuaraan" id="kemenangan-kejuaraan">
					</div>
					<div class="form-group">
						<label for="foto">Foto</label>
						<input type="file" class="form-control" name="foto" id="foto">
					</div>
					<div class="form-group">
						<label for="foto-motor">Foto Motor</label>
						<input type="file" class="form-control" name="foto-motor" id="foto-motor">
					</div>
					<button type="submit" class="btn btn-outline-dark">Tambah</button>
				</form>
			</div>
			<div class="col-4"></div>
		</div>
	</div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>