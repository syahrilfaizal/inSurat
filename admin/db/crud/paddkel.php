<?php session_start(); 

include 'conf.php';

$kelurahan = $_POST['kelurahan'];
$nama_lurah = $_POST['nama_lurah'];
$kec = $_POST['kecamatan'];

$mysqli = 'INSERT INTO kelurahan (kelurahan, nama_lurah, id_kecamatan) 
VALUES ("'. $kelurahan .'", "'. $nama_lurah .'", "'. $kec .'")';

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
