<?php
//start session
session_start(); 

//for header redirection
ob_start();

//funtion to check for login
// function check_login(){
//     if(isset($_SESSION['customer_id'])){
//         header('location:../Login/logout.php');
//     }
// }


//function to check for login index 
function check_login_index(){
    if($_SESSION['role'] == 1)
    {
        return $_SESSION['role'];
        header('location:../admin/brand.php');
    }
}

//function to check whether the role is a user or admin
function inspect_admin()
{
    if($_SESSION['role'] == 1)
    {
        return $_SESSION['role'];
        header('location:../admin/brand.php');
    }
}


?>