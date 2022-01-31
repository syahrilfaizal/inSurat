<?php 

session_start();
if (!isset($_SESSION["login"])) {
    header("location: ../login1/login.php");
}
$id = $_SESSION['id'];   
$nik = $_SESSION['nik'];  
$nama = $_SESSION['nama']; 
$email = $_SESSION['email'];
$tlpn= $_SESSION['tlpn'];

?>
<?php
include "../conf.php";
?>
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Pengajuan surat</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Room Booking Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<!-- js -->
 <script src="js/jquery.min.js"></script>
<!-- //js --> 
<!-- font-awesome-icons -->
<link href="css4/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="css4/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="http://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
<script src='../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
	(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "../../../../../../vdo.ai/core/w3layouts/vdo.ai.js");
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125810435-1');
</script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<body>
	<div class="main">

	<div class="w3_agile_main_grids">
		
		<div id='progress'><div id='progress-complete'></div></div>
		
		<form id="SignupForm" action="action.php" class="agile_form"method="post">
			<fieldset>
				<h3>Pengajuan</h3>
				<div class="form-group agileits_w3layouts_form w3_agileits_margin">
				<input id="Name" type="text" name="id" class="form-control" value =<?php echo $id; ?> readonly hidden/>
					<div class="wthree_input">
						<i class="fa fa-user" aria-hidden="true"></i>
						<input id="Name" type="text" name="name" class="form-control" value =<?php echo $nama; ?> readonly />
					</div>
				</div>
				<div class="form-group agileits_w3layouts_form">
					<div class="wthree_input">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<input id="Email" type="text" name="nik" class="form-control" value =<?php echo $nik; ?> readonly/>
					</div>
				</div>
				<div class="form-group agileits_w3layouts_form w3_agileits_margin">
					<div class="wthree_input">
						<i class="fa fa-hashtag" aria-hidden="true"></i>
						<input id="Subject" type="email" name="email" class="form-control" value =<?php echo $email; ?> />
					</div>
				</div>
				<div class="form-group agileits_w3layouts_form ">
					<div class="wthree_input">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<input id="Subject" type="text" name="tlpn" class="form-control" value =<?php echo $tlpn; ?> />
					</div>
				</div>
				<div class="form-group agileits_w3layouts_form w3_agileits_margin">
					<div class="wthree_input">
						<i class="fa fa-globe" aria-hidden="true"></i>
						<select name="surat" id="surat"class="form-control">
							<?php
							include '../conf.php';
							$sel_surat = "SELECT * from surat";
							$q= mysqli_query($conn, $sel_surat);
							while($data_surat= mysqli_fetch_array($q)) {
							?>
							<option value="<?php echo $data_surat["id_surat"]?>"> <?php echo $data_surat["nama_surat"] ?></option>

							<?php
								}
						?>
						</select>
					</div>
				</div>
				<div class="form-group agileits_w3layouts_form w3_agileits_margin">
					<div class="wthree_input">
						<i class="fa fa-globe" aria-hidden="true"></i>

							<select name="kecamatan" id="kecamatan">
							<option value="">- Pilih Kecamatan-</option>
							<?php
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
					</div>
				</div>

				<div class="form-group agileits_w3layouts_form w3_agileits_margin">
					<div class="wthree_input">
						<i class="fa fa-globe" aria-hidden="true"></i>
					
						<select name="kelurahan" id="kelurahan">
						<option value="">- Pilih Kelurahan-</option>
						</select>
						
						
						<script>
							$("#kecamatan").change(function(){
								var id_kecamatan = $("#kecamatan").val();

								$("#imgLoad").show();

								$.ajax ( {
									type: "POST",
									dataType: "html",
									url: "cbkel.php",
									data: "kecamatan="+id_kecamatan,
									success: function(msg){
										console.log(msg)
										if(msg == '') {
											alert('tidak ada data kecamatan');
										} else{
											$("#kelurahan").html(msg);
										}

										$("#imgLoad").hide();
									}
								})
							})
						</script>
					</div>
				</div>

				<div class="form-group agileits_w3layouts_form w3_agileits_margin">
					<div class="wthree_input">
						<i class="fa fa-globe" aria-hidden="true"></i>
					
						<select name="rt" id="rt">
						<option value="">- Pilih RT-</option>
						</select>
						
						
						<script>
							$("#kelurahan").change(function(){
								var id_kelurahan = $("#kelurahan").val();

								$("#imgLoad").show();

								$.ajax ( {
									type: "POST",
									dataType: "html",
									url: "cbrt.php",
									data: "kelurahan="+id_kelurahan,
									success: function(msg){
										console.log(msg)
										if(msg == '') {
											alert('tidak ada data kelurahan');
										} else{
											$("#rt").html(msg);
										}

										$("#imgLoad").hide();
									}
								})
							})
						</script>
					</div>
				</div>

				<!-- <div class="form-group agileits_w3layouts_form w3_agileits_margin">
					<div class="wthree_input">
						<i class="fa fa-globe" aria-hidden="true"></i>
						<select name="surat" id="surat"class="form-control">
							<?php
							include '../conf.php';
							$sql = "SELECT * from kecamatan";
							$q= mysqli_query($conn, $sql);
							while($data_kecamatan= mysqli_fetch_array($q)) {
							?>
							<option selected disabled="disabled" >Kecamatan</option>
							<option value="<?php echo $data_kecamatan["id_kecamatan"]?>"> <?php echo $data_kecamatan["kecamatan"] ?></option>

							<?php
								}
						?>
						</select>
					</div>
				</div>
				<div class="form-group agileits_w3layouts_form w3_agileits_margin">
					<div class="wthree_input">
						<i class="fa fa-globe" aria-hidden="true"></i>
						<select name="surat" id="surat"class="form-control">
							<?php
							include '../conf.php';
							$sql = "SELECT * from kelurahan";
							$q= mysqli_query($conn, $sql);
							while($data_kecamatan= mysqli_fetch_array($q)) {
							?>
							<option selected disabled="disabled" >Kelurahan</option>
							<option value="<?php echo $data_kecamatan["id_kelurahan"]?>"> <?php echo $data_kecamatan["kelurahan"] ?></option>

							<?php
								}
						?>
						</select>
					</div>
				</div>
				<div class="form-group agileits_w3layouts_form w3_agileits_margin">
					<div class="wthree_input">
						<i class="fa fa-globe" aria-hidden="true"></i>
						<select name="surat" id="surat"class="form-control">
							<?php
							include '../conf.php';
							$sql = "SELECT * from rt";
							$q= mysqli_query($conn, $sql);
							while($data_kecamatan= mysqli_fetch_array($q)) {
							?>
							<option selected disabled="disabled" >RT</option>
							<option value="<?php echo $data_kecamatan["id_rt"]?>"> <?php echo $data_kecamatan["no_rt"] ?></option>

							<?php
								}
						?>
						</select>
					</div>
				</div> -->
				<div class="clear"> </div>
			</fieldset>
			
			<fieldset>
				<h3>Ditujukan Untuk</h3>
				<div class="form-group agileits_circles">
					<div class="wthree_radio">
						<span class="fa fa-home" aria-hidden="true"></span>
						<label class="radio">
							<input type="radio" name="radio" value="tg">
							<i></i>RT
						</label>
					</div>
				</div>
				<div class="form-group agileits_circles">
					<div class="wthree_radio">
						<span class="fa fa-home" aria-hidden="true"></span>
						<label class="radio">
							<input type="radio" name="radio" value="kel">
							<i></i>Kelurahan
						</label>
					</div>
				</div>
				<div class="form-group agileits_circles">
					<div class="wthree_radio">
						<span class="fa fa-home" aria-hidden="true"></span>
						<label class="radio">
							<input type="radio" name="radio" value="kec">
							<i></i>Kecamatan
						</label>
					</div>
				</div>
				<div class="clear"> </div>
			</fieldset>
			
			<fieldset>
				<h3 class="w3_room">keterangan</h3>
				<div class="form-group w3ls_description">
					<i class="fa fa-align-right" aria-hidden="true"></i>
					<textarea name="ket" placeholder="ketik disini untu keterangan..." required=""></textarea>
				</div>
			</fieldset>

			<p>
				<button id="SaveAccount" type="submit"class="btn btn-primary agileinfo_primary submit">Submit form</button>
			</p>
		</form>
		
<!---728x90--->
		
		
	</div>
</div>
	<script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.formtowizard.js"></script>

    <script>
        $( function() {
            var $signupForm = $( '#SignupForm' );

            $signupForm.validate({errorElement: 'em'});

            $signupForm.formToWizard({
                submitButton: 'SaveAccount',
                nextBtnClass: 'btn btn-primary next',
                prevBtnClass: 'btn btn-default prev',
                buttonTag:    'button',
                validateBeforeNext: function(form, step) {
                    var stepIsValid = true;
                    var validator = form.validate();
                    $(':input', step).each( function(index) {
                        var xy = validator.element(this);
                        stepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
                    });
                    return stepIsValid;
                },
                progress: function (i, count) {
                    $('#progress-complete').width(''+(i/count*100)+'%');
                }
            });
        });
    </script>
</body>

</html>