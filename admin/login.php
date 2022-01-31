<?php 
session_start();
 
if (isset($_SESSION["login"])) {
  header("location: index.php");
}
require 'conf.php';

if (isset($_POST["login"])) {

    $username = $_POST["name"];
    $password = $_POST["pass"];

    $result = mysqli_query($conn, "SELECT * FROM admin  WHERE nama ='$username'");
    
    //cek username
    if ( mysqli_num_rows($result) > 0 ){

        //cekpasword
        $row = mysqli_fetch_array($result);
        if (password_verify($password,$row["password"])){
          // cek jika user login sebagai admin
		if($row['level']=="admin"){

			// buat session login dan username
			$_SESSION['login']= true;
			$_SESSION['username'] = $username;
			$_SESSION['level'] = $row["level"];
			$_SESSION["admin"] = true;
			// alihkan ke halaman dashboard admin
			header("Location: admin.php");

		// cek jika user login sebagai pegawai
		}else if($row['level']=="petugas"){
			// buat session login dan username
			$_SESSION['login']= true;
			$_SESSION['username'] = $username;
			$_SESSION['level'] = $row["level"];
			$_SESSION["petugas"] = true;
			// alihkan ke halaman dashboard pegawai
			header("Location: petugas.php");

		// cek jika user login sebagai pengurus
		}else if($row['level']=="masyarakat"){
			// buat session login dan username
			$_SESSION['login']= true;
			$_SESSION['nik'] = $row["nik"];
			$_SESSION['id'] = $row["id"];
			$_SESSION['username'] = $username;
			$_SESSION['level'] = $row["level"];
			$_SESSION["masyarakat"] = true;
			// alihkan ke halaman dashboard pengurus
			header("Location:masyarakat.php");

		}else{

			// alihkan ke halaman login kembali
			echo "<script>alert('Username atau Password salah!.');window.location='login.php';</script>";
		}
        } 
    }

    $error = true;
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bina Anugerah sukses</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/favicon.png" rel="favicon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

<body id="body">

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <div class="logo"> <a href="#"><img src="img/new_bas.png" alt="logo" /></a> </div>
      </div>

    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  
  <main id="main">
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
      <div class="section-header">
          <h2>Log in</h2>
        </div>
        <div class="row">
          <form action="" method="POST">
            <div class="form-group">
              <?php  if( isset($error)): ?>
                <p style="color: red; font-style: italic;">username/password salah</p>
              <?php endif; ?>
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="name" >
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="pass" >
            </div>
            <button type="submit" class="btn btn-primary" name="login">Login</button>
          </form>
        </div><br>
          <a href="registrasi.php" class="text-dark">Belum punya akun?,Daftar disini!</a>
      </div>
    </section><!-- #services -->

   

  </main>
<br>
<br><br><br>
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
