<?php
include("../settings/core.php");
include ("../controllers/cart_controller.php");

if(isset($_SESSION['customer_id'])){
    $cid = $_SESSION['customer_id'];
    // echo $cid;
    if(isset($_GET['increase_id'])){
        $product_id = $_GET['increase_id'];
        // select the item
        $get_item = select_one_cart_ctr($product_id, $cid);
        // print_r($get_item);
        foreach($get_item as $item){
            $oldQty = $item['qty'];
            $newQty = $oldQty+1;
            // update the item with the new quantity
            $result = update_quant_ctr($product_id, $newQty, $cid);
            if($result){
                echo "quantity updated: `{$newQty}`";
            }else{
                echo "failed to update";
            }
        }
    }
}

if(isset($_GET['decrease_id'])){
    echo "decreased";
}
?>