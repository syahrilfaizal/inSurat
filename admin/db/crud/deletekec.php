<?php
include 'conf.php';
$id = $_GET["id_kecamatan"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM kecamatan WHERE id_kecamatan='$id' ";
    $hasil_query = mysqli_query($conn, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
    }