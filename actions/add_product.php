<?php
include ("../controllers/product_controller.php");


if(isset($_POST['submitproduct'])){

   
    $product_brand = $_POST['ella_brand'];
    $product_cat = $_POST['category'];
    $product_price=$_POST['prod_pri'];
    $product_title = $_POST['prod_title'];
    $product_desc = $_POST['prod_desc'];
    $product_key = $_POST['prod_key'];
    $product_image = NULL;
   

    $addprod=add_product_ctr($product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_key);


    if ($addprod==True){

    header("location:../admin/viewproduct.php");

    

    } else{
        header("location:../admin/product.php");
     
  }
}
?>