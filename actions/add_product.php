<?php
include '../controllers/product_controller.php';

if (isset($_POST['submitproduct'])) {
    $product_brand = $_POST['ella_brand'];
    $product_cat = $_POST['category'];
    $product_price = $_POST['prod_pri'];
    $product_title = $_POST['prod_title'];
    $product_desc = $_POST['prod_desc'];
    $product_key = $_POST['prod_key'];
    //$product_image = NULL;

    //$product_image = $_FILES['prod_image']["tmp_name"];

    $file = $_FILES['file'];
    $filename = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $FileType = $_FILES['file']['type'];

    $fileExt = explode('.', $filename);
    $fileActualExt = strtolower(end($fileExt));

    // selecting the type of file
    $permit = ['jpg', 'jpeg', 'png', 'pdf'];

    // checking the type of file
    if (in_array($fileActualExt, $permit)) {
        if ($fileError === 0) {
            if ($fileSize < 500000) {
                $fileNameNew = uniqid('', true) . '.' . $fileActualExt;
                $fileDestination = '../images/' . $fileNameNew;
                $move = move_uploaded_file($fileTmpName, $fileDestination);
                if ($move) {
                    $addprod = add_product_ctr(
                        $product_cat,
                        $product_brand,
                        $product_title,
                        $product_price,
                        $product_desc,
                        $fileDestination,
                        $product_key
                    );

                    if ($addprod == true) {
                        header('location:../admin/viewproduct.php');
                    } else {
                        header('location:../admin/product.php');
                    }
                } else {
                    echo 'not working';
                }
            } else {
                echo 'The file is large';
            }
        } else {
            echo 'An error occurred while uploading your file';
        }
    } else {
        echo 'Unfortunately you cannot upload this kind of file';
    }
}
