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
					<li class="active"><a href="products.php">Product</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="shopping.php">Shopping Cart</a></li>
					<li><a href="rate.php">Rate</a></li>
					
					<?php }else{?>
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="products.php">Product</a></li>
						<li><a href="news.php">News</a></li>
					<?php }?>
					
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->




	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Shop</h1>
					<p>A Bunch Of Products</p>
				</div>	<!-- End of /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="index.php">Home</a></li>
					  	<li class="active">Product</li>
					</ol>
				</div>	<!-- End of /.col-md-8 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Topic-header -->



	<!-- PRODUCTS Start
    ================================================== -->
  
	<section id="shop">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="products-heading">
						<h2>NEW PRODUCTS</h2>
					</div>	<!-- End of /.Products-heading -->
					
					<!-- Ambil gambar dari database -->
					<?php
						include 'koneksi.php';
						$getImage=mysqli_query($con, "SELECT * FROM tb_produk ORDER BY tahun asc") or die("Could not retrieve image: " .mysqli_error($conn));
						while($row_img =mysqli_fetch_assoc($getImage)) {
					?>
					<div class="col-md-3">
						<ul>
						<?php if(isset($_SESSION['status'])==true){?>
					        <li>
					            <div class="products" >
								<form method="post" action="detail-product.php?action=add&id=<?php echo $row_img["id_produk"]; ?>">
								<input type="image" src="<?php echo $row_img["gambar"]; ?>" alt="Submit"  class="img-responsive">
								</form>
								<form method="post" action="shopping.php?action=add&id=<?php echo $row_img["id_produk"]; ?>">  
									<div style="border-radius:5px; padding:16px;">  
										<h5 class="text-info"><?php echo $row_img["tipe_iphone"]; ?></h5>
										<h5 class="text-thn"><?php echo $row_img["tahun"]; ?></h5>  
										<h5 class="text-danger">Rp <?php echo number_format($row_img["harga"]); ?></h5>  
										<input type="text" name="quantity" class="form-control" value="1" />  
										<input type="hidden" name="hidden_name" value="<?php echo $row_img["tipe_iphone"]; ?>" />  
										<input type="hidden" name="hidden_price" value="<?php echo $row_img["harga"]; ?>" />  
										<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
									</div>  
								</form>  
								</div>	<!-- End of /.products -->
					        </li>
						<?php }else{?>
							<li>
					            <div class="products" >
								<form method="post" action="detail-product.php?action=add&id=<?php echo $row_img["id_produk"]; ?>">
								<input type="image" src="<?php echo $row_img["gambar"]; ?>" alt="Submit"  class="img-responsive">
								</form>
								<form method="post" action="shopping.php?action=add&id=<?php echo $row_img["id_produk"]; ?>">  
									<div style="border-radius:5px; padding:16px;">  
										<h5 class="text-info"><?php echo $row_img["tipe_iphone"]; ?></h5>
										<h5 class="text-thn"><?php echo $row_img["tahun"]; ?></h5>  
										<h5 class="text-danger">Rp <?php echo number_format($row_img["harga"]); ?></h5>  
					    </ul>
						<?php }?>
					</div>	<!-- End of /.products-grid -->
					<?php
						}
					?>	
				</div>	<!-- End of /.col-md-9 -->
				
				<div class="col-md-3">
					<div class="blog-sidebar">
						<div class="block">
							<h4>News</h4>
							<ul class="media-list">
							 	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="images/artikel2.jpg" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="artikel1.php" class="media-heading">Apple Resmi Rilis iPhone XS dan iPhone XS Max
							      		<!-- <p>Lorem ipsum dolor sit amet.</p></a> -->
							    	</div>
							  	</li>
							  	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="images/artikel.jpg" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="artikel2.php" class="media-heading"> Rilis 2019, iPhone XI akan Pakai 3 Kamera Utama?
							      		<!-- <p>Lorem ipsum dolor.</p></a> -->
							    	</div>
							  	</li>
							  	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="images/artikel3.jpg" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="artikel3.php" class="media-heading">
							      		Apple Kabarnya Berniat Memproduksi Kembali iPhone X
							      		<!-- <p>Lorem ipsum dolor sit.</p> -->
							      		</a>
							    	</div>
							  	</li>
							  </ul>
						</div>
				</div>	<!-- End of /.col-md-3 -->
			
			</div>	<!-- End of /.row -->
	
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->
	
	<!-- Pagination -->
					
		<div class="pagination-bottom">
			<ul class="pagination">
		  		<li class="disabled"><a href="#">&laquo;</a></li>
		  		<li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
			  	<li><a href="#">»</a></li>
			</ul>	<!-- End of /.pagination -->
		</div>


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