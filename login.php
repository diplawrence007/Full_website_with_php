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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
			
		<div class="container-login100">
			<div class="wrap-login100">
		
				<form class="login100-form validate-form" method="POST" action="login_core.php">
					<span class="login100-form-title p-b-34">
						<?php
						if(isset($_REQUEST["action"])){
							echo "<p style='color:blue'>Account Registration Success</p>";
						}
						
						?>
						Account Login
					</span>
					
						<input class="input100" type="gmail" name="email" placeholder="Gmail">
						<input class="input100" type="password" name="password" placeholder="Password">
						<input class="input100" type="submit" name="" value="Log in">
						<div class="password" style="padding-left: 129px;">
						<?php
							if(isset($_REQUEST["loh"])){
								
								echo '<p style="color:red">
								Gmail And Password Not Matching

								</p>';
							}
							?>
						</div>
						<?php
							if(isset($_REQUEST["pasr"])){
								echo '<p style="color:blue; padding-left:16px;">
								password Change LogIn Again
							</p>';
							}
							?>
					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							User name / password?
						</a>
					</div>
				
				
					<div class="w-full text-center">
						<a href="signup.php" class="txt3">
							Sign Up
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('imgs/bg-01.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->

	<script src="js/main.js"></script>

</body>
</html>