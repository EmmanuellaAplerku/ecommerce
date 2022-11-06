<?php
require ('../controllers/product_controller.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <?php
		$takeprod_id = $_GET['product_id'];
		$product = select_one_product_ctr($takeprod_id);
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			$productcategory= $_POST["product_cat"];
            $productbrand= $_POST["product_brand"];
            $producttitle= $_POST["product_title"];
            $productprice= $_POST["product_price"];
            $productdesc= $_POST["product_desc"];
            $productimage= $_POST["product_image"];
            $productkeyw= $_POST["product_keywords"];

			$edit_product = update_product_ctr($takeprod_id,$product);
			if ($edit_product==True){
				header("location:../admin/viewproduct.php");
			}
			else{
				echo "Ooops! Try Again";
			}
		}
	?>

    <form method="post">
            <input  type="hidden" value= "<?php echo $product['product_id']?> "placeholder="Update" name="product_id" required>
            <input  type="text" value= "<?php echo $product['product_cat']?> "placeholder="Update" name="product_cat" required>
            <input  type="text" value= "<?php echo $product['product_brand']?> "placeholder="Update" name="product_brand" required>
            <input  type="text" value= "<?php echo $product['product_title']?> "placeholder="Update" name="product_title" required>
            <input  type="text" value= "<?php echo $product['product_price']?> "placeholder="Update" name="product_price" required>
            <input  type="text" value= "<?php echo $product['product_desc']?> "placeholder="Update" name="product_desc" required>
            <input  type="text" value= "<?php echo $product['product_image']?> "placeholder="Update" name="product_image" required>
            <input  type="text" value= "<?php echo $product['product_keywords']?> "placeholder="Update" name="product_keywords" required>
            <button id="upd_prod" name="Updated"> Update Product</button>   
    </form>
</body>
</html>
