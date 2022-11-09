<?php
include '../settings/core.php';
require '../controllers/product_controller.php';

// $custid = $_GET['customer_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Products</title>

	<link rel="stylesheet" href="../css/allproduct.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>

<body>


	<div>
		<h1>Products Available</h1>
		<div class="container">
			<div class="col-xs-12 col-md-6 bootstrap snippets bootdeys">
				<!-- product -->

				<?php 
				$datafound = select_all_products_ctr(); 
				
				foreach ($datafound as $item) { ?>

					<div class="product-content product-wrap clearfix">
						<div class="row">
							<div class="col-md-5 col-sm-12 col-xs-12">
								<div>
									<img id="img1" width="300" height="300" style='border-radius: 8px' src="<?php echo $item['product_image']; ?>" alt="" srcset="">
								</div>
							</div>
							<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
									<h5 class="name">
										<div>
											<?php
											echo 'Title:';
											echo $item['product_title'];
											?>
										</div>

									</h5>
									<div>
										<?php
										echo '$';
										echo $item['product_price'];
										?>
									</div>
									<div>
										<?php
										echo 'Description:  ';
										echo $item['product_desc'];
										?>
									</div>
								</div>
								<div class="product-info smart-form">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<a href="javascript:void(0);" class="btn btn-success">Add to cart</a>
											<?php 
											echo "
											<a href='../view/single_product.php?product_id={$item['product_id']}' class='btn btn-success'>View product</a>
											";
											?>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
			</div>
			<div>
			<?php } ?>



			</div>

</body>

</html>