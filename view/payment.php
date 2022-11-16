<?php
include('../settings/core.php');
require('../controllers/cart_controller.php');

if(isset($_GET['uid'])){
    $user_id = $_GET['uid'];

    // run the sql query to compute the total
    $cart_total = sum_all_cart_ctr($user_id);

    // print_r($cart_total);

}

$selectedproduct = select_all_cart_ctr($user_id);

// print_r($selectedproduct);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($selectedproduct as $product){
                $ptotal = $product['product_price' ] * $product['qty'];
                $sub += (float)$ptotal;
            ?>
            <tr>
                <td><?php echo $product['product_title'] ?></td>
                <td><?php echo $product['product_price'] ?></td>
                <td><?php echo $product['qty'] ?></td>
                <td><?php echo $ptotal ?></td>
            </tr>
            <?php
            }
            echo $sub;
            ?>
        </tbody>
    </table>
</body>
</html>