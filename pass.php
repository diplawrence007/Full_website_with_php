<?php

            $host="localhost";
            $dbuser="diplawrence";
            $dbps="jahidul007";
            $dbname="databasetowebsite";
            
            $connectdb=mysqli_connect($host,$dbuser,$dbps,$dbname);
                if($connectdb==false){
            
                    echo "database not connect";
            
                };

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
				<form class="login100-form validate-form" method="POST" action="pass_core.php">
					<span class="login100-form-title p-b-34">
                    Change password
					</span>
                    <input class="input100" placeholder="Old Password" type="password" name="oldpass">
                    <input class="input100" placeholder="new Password" type="password" name="newpass">
                    <input class="input100" placeholder="Conform Password" type="password" name="codpass">
                    <input class="input100" type="submit" name="save" value="Change password">

					<?php
							if(isset($_REQUEST["passvul"])){
								echo '<p style="color:red; padding-left: 141px;font-size:22px;">
								password Not Match!
							</p>';
							}
							?>
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