<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wisata</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">
  <!-- font poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="../Praktikum/UTS/transisi.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-secondary fixed-top navbar-dark">
<div class="container">
 <a class="navbar-brand fw-bold fs-4" href="#"><img src="k8.jpg" alt="" width="35px"
 height="35px">Binjai City</a>
<button class="navbar-toggler" ty pe="button" data-bs-toggle="collapse"
data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="informasi.php">Informasi Penduduk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="objek.php">Object Wisata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="data.php">Data Penghasilan Utama</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <br><br><br><br>
  <h1 class="text-center fw-bold mb-2 py-5 text-black">OBJECT WISATA</h1>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
      <?php
      include("koneksi.php");
      $sql = "SELECT * FROM wisata";
      $proses = mysqli_query($koneksi, $sql);
      while ($data = mysqli_fetch_assoc($proses)) {
        ?>
        <div class="col">
          <div class="card h-100">
            <?php ['nama']; ?>
            <a href="tampilw.php?id=<?php echo $data['id']; ?>"><img src="foto/<?php echo $data['nama_file']; ?>" width="300" height="300"
                class="img-fluid"></a></a>
            <div class="card-body">
              <a href="sawah.php"></h5></a>
              <h5 class="card-title"><?php echo $data['nama']; ?></h5>
              <p class="card-text">
                <?php
                $ket = $data['ket'];
                $truncated_ket = strlen($ket) > 100 ? substr($ket, 0, 100) . "..." : $ket;
                echo $truncated_ket;
                ?>
            </div>
          </div>
        </div>
      <?php
    }
    ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    body {
      background-image: url("c5.jpg");
      background-color: #fff;
      font-family: Arial, Helvetica, sans-serif;
      color: #000;
    }
  </style>
</body>

</html>
