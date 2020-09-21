<?php
session_start();
session_destroy();
header("location:login.php");


$host="localhost";
$dbuser="diplawrence";
$dbps="jahidul007";
$dbname="databasetowebsite";

$connectdb=mysqli_connect($host,$dbuser,$dbps,$dbname);
    if($connectdb==false){

        echo "database not connect";

    };



    if(isset($_REQUEST['save'])){

    $oldp=htmlentities($_REQUEST["oldpass"]);
    $oldinc=md5(sha1($oldp));
    $newp=htmlentities($_REQUEST["newpass"]);
    $newinc=md5(sha1($newp));
    $condp=htmlentities($_REQUEST["codpass"]);
    $comdinc=md5(sha1($condp));

    if(isset($_COOKIE["cookie"])){
        $getcookiem=$_COOKIE["cookie"];};
 
        $checkoldpass="SELECT * FROM website WHERE gmail='$getcookiem'";
        $runpass=mysqli_query($connectdb,$checkoldpass);
        if($runpass==true){
            while($my=mysqli_fetch_array($runpass)){
                $oldpasssd=$my['pass'];
                $my['id'];
                $myid=$my['id'];
            }
        }
        
       
    if($oldinc==$oldpasssd){

        if($newinc==$comdinc){
            $update="UPDATE website SET pass='$newinc' WHERE id=$myid";
            $runupdate=mysqli_query($connectdb,$update);
            if($runupdate==true){
                header("location:login.php?pasr");
            }
         
        };


    }else{
        header("location:pass.php?passvul");
    }
    };
  



    ?>