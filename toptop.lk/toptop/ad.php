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
		<title>Job Listing</title>

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
						<div class="col-lg-9 post-list1">
								<!-- carousel begining -->
								<div class="container">
									<div class="row justify-content-center d-flex">
										<div class="col-lg-12 post-list p-3">
											<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              					<ol class="carousel-indicators">
                					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
												</ol>
               					<div class="carousel-inner" role="listbox">
                  				<div class="carousel-item active">
                    				<div class="img"><img class="d-block img-fluid" src="https://ymimg1.b8cdn.com/resized/article/5955/pictures/4283405/listing_main_Mercedes_Benz__C_Class__1_.jpg" alt="First slide"></div>
													</div>
    										<div class="carousel-item ">
      									<div class="img"><img class="d-block img-fluid" src="https://ymimg1.b8cdn.com/resized/article/5955/pictures/4283405/listing_main_Mercedes_Benz__C_Class__1_.jpg" alt="Second slide"></div>
    										</div>
    										<div class="carousel-item">
      										<div class="img"><img class="d-block img-fluid" src="https://ymimg1.b8cdn.com/resized/article/5955/pictures/4283405/listing_main_Mercedes_Benz__C_Class__1_.jpg" alt="Third slide"></div>
													</div>
  											</div>
  												<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    												<span class="sr-only">Previous</span>
													</a>
												<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    											<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
  											</a>
											</div>
										
											<div class="details p-2">
												<i class="fa fa-clock-o" aria-hidden="true"></i><span class="details"> &nbsp October 6,  2022 &nbsp 6:21 am &nbsp</span>
												<i class="fa fa-map-marker" aria-hidden="true"></i><span class="details"> &nbsp Mathara </span>
											</div>
											<div class="price">
												<div class="price_int"><span>RS 25,500,000 </span>
												<span class="overvw_price"> Used &nbsp, &nbsp BMW &nbsp , &nbsp 2 Series &nbsp ,&nbsp 24600Km</span></div>
											</div>
											
											<div class="col-lg-12 discription">
											
												<div class="container">
													<div class="row">
														<h5 id="v_name-1"  >Mercedes Benz C200 AMG line PREMIUM PLUS package 2019</h5>
													
														<div class="col-lg-8 post-list2 ">
																<ul1 style="list-style-type: square ;">   
																		<li class="im_dis">
																			<span><h7 style="font-size: 17px ">FIRST OWNER </h7></span>
																		</li>
																		<li >
										
																			<span><h7 style="font-size: 17px ">IMPORTED BRAND NEW </h7></span>
																		</li>
									
																</ul1>
																<ul2 >
																		<li class="dis">
																			<span ><strong>Front heated seats</strong></span>
																		</li>
																		<li class="dis1">
																			<span ><strong>Front heated seats</strong></span>
																		</li>
																		<li class="dis1">
																			<span ><strong>Front heated seats</strong></span>
																		</li>
																		<li class="dis1">
																			<span ><strong>Front heated seats</strong></span>
																		</li>
																		<li class="dis1">
																			<span ><strong>Front heated seats</strong></span>
																		</li>
																		<li class="dis1">
																			<span ><strong>Front heated seats</strong></span>
																		</li>
																		<li class="dis1">
																			<span ><strong>Front heated seats</strong></span>
																		</li>
																		<li class="dis1">
																			<span ><strong>Front heated seats</strong></span>
																		</li>
																		<li class="dis1">
																			<span ><strong>Front heated seats</strong></span>
																		</li>
																		<li class="dis1">
																			<span ><strong>Front heated seats</strong></span>
																		</li>
																		<li class="dis1">
																			<span ><strong>Front heated seats</strong></span>
																		</li>
																		<li class="dis1">
																			<span ><strong>Front heated seats</strong></span>
																		</li>
																		<li class="dis1">
																			<span ><strong>Front heated seats</strong></span>
																		</li>
																		<li class="dis1">
																			<span ><strong>Front heated seats</strong></span>
																		</li>
																		<li class="dis1">
																			<span ><strong>Front heated seats</strong></span>
																		</li>
																		<li class="dis1">
																			<span ><strong>Front heated seats</strong></span>
																		</li>
																		
																		

																		
														   	
																   
																	<li class="discription">
												
																		<span><h7 id="discript_base-1" >NEGOTIATIONS AFTER INSPECTION ONLY </h7></span>
																	</li>
																	<li>
												
																		<span><h7 id="discript_base-1" >SERIOUS BUYERS ONLY </h7></span>
																	</li>
											
																</ul2>
														
										        </div>
														
											      <div class="col-lg-4 post-list pt-4">

															<h4 class="over">Overview</h4>
															<button class="Overview"></button>
															<ul1 >   
																<li>
										
																	<span class="bol-text">Condition:</span>
																	<span>Used</span>
																</li>
																<li>
																<span class="bol-text">Brand : </span>
																	<span>BMW</span>
																</li>
																<li>
																<span class="bol-text">BMW Model : </span>
																	<span> 2 Series</span>
																</li>
																<li>
																<span class="bol-text">Kilometers Run :  </span>
																	<span>24600</span>
																</li>
																
									
															</ul1>
															<div class="col-lg- post-list pt-5">
																<table class="table">
      
        													<tr>
         														 <td ><span><i class="fa fa-eye" aria-hidden="true"></i></span><span> &nbsp 27 views<span></td>
          
       														 </tr>
      
      
        													<tr>
         														 <td ><i class="fa fa-heart-o" aria-hidden="true"></i> &nbsp Add to Favourites</td>
          
      														</tr>
        													<tr>
          													<td ><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp Report Abuse</td>
          
        													</tr>
        													<tr>
         													  <td ><i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp Share this Ad:</td>
          
        													</tr>
      
    														</table>
																<a href="#" class="fa fa-facebook"></a>
																<a href="#" class="fa fa-twitter"></a>
																<a href="#" class="fa fa-linkedin"></a>
																<a href="#" class="fa fa-whatsapp"></a>
																
																
															</div>
										        </div>
											
									        </div>
								        </div>
							        </div>
											<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d35818.719732048536!2d-4.25169!3d55.868392!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488815562056ceeb%3A0x71e683b805ef511e!2sGlasgow%2C+Glasgow+City%2C+UK!5e0!3m2!1sen!2sus!4v1448625188752" width="100%" height="300" frameborder="0" style="border:0 width:100px height:100px"  allowfullscreen></iframe>
                       
										</div>
									</div>
									
								</div>
								
									
								
							<!-- carousel end -->
							
							
							
							
																					
						</div>
						<div class="col-lg-3 sidebar">
							<div class="single-slidebar">
								<h5>Seller Information</h5>
								<table class="table">
									<tr>
										<div class="seller_name">
										<th><span class="seller_name">udara gunawardana</span></th>
										</div>
										
										
									</tr>
									
								</table>
								
										<span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="location2" >42/B1,Aladeniya</span><br><span class="location1">werellagama,</span><br><span class="location1">Kandy</span></span><br>
									
										<button class="call"><i class="fa fa-phone" aria-hidden="true"></i> 076-2259801</button>
										<button class="chat"><i class="fa fa-comments" aria-hidden="true"></i> &nbsp Chat</button>
										<button class="email"><i class="fa fa-envelope" aria-hidden="true"></i></i>&nbsp Email to Seller</button>
										
  

							</div>								
							<div class="col-lg-12 sidebar p-3 " >
							<div class="single-slidebar">
								<h4>Ads</h4>
								<div class="active-relatedjob-carusel">
									<div class="single-rated">
										<img class="img-fluid" src="img/r1.jpg" alt="">
										
									</div>
									<div class="single-rated">
										<img class="img-fluid" src="img/r1.jpg" alt="">
										
										
									</div>
									<div class="single-rated">
										<img class="img-fluid" src="img/r1.jpg" alt="">
										
									</div>																		
								</div>
							</div>
							
								
						</div>
						<div class="col-lg-12 sidebar p-1 " >
							<div class="single-slidebar">
								<h4>Ads</h4>
								<div class="active-relatedjob-carusel">
									<div class="single-rated">
										<img class="img-fluid" src="img/r1.jpg" alt="">
										
									</div>
									<div class="single-rated">
										<img class="img-fluid" src="img/r1.jpg" alt="">
										
									</div>
									<div class="single-rated">
										<img class="img-fluid" src="img/r1.jpg" alt="">
										
									</div>																		
								</div>
							</div>
												
						<!-- carousel end 
							<div class="single-slidebar">
								<h4>Jobs by Category</h4>
								<ul class="cat-list">
									<li><a class="justify-content-between d-flex" href="category.html"><p>Technology</p><span>37</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Media & News</p><span>57</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Goverment</p><span>33</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Medical</p><span>36</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Restaurants</p><span>47</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Developer</p><span>27</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Accounting</p><span>17</span></a></li>
								</ul>
							</div>
							-->
							<div class="single-slidebar">
								<h4>Carrer Advice Blog</h4>
								<div class="blog-list">
									
									
									<div class="single-blog " style="background:#000 url(img/blog1.jpg);">
										<a href="single.html"><h4>Home Audio Recording <br>
										For Everyone</h4></a>
										<div class="meta justify-content-between d-flex">
											<p>
												02 Hours ago
											</p>
											<p>
												<span class="lnr lnr-heart"></span>
												06
												 <span class="lnr lnr-bubble"></span>
												02
											</p>
										</div>
									</div>																		
								</div>
							</div>							

						</div>
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



