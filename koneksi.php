<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="uas";

    $koneksi = mysqli_connect($host,$user,$pass,$db);
    
    // if($koneksi){
    //     echo "KONEKSI BERHASIL";
    // }else{
    //     echo "KONEKSI GAGAL";
    // }