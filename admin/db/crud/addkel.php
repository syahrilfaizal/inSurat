<?php 
session_start();
if (!isset($_SESSION["admin"])) {
  header("location: login.php");
}
// $username = $_SESSION['username'];
// $nik = $_SESSION['nik'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>pengaduan masyarakat</title>
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
  <link href="../../css/style.css" rel="stylesheet">

<body id="body">

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <div class="logo"> <a href="#"><img src="img/new_bas.png" alt="logo" /></a> </div>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="masyarakat.php">Data Saya</a></li>
          <li><a href="add.php">Tambah Data</a></li>
          <li class="menu-has-children"><a href="logout.php">logout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
      <div class="section-header">
          <h2>Tambah Kelurahan</h2>
        </div>

      <div class="container">
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="paddkel.php" method="post"   enctype="multipart/form-data">
            <div class="form-group">
            <label  style="font-weight: bold; color: royalblue; ">Kelurahan</label>
            <input type="text" name="kelurahan" class="form-control"  />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <label style="font-weight: bold; color: royalblue; ">Nama Lurah</label>
              <textarea class="form-control" name="nama_lurah" ></textarea>
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <label style="font-weight: bold; color: royalblue; ">Kecamatan</label>
              <select name="kecamatan" id="kecamatan">
							<option value="">- Pilih Kecamatan-</option>
							<?php
                            include 'conf.php';
							$sel_kecamatan = "select * from kecamatan";
							// $q= mysql_query($sel_prov);
							$q= mysqli_query($conn, $sel_kecamatan);
							while($data_kecamatan= mysqli_fetch_array($q)) {
							?>
							<option value="<?php echo $data_kecamatan["id_kecamatan"]?>"> <?php echo $data_kecamatan["kecamatan"] ?></option>

							<?php
							}
							?>
							</select>
              <div class="validation"></div>
            </div>
            
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
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
