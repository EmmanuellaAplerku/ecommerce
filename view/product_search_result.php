<?php
	include "../settings/core.php";	
    include ("../controllers/product_controller.php");
    $brand = $_GET['brd_id'];
	$custid = $_GET['customer_id'];

    echo $brand;

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
					
					 if (check_login_index()== false){?>
						<li><a href="../Login/login.php">Login</a></li>
					<?php } elseif( $_SESSION['role']== 1){ 
					
					?>
						
						<li><a href="Login/logout.php">Logout</a></li>
						<li><a href="admin/brand.php">Brand</a></li>
						<li><a href="admin/category.php">Category</a></li>
						<li><a href="admin/product.php">Add Product</a></li>

					<?php 
					}else{
					?>
						<li><a href="../Login/logout.php">Logout</a></li>
						<li><a href="all_product.php">All Products</a></li>
						<li>
						<form action="../actions/product_functions.php" method= 'get'>
							<input type="search" name="search" id="search" style="width:100px">
							<button name= "submit">search</button>
						</form>
						</li>
					<?php }?>
						<li><a href="../Login/register.php">SignUp</a></li>
				</ul>
			</div>
		</nav>

        <?php
          
            
            $datafound= search_product($brand);
         

        ?>
        
	

    <div>
        <h1>Products</h1>
                <?php
                


                foreach($datafound as $item){

                    ?>
                    <div class= 'edit'>
                          <div>
                          <!-- <?php echo('Id '); echo($item['product_id']) ?> -->
                        </div>
                        <div>
                           <?php echo('Title: '); echo($item['product_title']) ?>
                        </div>
                        
                      
                        <img id= "img1"  width="300" height="300" style='border-radius: 8px' src="<?php echo( $item['product_image']); ?>" alt="" srcset="">
                        <div>
                           <?php echo('$'); echo($item['product_price']); ?>
                        </div>      
						<form action="../actions/add_to_cart.php" method="get">
							<input type="hidden" name="id"  value=<?php echo($item['product_id'])?>>
					
							<input type="hidden" name="custid"  value=<?php echo( $custid)?>>
							<input type="hidden" name="quant"  value= 1>

						<button type= 'submit' name='submit' >Add to cart</button>
                    </div>

                    <?php
                }
                ?>

    </div>

		
	
	</body>
	</html>