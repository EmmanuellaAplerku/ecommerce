<?php
	include "../settings/core.php";	
	require( "../controllers/product_controller.php");
	$custid = $_GET['customer_id'];
  
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
	
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 

		<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		 
</head>
<body>
<nav>
			<div class="nav-wrapper">
				<a href="#" class="brand-logo">Revamp'D</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<?php
					
					 if (check_login()== false){?>
						<li><a href="Login/login.php">Login</a></li>
					<?php } elseif( $_SESSION['role']== 1){ 
					
					?>
						
						<li><a href="../Login/logout.php">Logout</a></li>
						

					<?php 
					}else{
					?>
						<li><a href="../Login/logout.php">Logout</a></li>
					<?php  }?>
					
				</ul>
			</div>
		</nav>

		<div>
		<?php 
	
	if(check_login_index()== false){

	
	?>
	
	<?php 
		}
		elseif($_SESSION['role']== 2) 
		{
			
	?>	
	
	

    <div>
        <h1>Products Available</h1>
                <?php
                $prod= select_all_products_ctr();


                foreach($prod as $item){

                    ?>
                    <div class= 'edit'>
                        <div>
                           <?php echo($item['product_title']) ?>
                        </div>
                        
                        <div></div>
                        <img id= "img1"  width="300" height="300" style='border-radius: 8px' src="<?php echo( $item['product_image']); ?>" alt="" srcset="">
                        <div>
                           <?php echo('$'); echo($item['product_price']); ?>
                        </div> 
						<form action="../actions/add_to_cart.php" method="post">
							<input type="hidden" name="id"  value=<?php echo($item['product_id'])?>>
					
							<input type="hidden" name="custid"  value=<?php echo( $custid)?>>
							<input type="hidden" name="quant"  value= 1>

						<button type= 'submit' name='submit' >Add to cart</button>
						</form>    
                        
                        <div><a href="single_product.php?bid=<?php echo( $item['product_id']); ?>&custid=<?php echo($custid) ?>">View Product</a></div>
                    </div>

                    <?php
                }
                ?>

    </div>
			<?php  }?>

   
</body>
</html>