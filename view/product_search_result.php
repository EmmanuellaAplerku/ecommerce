<?php
	include "../settings/core.php";	
    include ("../controllers/product_controller.php");
   
	if(isset($_POST['searchtitle'])){
		// echo "it works";
		$term=$_POST['search'];
		$item=search_product($term);
		// print_r($item);
	}
   
?>


	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<!-- Compiled and minified CSS -->
        
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="stylesheet" href="css/admin.css">
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
						
						<li><a href="cart.php" class="home-button">View Cart</a></li>
						
						<li><a href="../Login/logout.php" class="home-button">Logout</a></li>
						<?php

					}
					if(isset($_SESSION['role'])==1){
					?>

					<li><a href="all_product.php">All Products</a></li>

					<?php 

					}
					else{
					?>
						
						<li>
						<form action="../actions/product_functions.php" method= 'get'>
							<input type="search" name="search" id="search" style="width:100px">
							<button name= "submit">search</button>
						</form>
						</li>
					<?php }?>
						<!-- <li><a href="../Login/register.php">SignUp</a></li> -->
				</ul>
			</div>
		</nav>
        
		<?php
		foreach ($item as $things){ 
			?>
			<div class="product-content product-wrap clearfix">
						<div class="row">
							<div class="col-md-5 col-sm-12 col-xs-12">
								<div>
									<img id="img1" width="300" height="300" style='border-radius: 8px' src="<?php echo $things['product_image']; ?>" alt="" srcset="">
								</div>
							</div>
							<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
									<h5 class="name">
										<div>
											<?php
											echo 'Title:';
											echo $things['product_title'];
											?>
										</div>

									</h5>
									<div>
										<?php
										echo '$';
										echo $things['product_price'];
										?>
									</div>
									<div>
										<?php
										echo 'Description:  ';
										echo $things['product_desc'];
										?>
									</div>
								</div>
								<div class="product-info smart-form">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<a href="javascript:void(0);" class="btn btn-success">Add to cart</a>
											<?php 
											echo "
											<a href='../view/single_product.php?product_id={$things['product_id']}' class='btn btn-success'>View product</a>
											";
											?>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			
					<?php
				}
		?>
		<form method="POST" action="">
        <h1>Search</h1>
		<label>Search:</label><br>
		<input type="text" name="search">
		<input type="submit" name="searchtitle" value="Find product">
		</form>

                <table>

				</table>

               
    

    </div>

		
	
	</body>
	</html>