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
    <h1 style="text-align: center;">View Brands</h1>

    <br>
    <br>
            <table>
                <thead>
                    <tr>
                        <!--<th style="font-size:20px;">#</th>-->
                        <th style="font-size:35px;">Brands</th>
                        <th style="font-size:35px;">Modify</th>
                    </tr>
                </thead>
                 <?php
                 // Fetch all brands
                $brandoptions = select_all_brands_ctr();
                foreach ($brandoptions as $brand) {
                ?>

                <tr>
                    <!--<td a><?php echo $brand['brand_id']?></td>-->
                    <td a><?php echo $brand['brand_name']?></td>
                    <td>
                  <!--Creating a form for the brand edits-->
                        <form action="../actions/update_brand.php" method="GET">
                            <input type="hidden" name="brand_id" value='<?php echo $brand['brand_id']?>'>
                            <input type="hidden" name="brand_name" value='<?php echo $brand['brand_name']?>'>
                             <button  type="submit" name="update_brand">Update</button>
                         </form>
                    </td>

                    <td>
                        <form action="../actions/delete_brand.php" method="POST">
                            <input type="hidden" name="brand_id" value='<?php echo $brand['brand_id']?>'>
                            <input type="hidden" name="brand_name" value='<?php echo $brand['brand_name']?>'>
                            <button  type="submit" name="delete_brand">Delete</button>
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