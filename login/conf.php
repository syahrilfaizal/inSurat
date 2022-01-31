<?php 

$conn = mysqli_connect("localhost","root","","pengajuan");
if (!$conn) {
    die("koneksi gagal:".mysqli_connect_error());
}

?>