<?php

include ("../controllers/cart_controller.php");

//get the updated value and pass into t
if(isset($_POST['submit'])){
    $quantity = $_POST['quantity'];
    $pid = $_POST['id'];
    $cid = $_POST['cid'];

 
     
    
    
    add_to_cart_ctr($pid,$cid,$quantity);
    header('Location: ../view/Product.php');
}

?>