<?php
include ("../settings/core.php");
require("../controllers/product_controller.php");

$product_id = $_GET['product_id'];
$product = select_one_product_ctr($product_id);


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Single Product</title>

	<link rel="stylesheet" href="../css/index.css">
	<link rel="stylesheet" href="../css/allproduct.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>

<body>

	<nav>
		<div class="nav-wrapper">
			<a href="#" class="brand-logo">Revamp'D</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<?php
					if(check_login()==false){
						header('location:../index.php');
					}

					else{
						?>
						<li><a href="../view/all_product.php" class="home-button">All products</a></li>
						<li><a href="../view/cart.php" class="home-button">View Cart</a></li>
						<li><a href="../view/product_search_result.php" class="home-button">Search</a></li>
						<li><a href="../Login/logout.php" class="home-button">Logout</a></li>
						<?php
					}
				?>

			</ul>
		</div>
	</nav>

	<div>
				
				<h1>Products</h1>
				
				<div class="product-content product-wrap clearfix">
					<div class="row">
						<div class="col-md-5 col-sm-12 col-xs-12">
							<div>
								<img id="img1" width="300" height="300" style='border-radius: 8px' src="<?php echo $product['product_image']; ?>" alt="" srcset="">
							</div>
						</div>
						<div class="col-md-7 col-sm-12 col-xs-12">
							<div class="product-deatil">
								<h5 class="name">
									<div>
										<?php
										echo 'Title:';
										echo $product['product_title'];
										?>
									</div>

								</h5>
								<div>
									<?php
									echo 'GHS';
									echo $product['product_price'];
									?>
								</div>
								<div>
									<?php
									echo 'Description:  ';
									echo $product['product_desc'];
									?>
								</div>
							</div>
							<div class="product-info smart-form">
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-6">
									<a href="../actions/add_to_cart.php?product_id=<?php echo $product['product_id']?>" class='btn btn-success'>Add to cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
</body>

</html>