<?php session_start(); 

include 'conf.php';

$rt = $_POST['rt'];
$nama_rt = $_POST['nama_rt'];
$kelurahan = $_POST['kelurahan'];

$mysqli = 'INSERT INTO rt (rt, nama_rt, id_kelurahan) 
VALUES ("'. $rt .'", "'. $nama_rt .'", "'. $kelurahan .'")';

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
