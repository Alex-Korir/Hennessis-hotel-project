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
    <link rel="stylesheet" href="./css/projo.css">
    <link rel="stylesheet" href="./css/services.css">
    <link rel="stylesheet" href="./css/contact.css">
    <title>Hennessis</title>
</head>
<body>
    <section class="section-one">
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
                        <li><a href="index.php"> Home</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li id="account"><a target="_blank" href=<?php echo $log?>></a><?php echo $log?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="center-container">
            <p><span>HENNESSIS HOTEL</span></p>
            <h1>TALK TO US</h1>
        </div>
    </section>
    <section class="section-two">
        <div class="cont-cont">
            <div class="imgone">

            </div>
            <div class="form">
                <form action="">
                    <h4 class="titlemessage">Our Address</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel neque, in adipisci rem porro minima.</p>

                    <div class="info">
                        <input type="text" placeholder="Name" class="inpat">
                    </div> 
                    <div class="info">
                        <input type="email" placeholder="Email" class="inpat">
                    </div>
                    <div class="info">
                        <textarea name="Message" id="message" placeholder="Message" class="messo"></textarea>
                    </div>
                    <div class="info">
                        <input type="submit" value="SEND" class="sending">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer id="footer" class="footer-cls">
		<div class="containerr">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p><small>&copy; 2022 The Hennessis Hotel Website. <br>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<h3>Company</h3>
							<ul class="link">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Hotels</a></li>
								<li><a href="#">Customer Care</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3>Our Facilities</h3>
							<ul class="link">
								<li><a href="#">Resturant</a></li>
								<li><a href="#">Bars</a></li>
								<li><a href="#">Pick-up</a></li>
								<li><a href="#">Swimming Pool</a></li>
								<li><a href="#">Spa</a></li>
								<li><a href="#">Gym</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<h3>Subscribe</h3>
							<p>Sed cursus ut nibh in semper. Mauris varius et magna in fermentum. </p>
							<form action="#" id="form-subscribe">
								<div class="form-field">
									<input type="email" placeholder="Email Address" id="email">
									<input type="submit" id="submit" value="Send">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>