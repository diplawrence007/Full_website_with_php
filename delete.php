<?php
session_start();
session_destroy();


$host="localhost";
$dbuser="diplawrence";
$dbps="jahidul007";
$dbname="databasetowebsite";

$connectdb=mysqli_connect($host,$dbuser,$dbps,$dbname);
    if($connectdb==false){

        echo "database not connect";

    };
    
    if(isset($_COOKIE["cookie"])){
        $getcookieg=$_COOKIE["cookie"];};

    $mycookie="SELECT * FROM website WHERE gmail='$getcookieg'";
    $runcookie=mysqli_query($connectdb,$mycookie);
    if($runcookie==true){
        while($fcookie=mysqli_fetch_array($runcookie)){
            $deleteid=$fcookie['id'];

        } }

    $dltquery ="DELETE FROM website WHERE id=$deleteid";
    $rundltquery=mysqli_query($connectdb,$dltquery);
    if($rundltquery==true){
        header("location:index.php?delete");

    };


?>
