<?php
include("koneksi.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data dari tabel wisata berdasarkan ID
    $sql = "DELETE FROM penduduk WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        // Redirect kembali ke halaman sebelumnya
        header("Location: penduduk.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
