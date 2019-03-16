<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Divisima | eCommerce Template</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
		<?php include"Views/layouts/header.php";?>
	<!-- Header section end -->

	<!-- checkout section  -->
<section class="checkout-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 order-2 order-lg-1">
					<div class="checkout-form">
						<div class="cf-title">Information Oder Cart</div>
						
						<div class="row address-inputs">
							<div class="col-md-12">
								<input type="text" placeholder="Fullname" id="fullname">
								<input type="text" placeholder="Address" id="address">
								<input type="text" placeholder="Email" id="email">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Zip code" id="zipcode">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Phone" id="phone">
							</div>
						</div>
						
						<button class="site-btn submit-order-btn"  id="place_order">Place Order</button>
					</div>
				</div>
				<div class="col-lg-4 order-1 order-lg-2">
					<div class="checkout-cart">
						<h3>Check Your Cart</h3>
						<ul class="price-list">
						<?php
							$cart = $_SESSION['giohang'];
							$total_cart = 0;
							foreach($cart as $key => $value){
								$total_cart += $value['thanhtien'];
							}
						?>
							<li>Total<span>$<?php echo number_format($total_cart);?></span></li>
							<li>Shipping<span>free</span></li>
							<li class="total">Total<span>$<?php echo number_format($total_cart);?></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- checkout section end -->




	<!-- Footer section -->
		<?php include"Views/layouts/footer.php";?>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/giohang.js"></script>
	<script src="js/checkout.js"></script>
	</body>
</html>






