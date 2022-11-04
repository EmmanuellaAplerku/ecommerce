<?php
//connect to the user account class
include("../classes/product_class.php");


//--INSERT--//
function add_brand_ctr($ella_brand)
{
    $addnewbrand= new product_class();

    return $addnewbrand->add_brand_cls($ella_brand);
}
//Select All brands
function select_all_brands_ctr(){
    $allbrands= new product_class();
    return $allbrands->select_all_brands_cls();

}
//Select One brand 
function select_one_brand_ctr($brd_id){
    $onebrand= new product_class();
    return $onebrand->select_one_brand_cls($brd_id);

}

//Update one Brand
function update_brand_ctr($brd_id,$ella_brand){
    $updt= new product_class();
    return $updt->update_one_brand_cls($brd_id,$ella_brand);

}

//Categories
function add_category_ctr($category)
{
    $addnewcategory= new product_class();

    return $addnewcategory->add_category_cls($category);

}

//Select All categories
function select_all_categories_ctr(){
    $allcategories= new product_class();
    return $allcategories->select_all_categories_cls();

}

//Select One category
function select_one_category_ctr($ctg_id){
    $onecategory= new product_class();
    return $onecategory->select_one_category_cls($ctg_id);

}

//Update one category
function update_category_ctr($ctg_id,$category){
    $updtcat= new product_class();
    return $updtcat->update_one_category_cls($ctg_id,$category);

}
?>