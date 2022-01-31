<?php 

require "conf.php";

$name = $_POST['name'];
$pass = $_POST['pass'];

$result = mysqli_query($conn,"SELECT username FROM admin WHERE username = '$name'");
if ( mysqli_fetch_assoc($result) ) {
    echo "<script>
    alert('username tak tersedia')
    </script>";
    return false;
}

$password = password_hash($pass, PASSWORD_DEFAULT);


$sql= mysqli_query($conn,"INSERT INTO admin ( username, password) VALUES ('$name','$password' ) " );
 
if ($sql) {
    echo "<script>alert('Berhasil registrasi.');window.location='login.php';</script>";
}else {
    echo "<script>alert('Gagal.');window.location='registrasi.php';</script>";
}


?>