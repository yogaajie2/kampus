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
      h1, h2, h5, p, a {
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

    <title>Daftar Pembalap MotoGP Musim 2018</title>
  </head>
  <body>

    <?php 
      include 'fungsi/koneksi.php';
      include 'fungsi/cari.php';

      $sql = "SELECT * FROM motogp WHERE negara LIKE '%$keyword%' OR nomor LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR tim LIKE '%$keyword%' OR motor LIKE '%$keyword%'";
      $result = mysqli_query($koneksi, $sql);
      if (!$result) {
        echo "ERROR";
      }

      $i = 0;
    ?>

    <div class="container">
      <div class="row sticky-top py-3" style="background-color: #0d0d0d;">
        <div class="col d-flex">
          <h2 class="mr-auto" style="color: #fff;">Daftar Pembalap MotoGP Musim 2018</h2>
          <form class="form-inline mr-3" action="index.php">
            <input class="form-control mr-2" type="text" name="cari" placeholder="Cari nama, nomor, tim, motor, negara">
            <button class="btn btn-light" type="submit">Cari</button>
          </form>
          <form class="form-inline">
            <a href="tambah-data.php">
              <button type="button" class="btn btn-light">Tambah Data</button>
            </a>
          </form>
        </div>
      </div>
      <div class="row my-5">

        <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>

        <div class="col-md-4 px-5 border">
          <a href="bio-pembalap.php?id=<?php echo $row['id']; ?>">
            <img class="img-fluid" src="<?php echo $row['foto']; ?>" style="width: 100%; height: auto;">
          </a>
          <div class="row my-3">
            <div class="col d-flex justify-content-between">
              <h1><span class="flag-icon flag-icon-<?php echo $row['kode_negara']; ?>"></span></h1>
              <h1 class="font-weight-bold"><?php echo $row['nomor']; ?></h1>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <a href="bio-pembalap.php?id=<?php echo $row['id']; ?>">
                <p class="font-weight-bold"><?php echo $row['nama']; ?></p>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col d-flex my-3">
              <a class="mr-auto" href="ubah-data.php?id=<?php echo $row['id']; ?>">
                <button type="button" class="btn btn-outline-dark">Ubah Data</button>
              </a>
              <a href="fungsi/delete.php?id=<?php echo $row['id']; ?>">
                <button type="button" class="btn btn-outline-dark">Hapus Data</button>
              </a>
            </div>
          </div>
        </div>

        <?php 
          $i++;
          if ($i % 3 == 0) {
            echo '</div><div class="row my-5">';
          }
        ?>

      <?php } ?>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>