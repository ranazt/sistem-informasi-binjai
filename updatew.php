<?php
include("koneksi.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $ket = $_POST['ket'];
  $alamat = $_POST['alamat'];

  // Cek apakah ada file foto yang diunggah
  if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['file'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];

    // Mendapatkan ekstensi file
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    // Daftar ekstensi yang diperbolehkan
    $allowed_ext = array('jpg', 'jpeg', 'png');

    // Cek apakah ekstensi file yang diunggah diperbolehkan
    if (in_array($file_ext, $allowed_ext)) {
      // Generate nama file baru
      $new_file_name = uniqid('foto_') . '.' . $file_ext;

      // Tentukan lokasi penyimpanan file
      $upload_path = 'foto/' . $new_file_name;

      // Pindahkan file ke lokasi penyimpanan
      if (move_uploaded_file($file_tmp, $upload_path)) {
        // Update data dengan file foto baru (gunakan parameterized query untuk menghindari SQL Injection)
        $sql = "UPDATE wisata SET nama = ?, ket = ?, nama_file = ? WHERE id = ?";
        $stmt = mysqli_prepare($koneksi, $sql);
        mysqli_stmt_bind_param($stmt, "sssi", $nama, $ket, $new_file_name, $id);
      } else {
        // Jika gagal mengunggah file, update data tanpa perubahan pada file foto (gunakan parameterized query untuk menghindari SQL Injection)
        $sql = "UPDATE wisata SET nama = ?, ket = ? WHERE id = ?";
        $stmt = mysqli_prepare($koneksi, $sql);
        mysqli_stmt_bind_param($stmt, "ssi", $nama, $ket, $id);
      }
    } else {
      // Jika ekstensi file tidak diperbolehkan, update data tanpa perubahan pada file foto (gunakan parameterized query untuk menghindari SQL Injection)
      $sql = "UPDATE wisata SET nama = ?, ket = ? WHERE id = ?";
      $stmt = mysqli_prepare($koneksi, $sql);
      mysqli_stmt_bind_param($stmt, "ssi", $nama, $ket, $id);
    }
  } else {
    // Jika tidak ada file foto yang diunggah, update data tanpa perubahan pada file foto (gunakan parameterized query untuk menghindari SQL Injection)
    $sql = "UPDATE wisata SET nama = ?, ket = ? WHERE id = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, "ssi", $nama, $ket, $id);
  }

  // Eksekusi query update data
  $result = mysqli_stmt_execute($stmt);

  if ($result) {
    // Jika update data berhasil, kembalikan ke halaman wisata.php
    header('Location: wisata.php');
    exit();
  } else {
    // Jika update data gagal, tampilkan pesan error
    echo "Gagal mengubah data. Silakan coba lagi.";
  }
} else {
  echo "Metode tidak diizinkan.";
}
?>
