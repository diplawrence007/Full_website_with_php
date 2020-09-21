
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dip Lawrence</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="imgs/logo.png" alt="#" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-links" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-capitalize" id="nav-links">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <a class="nav-link" onclick="return confirm('Are You Sure')" href="delete.php">Delete ID</a>
                        <a class="nav-link" href="pass.php">change pass</a>
                        <a class="nav-link" href="logout.php">Log Out</a>
                        <li class="nav-item search">
                            <a class="nav-link search-link" href=""><i class="fas fa-search"></i></a>
                            <form action="search.php">
                                <input type="search" name="search">
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <header id="home" style="height: 716px;">
            <div class="content">
                <div class="d-flex align-items-center flex-column justify-content-center">
                

                <?php

                session_start();
                if(isset($_SESSION["email"])){
                    if(isset($_SESSION["email"])){
                        $getcookie=($_SESSION["email"]);};

                        $host="localhost";
                        $dbuser="diplawrence";
                        $dbps="jahidul007";
                        $dbname="databasetowebsite";
                        
                        $connectdb=mysqli_connect($host,$dbuser,$dbps,$dbname);
                            if($connectdb==false){
                        
                                echo "database not connect";
                        
                            };
                        
                        $mycookie="SELECT * FROM website WHERE gmail='$getcookie'";
                        $runcookie=mysqli_query($connectdb,$mycookie);
                        if($runcookie==true){
                            while($fcookie=mysqli_fetch_array($runcookie)){?>
                                <div class="" style="width: 31%;padding-bottom: 123px;padding-top: 128px;">
                                    <h2><?php echo $fcookie["fname"]." ".$fcookie["lname"];?></h2>
                                    <h3><?php echo $fcookie["gmail"];?></h3>
                                    <img style="border-radius:52px;" width='160px' src='imgs/<?php echo $fcookie["avatar"]; ?>' alt=''/>
                                
                                </div>
                        <?php };
                        };
                    }else{
                        header("location:login.php");
                    }
                    ?>
                </div>
            </div>
  
     </header>
        
        <div class="about" id="about">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="img"><img src="imgs/pawel.jpg"></div>
                </div>
                <div class="col-lg-6 col-12 text-right">
                    <div class="about-child">
                        <h2 class="text-uppercase"><span>abo</span>ut us</h2>
                        <p>Get full range of premium Industrial services for your business</p>
                        <p>Hey Everyone My Name Is DIP Lawrence.I Am A CSE Student.EveryDay I Try To Learn New Things.This Is My First Project PHP But 3 Years Ago I Learned Web Design </p>
                        <a href="#"><i class="fas fa-long-arrow-alt-left fa-2x"></i><span>Read more</span></a>
                    </div>
                </div>
            </div>
        </div>
 
        <footer>
            <div class="container">
              
                <ul class="social-media">
                    <li><a href="#"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter-square fa-2x"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-square fa-2x"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin fa-2x"></i></a></li>
                </ul>
                <div class="copyright">
                    <p>This Is My First Project</p>
                </div>
            </div>
        </footer>    
            
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(function () {
                
                'use strict';
                
                var winH = $(window).height();
                
                $('header, .slide').height(winH);
                
                $('.navbar a.search-link').on('click', function () {
                    $(this).siblings('form').fadeToggle();
                });
                
                $('.navbar ul.navbar-nav li a, footer ul.main-list li a').on('click', function (e) {
                    
                    var getAttr = $(this).attr('href');
                    
                    e.preventDefault();
                    $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
                });
            });
        </script>
    </body>
</html>