<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
    nav h1{
      color: white;
    }
  </style>
    <title>Hari Guru</title>
  </head>
  <body>
  <!-- Image and text -->
<nav class="navbar navbar-dark bg-dark justify-content-center">
  <a class="navbar-brand" href="#">
    <img src="Happy.webp" width="175" height="100" class="mr-2" alt="">
    <h1 class="text"><b>Hari Guru</b></h1>
  </a>
  </nav>
  <nav class="nav justify-content-center">
  <a class="nav-link active" href="index.php">Beranda</a>
  <a class="nav-link active" href="tentang.php">Tentang</a>
  <a class="nav-link active" href="tokoh.php">Tokoh</a>
  <a class="nav-link active" href="buku.php">Buku Tamu</a>
</nav>
<div class="container pt-3">
    <div class="row">
        <div class="col-md-12">

    <form method="POST" name="Pesan">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama:</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat:</label>
    <input type="text" class="form-control" id="alamat" name="alamat">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No.Telepon:</label>
    <input type="text" class="form-control" id="no_tlp" name="no_tlp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Keterangan:</label>
    <input type="text" class="form-control" id="ket" name="ket">
  </div>
  <button type="submit" id="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>

<div class="container">
</div>
<hr>
</div>
<?php
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $no_tlp = $_POST['no_tlp'];
  $ket = $_POST['ket'];

//   echo "<div class='container pt-3'>";
//   echo "<h2>Data Tamu:</h2>";
//   echo "<p><strong>Nama:</strong> $nama</p>";
//   echo "<p><strong>Alamat:</strong> $alamat</p>";
//   echo "<p><strong>No Telepon:</strong> $no_tlp</p>";
//   echo "<p><strong>Keterangan:</strong> $ket</p>";
//   echo "</div>";
}
?>

<div class="container">
        <div class="card mx-auto" style="width: 30rem;">
            <div class="card-header">
            </div>
            <div class="card-body">
                <p>Nama          : <?= $nama; ?></p>
                <p>Alamat        : <?= $alamat; ?></p>
                <p>Nomor Telepon : <?= $no_tlp; ?></p>
                <p>Keterangan   : <?= $ket; ?></p>
            </div>
        </div>
    </div>
    <?php  ?>
  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    
  </body>
</html>