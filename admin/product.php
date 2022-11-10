<?php
	include "../settings/core.php";	
	require( "../controllers/product_controller.php");
  
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<h1>Add Products </h1>
<form action="../actions/add_product.php" method="POST" enctype="multipart/form-data">

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
            <br>
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

            <br>
            <label for=""> Product title</label>
            <input type="text" name="prod_title" id="">
            <br>
            <label for=""> Product Price</label>
            <input type="number" name="prod_pri" id="">
            <br>
            <label for=""> Product Description</label>
            <input type="text" name="prod_desc" id="">
            <br>
            <label for=""> Product Image</label>
            <input type="file" name="file"  id="">
            <br>
            <label for=""> Product Keywords</label>
            <input type="text" name="prod_key" id="">


            <button type='submit' name='submitproduct'>Submit</button>
                
           		
</form>
			
</body>
</html>