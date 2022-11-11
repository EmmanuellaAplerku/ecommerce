<?php
include("../classes/cart_class.php");

//Function to add to the cart
function add_to_cart_ctr($pid,$cid,$quantity){
    $cart_contr= new cart_class();

    return $cart_contr->add_to_cart_cls($pid,$cid,$quantity);


}

//This function displays all products placed in the cart
function select_all_cart_ctr($cid){
    $show_cart = new cart_class();
    return $show_cart->select_all_cart_cls($cid);
}

?>