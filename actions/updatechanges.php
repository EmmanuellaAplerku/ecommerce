<?php
require ('../controllers/product_controller.php');

if(isset($_POST['Updated'])){
   $productid=$_POST['product_id'];
   $productcat=$_POST['category'];
   $productbrand=$_POST['ella_brand'];
   $producttitle=$_POST['product_title'];
   $productprice=$_POST['product_price'];
   $productdescrp=$_POST['product_desc'];
   $productimage=$_POST['product_image'];
   $productkey=$_POST['product_keywords'];

   $checkupdate = update_product_ctr($productid,$productcat,$productbrand,$producttitle,$productprice,$productdescrp,$productkey,$productimage);

   if($checkupdate==True){
    header("location:../admin/viewproduct.php");
   }

   else{
    echo "Could not update";
   }
}
?>