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
		$takeprod_id = $_POST['product_id'];
		$product = select_one_product_ctr($takeprod_id);
		
	?>

    <form method="post" action="../actions/updatechanges.php">
            <input  type="hidden" value= "<?php echo $product['product_id']?> "placeholder="Update" name="product_id" required>
            <label for=""> Choose Category</label>
            <select name= 'category' >
            <option>category</option>

            <?php
            $category = select_all_categories_ctr();
            if($category){
                foreach($category as $item){
                    $ctg_id= $item['cat_id'];
                    $cat_name=$item['cat_name'];
                    echo "<option value= '$ctg_id'> $cat_name </option>";
                }
            }else{
                echo "<option value= 'no found'> Category cannot be found</option>";
            }
                 

            ?>	

            </select>
            
            <label for=""> Choose Brand</label>
            <select name="ella_brand" id="">
            <option>brand</option>

            <?php
           
            $ella_brand= select_all_brands_ctr();
            if($ella_brand){
                foreach($ella_brand as $item){
                    $brd_id= $item['brand_id'];
                    $brand_name=$item['brand_name'];
                    echo "<option value= '$brd_id'> $brand_name </option>";
                }
            }else{
                echo "<option value= 'no found'> Brand cannot be found</option>";
            }
                 

            ?>
            </select>
            <input  type="text" value= "<?php echo $product['product_title']?> "placeholder="Update" id="prodtt" name="product_title" >
            <label for="prodtt">Title</label><br>
            <input  type="text" value= "<?php echo $product['product_price']?> "placeholder="Update" id="prodpr" name="product_price" >
            <label for="prodpr">Price</label><br>
            <input  type="text" value= "<?php echo $product['product_desc']?> "placeholder="Update" id="prodds"name="product_desc" >
            <label for="prodds">Description</label><br>
            <input  type="text" value= "<?php echo $product['product_image']?> "placeholder="Update" id="prodimg"name="product_image" >
            <label for="prodimg">Image</label><br>
            <input  type="text" value= "<?php echo $product['product_keywords']?> "placeholder="Update" id="prodkwd"name="product_keywords">
            <label for="prodkwd">Keywords</label><br>
            </br>
            <button type="submit" id="upd_prod" name="Updated"> Update Product</button>   
    </form>
</body>
</html>
