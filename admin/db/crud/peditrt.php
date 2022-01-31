<?php

require_once 'conf.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id_rt'];
  $rt = $_POST['rt'];
  $nama_rt = $_POST['nama_rt'];
  
  // update data berdasarkan id_produk yg dikirimkan
  $q = $conn->query("UPDATE rt SET rt = '$rt', nama_rt = '$nama_rt' WHERE id_rt = '$id'");

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
