<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Flags CSS -->
    <link rel="stylesheet" type="text/css" href="flags/css/flag-icon.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Daftar Pembalap MotoGP Musim 2018</title>
  </head>
  <body>

    <?php 
      include 'fungsi/koneksi.php';

      $sql = "SELECT * FROM motogp";
      $result = mysqli_query($koneksi, $sql);
      if (!$result) {
        echo "ERROR";
      }
    ?>

    <div class="container">
      <h1>Daftar Pembalap MotoGP Musim 2018</h1>

      <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>

      <div class="row">
        <div class="col-md-4 px-5">
          <img class="img-fluid" src="img/valentino-rossi.jpg" style="width: 100%; height: auto;">
          <div class="row">
            <div class="col d-flex justify-content-between">
              <h1><span class="flag-icon flag-icon-<?php echo $row['kode_negara']; ?>"></span></h1>
              <h1><?php echo $row['nomor']; ?></h1>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p><?php echo $row['nama']; ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-5">
          <img class="img-fluid" src="img/valentino-rossi.jpg" style="width: 100%; height: auto;">
          <div class="row">
            <div class="col d-flex justify-content-between">
              <h1><span class="flag-icon flag-icon-<?php echo $row['kode_negara']; ?>"></span></h1>
              <h1><?php echo $row['nomor']; ?></h1>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p><?php echo $row['nama']; ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-5">
          <img class="img-fluid" src="img/valentino-rossi.jpg" style="width: 100%; height: auto;">
          <div class="row">
            <div class="col d-flex justify-content-between">
              <h1><span class="flag-icon flag-icon-<?php echo $row['kode_negara']; ?>"></span></h1>
              <h1><?php echo $row['nomor']; ?></h1>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p><?php echo $row['nama']; ?></p>
            </div>
          </div>
        </div>
      </div>

      <?php } ?>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>