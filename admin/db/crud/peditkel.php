<?php

require_once 'conf.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id_kelurahan'];
  $kel = $_POST['kel'];
  $nama_lurah = $_POST['nama_lurah'];
  
  // update data berdasarkan id_produk yg dikirimkan
  $q = $conn->query("UPDATE kelurahan SET kelurahan = '$kel', nama_lurah = '$nama_lurah' WHERE id_kelurahan = '$id'");

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data berhasil diubah'); window.location.href='../../admin.php'</script>";
  } else {
    echo "<script>alert('Data gagal diubah'); window.location.href='../../admin.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: ../../admin.php');
}
