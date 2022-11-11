<?php

/**
 * 
 */
require("../settings/db_class.php");

class cart_class  extends db_connection{

//Add to cart
    function add_to_cart_cls($pid,$cid,$quantity){
     
        $sql = "INSERT INTO `cart`(`p_id`, `ip_add`, `c_id`, `qty`) VALUES ('$pid', '','$cid','$quantity')";
        return $this->db_query($sql);
    }

    function select_all_cart_cls($cid){
        // $sql = "SELECT * FROM `products`";
        $sql = "SELECT products.product_title, products.product_price, products.product_desc, products.product_image, cart.qty FROM products left join cart on products.product_id = cart.p_id WHERE cart.c_id=$cid";
        return $this->db_fetch_all($sql);


    }
}
?>