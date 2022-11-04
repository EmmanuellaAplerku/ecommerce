<?php

    /**
     * Manages the database functions 
     */
    require("../settings/db_class.php");

    class product_class  extends db_connection
    {

        //Inserts brands
        function add_brand_cls($ella_brand)
        {
            $mysql = "INSERT INTO `brands`(`brand_name`) VALUES ('$ella_brand')";
            return $this->db_query($mysql);
        }	
        //Select All brands
        function select_all_brands_cls(){
            $mysql= "SELECT * FROM `brands`";
            return $this->db_fetch_all($mysql);
        }	
        //Select One brand
        function select_one_brand_cls($brd_id){
            $mysql="SELECT `brand_name`,`brand_id` FROM `brands` WHERE `brand_id`='$brd_id'";
            return $this->db_fetch_one($mysql);


        }
        //Update Brand 
        function update_one_brand_cls($brd_id,$ella_brand){
            $mysql= "UPDATE `brands` SET `brand_name`='$ella_brand'WHERE `brand_id`=$brd_id";
            return $this->db_query($mysql);
        }

       
       

        //Add Category 
        function add_category_cls($category)
        { 
          $mysql = "INSERT INTO `categories`(`cat_name`) VALUES ('$category')";
          return $this->db_query($mysql);
        }	

        //Select All Category
        function select_all_categories_cls(){
            $mysql= "SELECT * FROM `categories`";
            return $this->db_fetch_all($mysql);
        }	

        //Select One Category
        function select_one_category_cls($ctg_id){
            $mysql="SELECT `cat_name`,`cat_id` FROM `categories` WHERE `cat_id`='$ctg_id'";
            return $this->db_fetch_one($mysql);
        }

        //Update Category 
        function update_one_category_cls($ctg_id,$category){
            $mysql= "UPDATE `categories` SET `cat_name` = '$category' WHERE `cat_id`=$ctg_id";
            return $this->db_query($mysql);
        }
          
    }
?>