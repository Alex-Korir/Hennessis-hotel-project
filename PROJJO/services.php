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
    <link rel="stylesheet" href="./font awesome/css/all.min.css">
    <title>Hennessis</title>
</head>
<body>
    <section class="section-uno">
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li id="account"><a target="_blank" href=<?php echo $log?>></a><?php echo $log?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="center-container">
            <p><span>HENNESSIS HOTEL</span></p>
            <h1>This Are the Sercices we Offer</h1>
            <!-- <button type="submit">Book Now</button> -->
        </div>
    </section>


    <section class="section-2">
        <div class="container-services">
            <div class="col-md-4">
                <div class="services">
                    <span><i class="fab fa-product-hunt"></i></i></span>
                    <div class="desc">
                        <h3>Accessible Location</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services">
                    <span><i class="fa fa-bars fa-2x" aria-hidden="true"></i></span>
                    <div class="desc">
                        <h3>Open 24/7</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services">
                    <span><i class="fa fa-user-circle" aria-hidden="true"></i></i></span>
                    <div class="desc">
                        <h3>Reservation</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services">
                    <span><i class="fa fa-archive" aria-hidden="true"></i></span>
                    <div class="desc">
                        <h3>Friendly Staff</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services">
                    <span><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></span>
                    <div class="desc">
                        <h3>Free Wifi</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services">
                    <span><i class="fas fa-futbol"></i></span>
                    <div class="desc">
                        <h3>Accessible Location</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
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