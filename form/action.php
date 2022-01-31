<?php 

require "../conf.php";

$iduser= $_POST['id'];
$surat = $_POST['surat'];
$camat = $_POST['kecamatan'];
$lurah = $_POST['kelurahan'];
$rt = $_POST['rt'];
$ket = $_POST['ket'];
$kode = $_POST['radio'];



$sql= mysqli_query($conn,"INSERT INTO pengajuan ( id_user, id_surat, id_rt, id_kelurahan, id_kecamatan, keterangan, kode_khusus) 
VALUES ('$iduser','$surat','$rt','$lurah','$camat','$ket','$kode') " );
 
if ($sql) {
    echo "<script>alert('Berhasil menambahkan pengajuan.');window.location='index.php';</script>";
}else {
    echo "<script>alert('Gagal.');window.location='registrasi.php';</script>";
}


?>