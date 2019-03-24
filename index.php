<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>iPhone Addict</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Css -->
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

	<!-- jS -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>


</head>
<body>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo '<script>alert("Login gagal! username dan password salah!")</script>';
			// echo
		}else if($_GET['pesan'] == "logout"){
			// echo "Anda telah berhasil logout";
			echo '<script>alert("Logout")</script>';  
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>

<!-- TOP HEADER Start
    ================================================== -->
	<?php session_start();?>
	<section id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<p class="contact-action"><i class="fa fa-phone-square"></i>IN CASE OF ANY QUESTIONS, CALL THIS NUMBER: <strong>+565 975 658</strong></p>
				</div>
				<div class="col-md-2 clearfix">
					<ul class="login-cart">
						<li>
							<?php if(isset($_SESSION['status'])==false){?>
							<a data-toggle="modal" data-target="#myModal" href="#">
							<i class="fa fa-user"></i>
								Login / Register
							</a>
							<?php }else{?>
							<a  href="admin/logout.php">
							<i class="fa fa-user"></i>
								Logout
							</a>
							<?php }?>
						</li>
					</ul>
				</div>
				<div class="col-md-2">
					<div class="search-box">
						<div class="input-group">
						<form class="form-inline" method="post" action="search.php" >
					    	<input name="search" placeholder="Search Here" type="text" class="form-control">
						</form>
					    </div><!--/.input-group-->
					</div><!-- /.search-box -->
				</div>
			</div> <!-- End Of /.row -->
		</div>	<!-- End Of /.Container -->

	
	<!-- MODAL Start
    	================================================== -->

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
		    	<div class="modal-content">
		    		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        		<h4 class="modal-title" id="myModalLabel">Introduce Yourself</h4>
		      		</div>
			      	<div class="modal-body clearfix">

						<form action="register.php" method="post" id="create-account_form" class="std">
							<fieldset>
								<h3>Create your account</h3>
								<div class="form_content clearfix">
									<h4>Enter your e-mail address to create an account.</h4>
									<p class="text">
										<label for="email_create">E-mail address</label>
										<span>
											<input placeholder="E-mail address"  type="text" id="email_create" name="email_create" value="" class="account_input" required>
					                    </span>
									</p>
									<p class="submit" >
										<button class="btn btn-primary" >Create Your Account</button>
									</p>
								</div>
							</fieldset>
						</form>
			      		<form action="login-page.php" method="post" id="login_form" class="std">
							<fieldset>
								<h3>Already registered?</h3>
								<div class="form_content clearfix">
									<p class="text">
									<label for="email">E-mail address</label>
										<span><input placeholder="E-mail address" type="text" id="email" name="email" value="" class="account_input"></span>
									</p>
									<p class="text">
									<label for="passwd">Password</label>
										<span><input placeholder="Password" type="password" id="passwd" name="passwd" value="" class="account_input"></span>
									</p>
									<p class="submit">
										<button class="btn btn-success">Log in</button>
									</p>
								</div>
							</fieldset>
						</form>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      	</div>
		    	</div>
		  	</div>
		</div>	
	</section>  <!-- End of /Section -->
	


	<!-- LOGO Start
    ================================================== -->
	
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#">
						<img src="images/logo.png" alt="logo">
					</a>
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</header> <!-- End of /Header -->

	


	<!-- MENU Start
    ================================================== -->

	<nav class="navbar navbar-default">
		<div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div> <!-- End of /.navbar-header -->

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav nav-main">
				  <?php if(isset($_SESSION['status'])==true){?>
					<li class="active"><a href="#">Home</a></li>
					<li><a href="products.php">Product</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="shopping.php">Shopping Cart</a></li>
					<li><a href="rate.php">Rate</a></li>
					
					<?php }else{?>
						<li class="active"><a href="#">Home</a></li>
						<li><a href="products.php">Product</a></li>
						<li><a href="news.php">News</a></li>
					<?php }?>

		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->


	<!-- SLIDER Start
    ================================================== -->


	<section id="slider-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="slider" class="nivoSlider">
				    	<img src="images/slider.jpg" alt="" />
				    	<img src="images/slider1.jpg" alt=""/>
				    	<img src="images/slider2.jpg" alt="" />
					</div>	<!-- End of /.nivoslider -->
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section> <!-- End of Section -->


	
	<!-- FEATURES Start
    ================================================== -->

	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
						    	<i class="fa fa-ambulance"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Free Shipping</h4>
						    	<p>First order</p>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
								<i class=" fa fa-foursquare"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Rate your phone</h4>
						    	<p>You can rate which iphone is the best</p>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
						    	<i class=" fa fa-phone"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Call Us</h4>
						    	<p>For more information call us at 09.00 - 18.00</p>
						  </div>	<!-- End of /.media-body -->
						</div>	<!-- End of /.media -->
					</div>	<!-- End of /.block -->
				</div> <!-- End of /.col-md-4 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of section -->



	<!-- CATAGORIE Start
    ================================================== -->

	<section id="catagorie">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
							<h2>NEWS</h2>
						</div>	
						<div class="row">
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="artikel1.php">
										<img src="images/artikel2.jpg" alt="...">
										<h3>Apple Resmi Rilis iPhone XS dan iPhone XS Max</h3>
									</a>
							      	<div class="caption">
							        	<p>Setelah dinantikan oleh peminatnya, akhirnya Apple resmi merilis smartphone terbarunya iPhone XS (iPhone Ten S)...</p>
							        	<p>
							        		<a href="artikel1.php" class="btn btn-default btn-transparent" role="button">
							        			<span>Show more</span>
							        		</a>
							        	</p>
							      	</div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="artikel2.php">
										<img src="images/artikel.jpg" alt="...">
										<h3>Rilis 2019, iPhone XI akan Pakai 3 Kamera Utama?</h3>
									</a>
							      	<div class="caption">
							        	<p>TEMPO.CO, Jakarta - Para ahli ponsel seperti Steve Hemmerstoffer @OnLeaks, Ice Universe, dan Venya Geskin...</p>
							        	<p>
							        		<a href="artikel2.php" class="btn btn-default btn-transparent" role="button">
							        			<span>Show more</span>
							        		</a>
							        	</p>
							      	</div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="artikel3.php">
										<img src="images/artikel3.jpg" alt="...">
										<h3>Apple Kabarnya Berniat Memproduksi Kembali iPhone X</h3>
									</a>
							      	<div class="caption">
								        <p>Nasib iPhone X sama seperti iPhone 5; umurnya cuma setahun. Ketika suksesornya muncul, seketika...</p>
								        <p>
								        	<a href="artikel3.php" class="btn btn-default btn-transparent" role="button">
								        		<span>Show more</span>
								        	</a>
								        </p>
								    </div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						</div>	<!-- End of /.row -->
					</div>	<!-- End of /.block --> 
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->



	
		<!-- PRODUCTS Start
    ================================================== -->
	<section id="products">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="products-heading">
						<h2>Popular Items</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="products">
					
							<img src="assets/IPhone_7.png" alt="">
						
							<h4>iPhone 7</h4>
						
						<p class="price">Rp 4.200.000</p>
						<a class="view-link shutter" href="products.php">View Detail</a>
					</div>	<!-- End of /.products -->
				</div>	<!-- End of /.col-md-3 -->

				<div class="col-md-1">
					<div class="products"> 
					</div>	<!-- End of /.products -->
				</div>	<!-- End of /.col-md-3 -->

				<div class="col-md-2">
					<div class="products">
					
							<img src="assets/150px-IPhone_X.png" alt="">
					
							<h4>iPhone X</h4>
						<p class="price">Rp 11.440.000</p>
						<a class="view-link shutter" href="products.php">View Detail</a>
					</div>	<!-- End of /.products -->
				</div>	<!-- End of /.col-md-3 -->
				
				<div class="col-md-1">
					<div class="products"> 
					</div>	<!-- End of /.products -->
				</div>	<!-- End of /.col-md-3 -->

				<div class="col-md-2">
					<div class="products">
							<img src="assets/150px-IPhone_8.png" alt="">
							<h4>iPhone 8</h4>
						
						<p class="price">Rp 8.750.000</p>
						<a class="view-link shutter" href="products.php">View Detail</a>
					</div>	<!-- End of /.products -->
				</div>	<!-- End of /.col-md-3 -->
				
				<div class="col-md-1">
					<div class="products"> 
					</div>	<!-- End of /.products -->
				</div>	<!-- End of /.col-md-3 -->

				<div class="col-md-2">
					<div class="products">
							<img src="assets/150px-IPhone_6s_Rose.png" alt="">
							<h4>iPhone 6s</h4>
						<p class="price">Rp 4.099.000</p>
						<a class="view-link shutter" href="products.php">View Detail</a>
					</div>	<!-- End of /.products -->
				</div>	<!-- End of /.col-md-3 -->

			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->


		

	<!-- FOOTER Start
    ================================================== -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block clearfix">
						<a href="#">
							<img src="images/footer-logo.png" alt="">
						</a>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
						</p>
						<h4 class="connect-heading">CONNECT WITH US</h4>
						<ul class="social-icon">
							<li>
								<a class="facebook-icon" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="plus-icon" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
							<li>
								<a class="twitter-icon" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="pinterest-icon" href="#">
									<i class="fa fa-pinterest"></i>
								</a>
							</li>
							<li>
								<a class="linkedin-icon" href="#">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						</ul>	<!-- End Of /.social-icon -->
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of /.Col-md-4 -->
				<div class="col-md-4">
					<div class="block">
						<h4>GET IN TOUCH</h4>
						<p ><i class="fa  fa-map-marker"></i> <span>Food Code d.o.o.,</span>1000 Ljubljana Celovska cesta 135, Slovenia</p>
						<p> <i class="fa  fa-phone"></i> <span>Phone:</span> (+386) 40 123 456 </p>

						<p> <i class="fa  fa-mobile"></i> <span>Mobile:</span> (+386) 40 654 123 651</p>
 
						<p class="mail"><i class="fa  fa-envelope"></i>Eamil: <span>info@sitename.com</span></p>
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
			</div> <!-- End Of /.row -->
		</div> <!-- End Of /.Container -->
		


	<!-- FOOTER-BOTTOM Start
    ================================================== -->

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="copyright-text pull-right">Food Code @2013 Designed by <a href="http://www.themexpert.com">Themexpert</a> All Rights Reserved</p>
					</div>	<!-- End Of /.col-md-12 -->	
				</div>	<!-- End Of /.row -->	
			</div>	<!-- End Of /.container -->	
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->
	
	<a id="back-top" href="#"></a>
</body>
</html>