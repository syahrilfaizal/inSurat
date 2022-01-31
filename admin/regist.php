<?php session_start(); 

require 'conf.php';

$Nama = $_POST['name'];
$password = $_POST['pass'];
$password2 =$_POST['pass2'];

// username yg sama
$result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$Nama'");
if ( mysqli_fetch_assoc($result) ) {
    echo "<script>
    alert('username tak tersedia')
    </script>";
    return false;
}
// ngecek pass
if ( $password !== $password2) {
    echo "<script>
    alert('konfirmasi password tidak ssesuai');
    </script>";
    return false;
}

// enkrisi pass
$password = password_hash($password, PASSWORD_DEFAULT);

$mysqli = 'INSERT INTO user (username, pas) 
VALUES ("'. $Nama .'", "'. $password .'")';

 var_dump ($Nama);
  // $result = mysqli_query($conn, $mysqli);
  // if ($result){
  //   $_SESSION['login'] = true;
  //   header("Location: index.php");
  // }else{
  //   echo"gagal";
  // }
  // mysqli_close($conn)

?>
