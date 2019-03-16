<?php session_start();include "Model/database.php";?>
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
	<script src="js/currency.min.js"></script>
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
		<?php include"Views/layouts/header.php";?>
	<!-- Header section end -->


	<!-- cart section end -->
<section class="cart-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="cart-table">
					<h3>Your Cart</h3>
					<div class="cart-table-warp">
						<table>
						<thead>
							<tr>
								<th class="product-th">Product</th>
								<th class="quy-th">Quantity</th>
								<th class="total-th">Price</th>
								<th class="total-th">Delete</th>
							</tr>
						</thead>
						<tbody class="t_body">
						<?php
							if(isset( $_SESSION['giohang'])){
								$cart = $_SESSION['giohang'];
							}else{$cart = [];}
							
							$total_cart = 0;
							foreach($cart as $key => $value){
							$total_cart += $value['thanhtien'];
						?>
							<tr>
								<td class="product-col">
									<img src="img/product/<?php echo $value['hinh']?>" alt="">
									<div class="pc-title">
										<h4><?php echo $value['tensanpham']?></h4>
										<p>$<?php echo $value['dongia']?></p>
									</div>
								</td>
								<td class="quy-col">
									<div class="quantity">
										<div class="pro-qty">
											<input type="button"data-id_sanpham="<?php echo $value['id_sanpham']?>" class="giam  qtybtn" value="-">
											<input class="input_soluong_<?php echo $value['id_sanpham']?>" type="text" id="input_soluong" value="<?php echo $value['soluong']?>">
											<input type="button" data-id_sanpham="<?php echo $value['id_sanpham']?>" class="tang  qtybtn" value="+">
										</div>
									</div>
								</td>
								<td class="total-col" style="width:100px;"><h4 class="thanhtien_<?php echo $value['id_sanpham']?>">$<?php echo number_format($value['thanhtien'])?></h4></td>
								<td class="total-col"><h4 class="delete_item" data-id_sanpham="<?php echo $value['id_sanpham']?>">x</h4></td>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>
					</div>
					<div class="total-cost">
						<h6>Total <span id="total_cart">$<?php echo number_format($total_cart) ?></span></h6>
					</div>
				</div>
			</div>
			<div class="col-lg-4 card-right">
				<form class="promo-code-form">
					<input type="text" placeholder="Enter promo code">
					<button>Submit</button>
				</form>
				<a href="checkout.php" class="site-btn">Proceed to checkout</a>
				<a href="index.php" class="site-btn sb-dark">Continue shopping</a>
			</div>
		</div>
	</div>
</section>
	<!-- cart section end -->


	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="img/banner-bg.jpg">
				<div class="tag-new">NEW</div>
				<span>New Arrivals</span>
				<h2>STRIPED SHIRTS</h2>
				<a href="#" class="site-btn">SHOP NOW</a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->


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
	</body>
</html>





