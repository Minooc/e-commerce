<!DOCTYPE HTML5>
<?php
include("functions/functions.php");

?>
<html>
	<head>
		<title>My Online Shop</title>
		
	<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>
	
<body>

	<!--Main Container starts here-->
	<div class="main_wrapper">
	
		<!--Header starts here-->
		<div class="header_wrapper">
		
			<img id="logo" src="images/logo.gif" />
			<img id="ad_banner" src="images/ad_banner.gif" />
		
		</div>
		<!--Header ends here-->
		
		

		<!--Navigation bar starts here-->
		<div class="menubar">
		
			<ul id="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">All Products</a></li>
				<li><a href="#">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			
			<div id="form">
				<form method="get" action="result.php" enctype="multipart/form-data">
				
					<input type="text" name="user_query" placeholder="Search a Product" />
					<input type="submit" name="search" value="Search" />
				</form>
		
			</div>
		</div>
		<!--Navigation bar ends here-->
	
	
		<!--Content wrapper starts here-->
		<div class="content_wrapper">
		
			<!-- sidebar starts here-->
			<div id="sidebar">
			
				<div id="sidebar_title">Categories</div>
				
				<ul id="cats">
				
					<?php getCats(); ?>
					
				</ul>
				
				<div id="sidebar_title">Brands</div>
				
				<ul id="cats">
				
					<?php getBrands(); ?>
					
				</ul>
			
			</div>
			<!-- sidebar ends here-->
	
	
			<!-- content area starts here-->
			<div id="content_area">
			
				<div id="shopping_cart">
					<span style="float:right; font-sizeL18px; padding:5px; line-height:40px;">
					
					Welcome Guest! <b style="color:yellow">Shopping Cart - </b>Total Items: Total Price: <a href="cart.php" style="color:yellow;">Go to cart</a>
					
					
					</span>
					
				</div>
				
				<div id="products-box">
				
					<?php getPro(); ?>
				
				</div>
			
			</div>
			<!-- content area ends here-->
			
			
			
			<div id="footer">
			
				<h2 style="text-align:center; padding-top:30px;">&copy; 2014 by www.OnlineTuting.com</h2>
			
			</div>
			
		</div>
		<!--Content wrapper ends here-->
	
		
	
	</div>

	<!--Main Container ends here-->








</body>
</html>