<?php 
session_start();
if (!isset($_SESSION["login"])) {
  header("location: login.php");
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>INSURAT</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../../img/favicon.png" rel="icon">
  <link href="../../img/favicon.png" rel="favicon">

  <!-- Google Fonts -->
  <link href="../../https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../../lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../../css1/style.css" rel="stylesheet">

<body id="body">


  <header id="header">
    <div class="container">

    <a class="logo">
              <img src="../assets/images/pengajuan.png" alt="">
            </a>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-has-children"><a href="admin.php">back</a></li>
        </ul>
        
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


  <main id="main">
    <section id="contact" class="wow fadeInUp">
      <div class="container">
      <div class="section-header">
          <h2>Form Edit</h2>
        </div>

      <div class="container">
        <div class="form">
          <?php 
            include "conf.php";
            $id = $_GET['id_kecamatan'];
            $d = mysqli_query($conn,"SELECT * from kecamatan where id_kecamatan = '$id'");
            while($data = mysqli_fetch_array($d)){
            ?>
          <form action="peditkec.php" method="post">
                  <div class="mb-3">
                    <input type="hidden" name="id_kecamatan" value="<?= $data['id_kecamatan'] ?>" class="form-control" >
                  </div>
                  <div class="mb-3">
                    <label  class="form-label" style="font-weight: bold; color: royalblue; ">Kecamatan</label>
                    <input type="text" class="form-control"  name="kec" value="<?= $data['kecamatan'] ?>"  >
                  </div>
                  <div class="mb-3">
                    <label class="form-label" style="font-weight: bold; color: royalblue; ">Nama Camat</label>
                    <input type="text" class="form-control" name="nama_camat" value="<?= $data['nama_camat'] ?>">
                  </div>
                  <button type="submit" class="btn btn-primary" name="submit" value="Ubah Data">Submit</button>
                </form>
                <?php } ?>
        </div>

      </div>
    </section><!-- #contact -->   
  </main>

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
