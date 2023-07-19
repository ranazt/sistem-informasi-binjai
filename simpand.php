<?php
 include("koneksi.php");
   $id = $_POST['id'];
 $nama = $_POST['nama'];
    $ket = $_POST['ket'];
    $ala = $_POST['alamat'];
    $nama_foto = $_FILES['foto'] ['name'];
    $tmp_foto = $_FILES['foto'] ['tmp_name'];
    move_uploaded_file($tmp_foto, 'foto' . $nama_foto);
$sql = "insert into data values ('id','$nama','$ket','$ala','$nama_foto')";
 $proses = mysqli_query($koneksi, $sql);
 if ($proses) {
 header("location:inputd.php");
 }