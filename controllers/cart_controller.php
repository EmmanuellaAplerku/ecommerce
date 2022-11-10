<?php
include("../classes/cart_class.php");
function add_to_cart_ctr($pid,$cid,$quantity){
    $p_id = (int)$pid;
    $qty = (int) $quantity;
    $c_id = (int) $cid; 
    $cart_contr= new cart_class();

    echo($p_id);
  

    return $cart_contr->add_to_cart_cls($p_id,$c_id,$qty);


}

?>