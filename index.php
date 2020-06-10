
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/logo-madina.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" h  ref="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    <link href="dist/attention.css" rel="stylesheet">
<!--===============================================================================================-->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-02.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="login-act.php">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-account"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Pendaftaran Online
					</span>

					<div class="wrap-input100 validate-input" data-validate = "ini harus diisi dulu sayang">
						<input class="input100" type="text" name="nomr" placeholder="Nomor MR">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						<span class="focus-input100" data-object="">
					</div>

					<div class="wrap-input100 validate-input" data-validate = "ini harus diisi dulu sayang">
						<input class="input100" type="text" name="noktp" id="noktp" placeholder="Nomor KTP">
						<span class="focus-input100" data-placeholder="&#xf400;"></span>
					</div>

					 <div class="g-recaptcha" data-sitekey='6Ldy-cgUAAAAAIjfpw9L3LkUF-T0Zi_-p1M5fC3I'></div>

					<!-- <div class="contact100-form-checkbox">dsfadsf </div> -->
					<br>

					<div class="checkbox-circle" style="margin-bottom: 48px;">
							<label  style="color: #545454; cursor:pointer;" data-toggle="modal" data-target="#modalRelatedContent">
								<a><i class="fa fa-thumb-tack" ></i>&nbsp Alur Pendaftaran Online</a>
								<span class="checkmark"></span>
							</label>
					</div>

					<!--Modal: modalRelatedContent-->
					<div class="modal fade right" id="modalRelatedContent" tabindex="-1" role="dialog"
					  aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
					  <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
					    <!--Content-->
					    <div class="modal-content">
					      <!--Header-->
					      <div class="modal-header">
					        <p class="heading" >Alur Pendaftaran Online</p>

					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true" class="white-text">&times;</span>
					        </button>
					      </div>

					      <!--Body-->
					      <div class="modal-body">

					        <div class="row">
					          <div class="col-5">
					            <p></p>
					            <p class="text-center"><span class="fa fa-address-card fa-4x"></span></p>
					          </div>


					          <div class="col-7">
					            <p>Pasien sudah pernah berkunjung ke RSU Madina Bukittinggi dan telah memiliki No.MR di RSU Madina Bukittinggi</p>
					          </div>
					        </div>
					      </div>

					      <div class="modal-body">

					        <div class="row">
					          <div class="col-5">

					            <p class="text-center"><i class="fa fa-user-circle-o fa-4x"></i></p>
					          </div>

					          <div class="col-7">

					            <p>Pasien memasukan No.MR dan No KTP untuk memulai pendaftaran online</p>


					          </div>
					        </div>
					      </div>



						<div class="modal-body">

					        <div class="row">
					          <div class="col-5">
					          	<!-- <br> -->
					            <p class="text-center"><i class="fa fa-file-text fa-4x"></i></p>
					          </div>

					          <div class="col-7">
					            
					            <p>Pasien masuk ke menu <b style="color: #33b5bb"> PENDAFTARAN </b> dan mengisi data dengan benar</p>
					         

					          </div>
					        </div>
					      </div>



						<div class="modal-body">

					        <div class="row">
					          <div class="col-5">
					          	<br>
					          	<br>
					            <p class="text-center"><i class="fa fa-handshake-o fa-4x"></i></p>
					          </div>

					          <div class="col-7">
					          
					            
					            <p><b style="color: #33b5bb">Kode Pendaftaran</b> di catat atau di screenshoot dan dibawa beserta persyaratan lainnya ke petugas pendaftaran RSU Madina Bukittinggi untuk ditindaklanjuti ke poliklinik rawat jalan</p>
					            <button type="button" class="btn btn-info btn-md" data-dismiss="modal">Tutup</button>
					            

					          </div>
					        </div>
					      </div>

					    </div>
					    <!--/.Content-->
					  </div>
					</div>



					
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>


				</form>

			</div>

		</div>

	</div>

	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->

<!--===============================================================================================-->
<script src="dist/attention.js"></script>	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<!--===============================================================================================-->
<script src='https://www.google.com/recaptcha/api.js'></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>