<?php 

require "../conf.php";

$nik = $_POST['nik'];
$name = $_POST['nama'];
$pass = $_POST['password'];

$result = mysqli_query($conn,"SELECT nama FROM user WHERE nama = '$name'");
if ( mysqli_fetch_assoc($result) ) {
    echo "<script>
    alert('NIK sudah terdaftar')
    </script>";
    return false;
}

$password = password_hash($pass, PASSWORD_DEFAULT);


$sql= mysqli_query($conn,"INSERT INTO user ( nik, nama, password) VALUES ('$nik','$name','$password' ) " );
 
if ($sql) {
    echo "<script>alert('Berhasil registrasi.');window.location='index.php';</script>";
}else {
    echo "<script>alert('Gagal.');window.location='registrasi.php';</script>";
}


?>