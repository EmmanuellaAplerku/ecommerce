<?php
include ('../controllers/product_controller.php');

/**
 * Take data from brand 
 */
if (isset($_POST['submit'])){
    $ella_brand = $_POST['brand'];

    $inspect = add_brand_ctr($ella_brand);
    
    if ($inspect)
    {
       echo"Brand Added";
       header('location:../admin/viewbrand.php');
        }
    
    else{
            echo"Failed To Add Brand";
        }
        
}
        
