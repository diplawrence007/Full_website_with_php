
<?php

session_start();
$useremail=$_REQUEST["email"];
$userpass=$_REQUEST["password"];
$incriptpass=md5(sha1($userpass));


$host="localhost";
$dbuser="diplawrence";
$dbps="jahidul007";
$dbname="databasetowebsite";

$connectdb=mysqli_connect($host,$dbuser,$dbps,$dbname);
    if($connectdb==false){

        echo "database not connect";

    };

$mylogin="SELECT * FROM website WHERE gmail='$useremail' AND pass='$incriptpass'";
$runquery=mysqli_query($connectdb,$mylogin);
setcookie("cookie","$useremail",time()+(84600*7));
if($runquery==true){
    if(mysqli_num_rows($runquery)==1){
    $_SESSION["email"]=$useremail;
    header("location:profile.php");

    }else{
        header("location:login.php?loh");
    }
}
?>