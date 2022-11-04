<?php
include ('../controllers/product_controller.php');

/**
 * Take data from category
 */
if (isset($_POST['submit'])){
    $category = $_POST['category'];
    echo $category;

    $inspect = add_category_ctr($category);
    
    if ($inspect)
    {
       echo"Category Added";
       header('location:../admin/view_category.php');
        }
    
    else{
            echo"Failed To Add Category";
        }
        
}

?>
    