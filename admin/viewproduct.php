<?php
    include("../settings/core.php");
    include("../controllers/product_controller.php");
?>

<DOCTYPE html>
    <head>
        <title>Brands</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">       
    </head>
    <body>
    <h1 style="text-align: center;">View Products</h1>

    <br>
    <br>
            <table>
                <thead>
                    <tr>
                        <!--<th style="font-size:20px;">#</th>--> 
                        <th style="font-size:35px;">Title</th>
                        <th style="font-size:35px;">Price</th>
                        <th style="font-size:35px;">Description</th>
                        <th style="font-size:35px;">Image</th>
                        <th style="font-size:35px;">Key</th>

                    </tr>
                </thead>
                 <?php
                 // Fetch all products
                $allproducts = select_all_products_ctr();
                foreach ($allproducts as $product) {
                ?>

                <tr>
                    <!--<td a><?php echo $product['brand_id']?></td>-->
                    <!--<td a><?php echo $product['cat_id']?></td>-->
                    <td a><?php echo $product['product_title']?></td>
                    <td a><?php echo $product['product_price']?></td>
                    <td a><?php echo $product['product_desc']?></td>
                    <td a><?php echo $product['product_image']?></td>
                    <td a><?php echo $product['product_keywords']?></td>
                    <td>
                  <!--Creating a form for the brand edits-->
                        <form action="../actions/update_product.php" method="POST">
                            <input type="hidden" name="product_id" value='<?php echo $product['product_id']?>'>
                             <button  type="submit" name="update_brand">Update</button>
                         </form>
                    </td>

                    <td>
                        <form action="../actions/delete_product.php" method="POST">
                            <input type="hidden" name="product_id" value='<?php echo $product['product_id']?>'>
                            <button  type="submit" name="delete_prod">Delete</button>
                        </form>
                     </td>
                </tr>
                <?php }?>
            </tbody> 
        </table>

                </br>
                <a href='admin_index.php'>Back to Homepage</a>
    </body>
</html>