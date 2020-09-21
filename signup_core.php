<?php
session_start();
if(isset($_SESSION["email"])){
	header("location:profile.php");
}
$host="localhost";
$dbuser="diplawrence";
$dbps="jahidul007";
$dbname="databasetowebsite";

$connectdb=mysqli_connect($host,$dbuser,$dbps,$dbname);
    if($connectdb==false){

        echo "database not connect";

    };
    if(isset($_REQUEST["submit"])){
if(isset($_REQUEST["firstname"]) && isset($_REQUEST["lastname"])
 && isset($_REQUEST["gmail"]) && isset($_REQUEST["password"])){

    $firstname=$_REQUEST["firstname"];
    $lastname=$_REQUEST["lastname"];
    $gmail=$_REQUEST["gmail"];
    $password=$_REQUEST["password"];
    $autopass=md5(sha1($password));
    $countpass=strlen($password);
    if(($countpass>=4)==false){
        header("location:signup.php?shortpass");
    }

    $uploadfile_name=$_FILES["update"]["name"];
    $uploatmp_tmpname=$_FILES["update"]["tmp_name"];
    $manyname=uniqid();

    move_uploaded_file("$uploatmp_tmpname","imgs/$manyname.jpg");
    


    $mysql="INSERT INTO website (fname,lname,gmail,pass,avatar) VALUES ('$firstname','$lastname','$gmail','$autopass','$manyname.jpg')";
    $runsql=mysqli_query($connectdb,$mysql);
    if($runsql==true){
        echo "Data Upload Now U Can LogIN";
    }else{
        header("location:signup.php?actio");

    };
    

};
    }

?>
<br>
<div style="margin-top: 23px;">
    <a style="text-decoration: none;background: orange;padding: 10px;" href="login.php">LogIN</a>
</div>