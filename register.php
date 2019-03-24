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


<!-- TOP HEADER Start
    ================================================== -->
	
	<section id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<p class="contact-action"><i class="fa fa-phone-square"></i>IN CASE OF ANY QUESTIONS, CALL THIS NUMBER: <strong>+565 975 658</strong></p>
				</div>
				<div class="col-md-3 clearfix">
					<ul class="login-cart">
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
	</section>  <!-- End of /Section -->
	


	<!-- LOGO Start
    ================================================== -->
	
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="index.php">
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
					<li ><a href="index.php">Home</a></li>
					<li><a href="products.php">Product</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="shopping.php">Shopping Cart</a></li>
					<li><a href="rate.php">Rate</a></li>
					
					<?php }else{?>
						<li><a href="index.php">Home</a></li>
						<li><a href="products.php">Product</a></li>
						<li><a href="news.php">News</a></li>
					<?php }?>
					
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->



<!-- breadcrumb Start
    ================================================== -->
	
	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Registration Form</h1>
					<p></p>
				</div>	<!-- /.col-md-4 -->
			</div>	<!-- /.row -->
		</div>	<!-- /.container-->
	</section><!-- /Section -->

<?php 
$email = $_POST["email_create"];
?>
	<section id="single-product">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
				</div>	
				<div class="col-md-8">
					<div class="single-product-img">
                    <form action="register-page.php" method="post" id="create-account" class="std">			 
                            <div class="form-group">
                            <label for="nama">Name:</label>
                            <input name="name" type="text" class="form-control" id="name" required>
                        </div>
                    <div class="form-group">
                    <label for="email">Email address:</label>
                    <input name="email" type="email" class="form-control" id="email" value=<?php echo $email ?>>
                    </div>
                    <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input name="pwd" type="password" class="form-control" id="pwd" required>
                    </div>
                    <div class="form-group">
                            <label for="address">Address:</label>
                            <input name="address" type="text" class="form-control" id="address">
                    </div>
					<button type="submit" class="btn btn-success">Submit</button>
					<button type="submit" class="btn btn-default" onclick="history.back();" >Cancel</button>
                </form> 
						</div>
		    </div> <!-- End of /.col-md-2 -->
 		</div>	<!-- End of /.row -->
			<div class="row">
				<div class="col-md-3">
					<div class="blog-sidebar">
						<div class="block">
						</div> <!-- End of /.block -->
					</div>	<!-- End of /.blog-sidebar -->
				</div>	<!-- End of /.col-md-3 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.Container -->
	</section> <!-- End of /.Single-product -->


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
						<ul class="cash-out pull-left">
						</ul>
						<p class="copyright-text pull-right">Food Code @2013 Designed by <a href="http://www.themexpert.com">Themexpert</a> All Rights Reserved</p>
					</div>	<!-- End Of /.col-md-12 -->	
				</div>	<!-- End Of /.row -->	
			</div>	<!-- End Of /.container -->	
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->
	
	<a id="back-top" href="#"></a>
</body>
</html>