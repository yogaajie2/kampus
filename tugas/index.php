<!doctype html>
<html lang="en" class="h-100">
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

      $sql = "SELECT * FROM user";
      $result = mysqli_query($koneksi, $sql);
      if (!$result) {
        echo "ERROR";
      }
    ?>

    <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>

    <title>Daftar Pembalap MotoGP Musim 2018 | Login</title>
  </head>
  <body class="h-100">
    <div class="container-fluid h-100">
      <div class="container h-25 d-flex align-items-center justify-content-center">
        <h1 class="display-4">Daftar Pembalap MotoGP Musim 2018</h1>
      </div>
      <div class="container h-50 d-flex align-items-center justify-content-center">
        <div class="row border p-5">
          <div class="col">
            <h2 class="text-center mb-4">Login</h2>
            <form action="fungsi/login.php" method="POST">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
              </div>
              <button type="submit" class="btn btn-block btn-dark">Login</button>
            </form>
          </div>
        </div>
      </div>
      <div class="container h-25 d-flex align-items-center justify-content-center">
        <div class="row">
          <div class="col text-center">
            <h2>Yoga Ajie Prasetya</h2>
            <h2>1151500023</h2>
          </div>
        </div>
      </div>
    </div>

    <?php } ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>