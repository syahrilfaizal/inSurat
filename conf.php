<?php 

$conn = mysqli_connect("localhost","root","","insurat");

if (!$conn) {
    die("konesi gagal:".mysqli_connect_error());
}
?>