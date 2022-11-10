<?php

/**
 * 
 */
require("../settings/db_class.php");

class cart_class  extends db_connection{

//Add to cart
    function add_to_cart_cls($pid,$cid,$quantity){
     
        $sql = "INSERT INTO `cart`(`p_id`, `ip_add`, `c_id`, `qty`) VALUES ('$pid',' ','$cid','$quantity')";
        echo($this->db_query($sql));
        return $this->db_query($sql);
    }

    
 

}
?>