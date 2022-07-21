<?php
    session_start();

    if(isset($_SESSION['name'])){
        $log="Log-Out";
        $url="logout.php";
    }
    else{
        $log="Log-In";
        $url="marv.php";
    }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hennessis</title>
    <link rel="stylesheet" href="./css/projo.css">
</head>
<body>
    <section class="section-1" id="section-bg">
        <div class="container">
            <div class="cow">
                <div class="navlinks">
                    <div class="logo">
                        <h2>HEN<span>NES</span>sis</h2>
                    </div>
                    <a href="#" class="phone">
                        <i class="fa fa-bars fa-2x" aria-hidden="true" id="menu" onclick="toogle()"></i>
                    </a>
                    <ul id="nav" class="links zombie" >
                        <li class="buff" id="exit">
                            <i class="fa fa-times fa-1x" aria-hidden="true" id="exit"></i>
                        </li>
                        <li><a href="./index.php">Home</a> </li>
                        <li><a href="./services.php">Services</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                        <li id="account"><a href=<?php echo $url?>><?php echo $log?></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>
</html>