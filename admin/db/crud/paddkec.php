<?php session_start(); 

include 'conf.php';

$kecamatan = $_POST['kecamatan'];
$nama_camat = $_POST['nama_camat'];

$mysqli = 'INSERT INTO kecamatan (kecamatan, nama_camat) 
VALUES ("'. $kecamatan .'", "'. $nama_camat .'")';

$result=mysqli_query($conn,$mysqli);
  if(!$result) {
    die ("Gagal menghapus data: ".mysqli_errno($conn).
    " - ".mysqli_error($conn));
  } else {
    echo "<script>alert('Data berhasil ditambahkan.');window.location='../../admin.php';</script>";
  }

  // $result = mysqli_query($conn, $mysqli);
  // if ($result){
  //   $_SESSION['check'] = 'berhasil';
  //   header("Location: ../index.php");
  // }else{
  //   echo"gagal";
  // }
  // mysqli_close($conn)

?>
