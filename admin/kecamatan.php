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
  <title>Dasboard admin</title>
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
  <link href="css1/style.css" rel="stylesheet">

<body id="body">
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

    <a class="logo">
              <img src="../assets/images/pengajuan.png" alt="">
            </a>
      <!-- <div id="logo" class="pull-left">
        <div class="logo"> <a href="#"><img src="" alt="logo" /></a> </div>
      </div> -->

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="menu-has-children"><a href="logout.php">logout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
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
      <div class="container" id="printableArea">
        <div class="section-header">
          <h2>daftar pengajuan tingkat kecamatan </h2>
          <div class="btn-group">
          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pilihan      
          </button>
          <div class="dropdown-menu">
          <a class="dropdown-item" href="a_diterima.php">diterima</a>
            <a class="dropdown-item"  href="a_proses.php">proses</a>
            <a class="dropdown-item" href="a_selesai.php">selesai</a>
          </div>
        </div><br><br>
          <table  class="table table-hover ">
            <thead>
              <tr>
              <th scope="col">Nomor</th>
                      <th scope="col">Nama</th>
                      <th scope="col">NIK</th>
                      <th scope="col">RT</th>
                      <th scope="col">Kelurahan</th>
                      <th scope="col">Kecamatan</th>
                      <th scope="col">Surat yang di ajukan</th>
                      <th scope="col">Keterangan</th>
                      <th scope="col" colspan="2">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php
              include 'conf.php';
              $no = 1;
              $data = mysqli_query($conn,"SELECT * from pengajuan
              INNER JOIN user ON pengajuan.id_user = user.id_user
              INNER JOIN rt ON pengajuan.id_rt = rt.id_rt
              INNER JOIN surat ON pengajuan.id_surat = surat.id_surat
              INNER JOIN kelurahan ON pengajuan.id_kelurahan = kelurahan.id_kelurahan
              INNER JOIN kecamatan ON pengajuan.id_kecamatan = kecamatan.id_kecamatan
              ");
              while($d = mysqli_fetch_array($data)){
              ?>
                <?php if($d['kode_khusus']=="kec"){ ?>
                <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama'];?></td>
                <td><?php echo $d['nik'];?></td>
                <td><?php echo $d['rt'];?></td>
                <td><?php echo $d['kelurahan'];?></td>
                <td><?php echo $d['kecamatan'];?></td>
                <td><?php echo $d['nama_surat'];?></td>
                <td><?php echo $d['keterangan'];?></td>
                  <td>
                    <!-- Example single danger button -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="edit.php">Edit</a>
                        <a class="dropdown-item"  href="crud_delete.php?id=" onclick="return confirm('Hapus data ini ?')">Hapus</a>
                        <a class="dropdown-item" href="detail_pengaduan.php?id=">Detail</a>
                      </div>
                    </div>
                    
                    <?php  }}
                    ?> 
                </td>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-secondary" onclick="printDiv()" target="_blank">PDF</button>
                  <button type="button" class="btn btn-secondary"><a href="export_excel.php" target="_blank">excel</a></button>
                </div>
                <br> <br>
              </tr>
            </tbody>
          </table>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>

      </div>
    </section>

    
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
