<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wisata - Ubah Data</title>
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
      <a class="navbar-brand fw-bold fs-4" href="#"><img src="k8.jpg" alt="" width="35px" height="35px">Binjai City</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="admin.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="penduduk.php">Informasi Penduduk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="wisata.php">Object Wisata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hasil.php">Data Penghasilan Utama</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br><br><br><br>
  <h1 class="text-center fw-bold mb-2 py-5 text-black">Ubah Data Object Wisata</h1>
  <?php
  include("koneksi.php");

  if (isset($_GET['x'])) {
    $id = $_GET['x'];
    $sql = "SELECT * FROM wisata WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($result);
    if (!$data) {
      echo "<p>Data tidak ditemukan.</p>";
    } else {
  ?>
      <div class="container">
        <form action="updatew.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Object Wisata</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="ket" class="form-label">Keterangan</label>
            <textarea class="form-control" id="ket" name="ket" rows="5" required><?php echo $data['ket']; ?></textarea>
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="5" required><?php echo $data['alamat']; ?></textarea>
          </div>
          <div class="mb-3">
            <label for="file" class="form-label">Foto</label>
            <input class="form-control" type="file" id="file" name="file">
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="wisata.php" class="btn btn-secondary">Kembali</a>
        </form>
      </div>
  <?php
    }
  } else {
    echo "<p>Parameter ID tidak ditemukan.</p>";
  }
  ?>

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
