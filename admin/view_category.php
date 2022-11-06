<?php
    include("../settings/core.php");
    include("../controllers/product_controller.php");
?>

<DOCTYPE html>
    <head>
        <title>Categories</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">       
    </head>
    <body>
    <h1 style="text-align: center;">View Categories</h1>

    <br>
    <br>
            <table>
                <thead>
                    <tr>
                        <!--<th style="font-size:20px;">#</th>-->
                        <th style="font-size:35px;">Categories</th>
                        <th style="font-size:35px;">Modify</th>
                    </tr>
                </thead>
                 <?php
                 // Fetch all brands
                $catsavailable = select_all_categories_ctr();
                foreach ($catsavailable as $category) {
                ?>

                <tr>
                    <!--<td a><?php echo $category['cat_id']?></td>-->
                    <td a><?php echo $category['cat_name']?></td>
                    <td>
                  <!--Creating a form for the category edits-->
                        <form action="../actions/update_category.php" method="POST">
                            <input type="hidden" name="cat_id" value='<?php echo $category['cat_id']?>'>
                            <input type="hidden" name="cat_name" value='<?php echo $category['cat_name']?>'>
                             <button  type="submit" name="update_category">Update</button>
                         </form>
                    </td>

                    <td>
                        <form action="../actions/delete_category.php" method="POST">
                            <input type="hidden" name="cat_id" value='<?php echo $category['cat_id']?>'>
                            <input type="hidden" name="cat_name" value='<?php echo $category['cat_name']?>'>
                            <button  type="submit" name="delete_category">Delete</button>
                        </form>
                     </td>
                </tr>
                <?php }?>
            </tbody> 
        </table>
    </body>
</html>