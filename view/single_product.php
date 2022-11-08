<?php
	include "../settings/core.php";	
	require( "../controllers/product_controller.php");

    $brd_id = $_GET['brd_id'];
	$custid = $_GET['customer_id'];
  
  
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product</title>
	
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
						<li><a href="../Login/login.php">Login</a></li>
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
        <h1>Products</h1>
                <?php
                $prod= select_one_product_ctr($brd_id);

              
                   ?>
                    <div class= ''>
                        <div>
                           <?php echo("Id  "); echo($prod['product_id'])?>
                        </div>

                        <div>
                           <?php echo("Category  "); echo($prod['product_cat'])?>
                        </div>
						<div>
                           <?php echo("Brand:  "); echo($prod['product_brand'])?>
                        </div>
						<div>
                           <?php echo("Title:  "); echo($prod['product_title'])?>
                        </div>
						<div>
                           <?php echo("Price:  $"); echo($prod['product_price'])?>
                        </div>
						<div>
                           <?php echo("Description:  "); echo($prod['product_desc'])?>
                        </div>
						<img src="<?php echo($prod['product_image'])?>" alt="">
						<div>
                           <?php echo("Keywords:  "); echo($prod['product_keywords'])?>
                        </div>
						<form action="../actions/add_to_cart.php" method="post">
							<input type="hidden" name="id"  value=<?php echo($prod['product_id'])?>>
					
							<input type="hidden" name="custid"  value=<?php echo( $custid)?>>
							<input type="hidden" name="quant"  value= 1>

						<button type= 'submit' name='submit' >Add to cart</button>
						</form> 
                    </div>

               <?php }?>   

    </div>
			

		</body>
</html>