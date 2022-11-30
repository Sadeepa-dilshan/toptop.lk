	<?php
	include_once 'connection.php';

	if(isset($_GET['id']) && $_GET['id']!=0){
		$postid =$_GET['id'];
		$sql = "SELECT * FROM posts WHERE postid = $postid";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
				$title = $row["Title"];
				$SmallDes = $row["small_description"];
				$DesLong1 = $row["description1"];
				$DesLong2 = $row["description2"];
			}
		}else {
		
			header('Location: 404.html');
		}
	}else{
		header('Location: 404.html');
	}
	?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>login</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/ads.css">
			<link rel="stylesheet" href="css/login.css">
		</head>
		<body>

			<!-- Main nav bar -->
			<?php include_once 'navigation.php' ?>	

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">Ad</h1>	
							<p class="text-white link-nav"><a href="index.html">Home</a><span class="lnr lnr-arrow-right"></span>  <a href="category.html"> All Ads</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start post Area -->
			<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<form class="row g-3">
						<div class="col-md-12">
							<div class="title1">
								<span class="title">Register To Advertise Your Vehicle Free!
							</div>

							</div>
						
							<div class="col-ld-6">
								<label for="First_Name" class="form-label">Name</label>
								<input type="Text" class="form-control" id="First_Name">
							</div>
							<div class="col-ld-6">
								<label for="Last_Name" class="form-label">Mobile number</label>
								<input type="text" class="form-control" id="Last_Name">
							</div>
							<div class="col-ld-6">
							   <select class="form-select" aria-label="Default select example">
                                   <option selected>Open this select menu</option>
								   <option value="1">One</option>
								   <option value="2">Two</option>
						           <option value="3">Three</option>
              					</select>
							</div>
						
							<div class="col-md-6">
								<label for="inputPassword1" class="form-label">Password</label>
								<input type="password" class="form-control" id="inputPassword1">
							</div>
							<div class="col-md-6">
								<label for="inputPassword2" class="form-label">Re-Enter Password</label>
								<input type="password" class="form-control" id="inputPassword2">
							</div>
							<div class="col-md-6">
								<label for="telephone1" class="form-label">telephone No1</label>
								<input type="text" class="form-control" id="telephone1">
							</div>
							<div class="col-md-6">
								<label for="telephone2" class="form-label">telephone No2</label>
								<input type="text" class="form-control" id="telephone2">
							</div>
							<div class="col-12">
								<label for="inputAddress" class="form-label">Address</label>
								<input type="text" class="form-control" id="inputAddress" placeholder="1234/A Main St">
							</div>
							<div class="col-12">
								<label for="inputAddress2" class="form-label">Address 2</label>
								<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, floor">
							</div>
							<div class="col-md-4">
							<label for="inputState" class="form-label">Province</label>
								<select id="inputState1" class="form-select">
								<option selected>Choose...</option>
								<option>Kandy</option>
								<option>colombo</option>
								</select>
							</div>
							<div class="col-ld-4">
								<label for="inputState" class="form-label">Province</label>
								<select id="inputState2" class="form-select">
								<option selected>Choose...</option>
								<option>Kandy</option>
								<option>colombo</option>
								</select>
							</div>
							<div class="col-md-4">
								<label for="inputZip" class="form-label">Zip</label>
								<input type="text" class="form-control" id="inputZip">
							</div>
							<div class="col-12">
								<div class="form-check">
								<input class="form-check-input" type="checkbox" id="gridCheck">
								<label class="form-check-label" for="gridCheck">
									Agree terms and conditions
								</label>
								</div>
							</div>
							<div class="col-12">
								<button type="submit" class="btn btn-primary">Sign in</button>
							</div>
						</form>
					</div>
				</div>	
			</section>
			<!-- End post Area -->


			<!-- Start callto-action Area -->
			<section class="callto-action-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Join us today without any hesitation</h1>
								<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
								<a class="primary-btn" href="#">I am a Candidate</a>
								<a class="primary-btn" href="#">We are an Employer</a>
							</div>
						</div>
					</div>	
				</div>	
			</section>
			<!-- End calto-action Area -->

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container pt-5">
					<div class="row">
					    <div class="col-lg-4  col-md-12">
							<div class="single-footer-widget ">
							<h1 class="text-light">TOPTOP.LK</h1>
								<ul class="footer-nav">
									<li><a href="#">About us</a></li>
									<li><a href="#">Terms of Service</a></li>
									<li><a href="#">Privacy Policy</a></li>
									
								</ul>
								
									
									
								
								
							</div>
						</div>		
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget">
								<h6 class="font-weight-bold text-success">Information</h6>
								<ul class="footer-nav">
									<li><a href="#">About us</a></li>
									<li><a href="#">Terms of Service</a></li>
									<li><a href="#">Privacy Policy</a></li>
									
								</ul>
							</div>
						</div>
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget">
								<h6 class="font-weight-bold text-success">Help & Support</h6>
								<ul class="footer-nav">
									
									<li><a href="#">Contact Us</a></li>
									
									<li><a href="#">FAQ</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2  col-md-12">
							<div class="single-footer-widget">
								<h6 class="font-weight-bold text-success">Top List</h6>
								<ul class="footer-nav">
									
									<li><a href="#">Car</a></li>
									<li><a href="#">Motorcycle</a></li>
									<li><a href="#">three wheels</a></li>
									<li><a href="#">Van</a></li>
								</ul>
							</div>
						</div>
						
										
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with  by <a href="#" target="_blank">Flexycode</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->			

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
			
		</body>
	</html>



