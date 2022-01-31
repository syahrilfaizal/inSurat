<?php

require_once 'conf.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id_kecamatan'];
  $kec = $_POST['kec'];
  $nama_camat = $_POST['nama_camat'];
  
  // update data berdasarkan id_produk yg dikirimkan
  $q = $conn->query("UPDATE kecamatan SET kecamatan = '$kec', nama_camat = '$nama_camat' WHERE id_kecamatan = '$id'");

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
