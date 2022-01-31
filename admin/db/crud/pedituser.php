<?php

require_once 'conf.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id_user'];
  $nama = $_POST['nama'];
  $no_rumah = $_POST['no_rumah'];
  $id_rt = $_POST['id_rt'];
  $id_kelurahan = $_POST['id_kelurahan'];
  $id_kecamatan = $_POST['id_kecamatan'];
  $email = $_POST['email'];
  $tlpn = $_POST['tlpn'];
  
  // update data berdasarkan id_produk yg dikirimkan
  $q = $conn->query("UPDATE user SET nama = '$nama', no_rumah = '$no_rumah', id_rt = '$id_rt', id_kelurahan = '$id_kelurahan', id_kecamatan = '$id_kecamatan', email = '$email', tlpn = '$tlpn' WHERE id_user = '$id'");

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
