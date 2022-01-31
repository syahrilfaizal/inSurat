<?php

include "../conf.php";
//get text dari textbox di login.php
$username = $_POST['nik'];
$pass = $_POST['password'];
//baca database
$login = mysqli_query($conn,"SELECT * FROM user WHERE nik='$username'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
  $row = mysqli_fetch_assoc($login);
  if (password_verify($pass,$row["password"])){
    //set sesion
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['id'] = $row["id_user"];
    $_SESSION['nik'] = $row["nik"];
    $_SESSION['nama'] = $row["nama"];
    $_SESSION['email'] = $row["email"];
    $_SESSION['tlpn'] = $row["tlpn"];
    header("location:../index.php");
    } else {
      header("location: index.php?pesan=gagal");
    }
 
}else {
  echo "<script>alert('data tidak di temukan.');window.location='index.php';</script>";
}
?>
