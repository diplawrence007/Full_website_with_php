<?php
session_start();
if(isset($_SESSION["email"])){
	header("location:profile.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="imgs/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="webfonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="webfonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" enctype="multipart/form-data" method="POST" action="signup_core.php">
					<span class="login100-form-title p-b-34">
					<?php
						if(isset($_REQUEST["actio"])){
							echo "<p style='color:red'>Please Fillup All Things</p>";
						}
						if(isset($_REQUEST["shortpass"])){
							echo "<p style='color:red'>password short!!!!!!!!!!!!!</p>";
						}
						?>
						Account Registration
					</span>
					
						<input id="first-name" class="input100" type="text" name="firstname" placeholder="First Name">
						<input class="input100" type="text" name="lastname"" placeholder="Last Name">
						<input class="input100" type="text" name="gmail" placeholder="Gmail">
						<input class="input100" type="password" name="password" placeholder="Password">
						<div>
							<p style="padding-left: 24px;padding-bottom: 14px">Profile Picture Upload</p>
						</div>
						<input class="input100" type="file" name="update" value="picture upload">
						<input class="input100" style="cursor: pointer" type="submit" name="submit" value="Registration">
						
				</form>

				<div class="login100-more" style="background-image: url('imgs/bg-01.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>