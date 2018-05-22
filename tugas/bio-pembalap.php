<!doctype html>
<html lang="en">
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

    <?php 
      include 'fungsi/koneksi.php';

      $sql = "SELECT * FROM motogp WHERE id = $_GET[id]";
      $result = mysqli_query($koneksi, $sql);
      if (!$result) {
        echo "ERROR";
      }

      $i = 0;
    ?>

    <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>

    <title><?php echo $row['nama']; ?> | Biodata Pembalap</title>
  </head>
  <body>
    <div class="container">
      <div class="row mb-5">
        <div class="col-4"></div>
        <div class="col-4">
          <div class="row sticky-top py-3" style="background-color: #0d0d0d;">
            <div class="col text-center">
              <h1 style="color: #fff;"><?php echo $row['nama']; ?></h1>
            </div>
            <div class="container">
              <div class="row my-3">
                <div class="col d-flex justify-content-between">
                  <a href="fungsi/print.php?id=<?php echo $row['id']; ?>">
                    <button type="button" class="btn btn-light">Print Data</button>
                  </a>
                  <button type="button" class="btn btn-light">Ubah Data</button>
                  <a href="fungsi/delete.php?id=<?php echo $row['id']; ?>">
                    <button type="button" class="btn btn-light">Hapus Data</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row border">
            <div class="col">
              <div class="row">
                <div class="col">
                  <img class="img-fluid" style="width: 100%; height: auto;" src="<?php echo $row['foto_motor']; ?>">
                </div>
              </div>
              <div class="row my-3">
                <div class="col d-flex justify-content-between">
                  <h1><span class="flag-icon flag-icon-<?php echo $row['kode_negara']; ?>"></span></h1>
                  <h1 class="font-weight-bold"><?php echo $row['nomor']; ?></h1>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <h5 class="font-weight-bold"><?php echo $row['nama']; ?></h5>
                  <p class="font-weight-bold"><?php echo $row['tim']; ?></p>
                  <p><?php echo $row['motor']; ?></p>
                  <p><?php echo $row['tempat_lahir']; ?></p>
                  <p><?php echo $row['tanggal_lahir']; ?></p>
                  <p>Berat badan: <?php echo $row['berat_badan']; ?> kg</p>
                  <p>Tinggi: <?php echo $row['tinggi_badan']; ?> cm</p>
                  <br>
                  <h5 class="font-weight-bold">Kemenangan Seri: <?php echo $row['kemenangan_seri']; ?></h5>
                  <h5 class="font-weight-bold">Kemenangan Kejuaraan: <?php echo $row['kemenangan_kejuaraan']; ?></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4"></div>
    </div>

    <?php } ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>