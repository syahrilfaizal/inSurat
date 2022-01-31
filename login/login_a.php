<?php session_start();
require 'conf.php';

$name = $_POST['username'];
$pass = $_POST['password'];

$login = mysqli_query($conn,"SELECT * FROM admin WHERE username = '$name' and password = '$pass'");

if ($login) {
    $_SESSION['login'] = true;
     header( "location: ../index.php" );
}


?>