<?php
include('../settings/core.php');
require('../controllers/cart_controller.php');

$uid = $_SESSION['customer_id'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/allproduct.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Revamp'D</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <?php
                if (check_login() == false) {
                    header('location:../index.php');
                } else {
                ?>
                    <li><a href="../index.php" class="home-button">Home</a></li>
                    <li><a href="../view/all_product.php" class="home-button">See Products</a></li>
                    <li><a href="../Login/logout.php" class="home-button">Logout</a></li>
                <?php
                }
                ?>

            </ul>
        </div>
    </nav>

    <h1>Cart</h1>
    <div class="container">
        <div class="col-xs-12 col-md-6 bootstrap snippets bootdeys">
            <!-- product -->

            <?php
            $selectedproduct = select_all_cart_ctr($uid);
            // print_r($selectedproduct);
            foreach ($selectedproduct as $item) { ?>

                <div class="product-content product-wrap clearfix">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div>
                                <img id="img1" width="300" height="300" style='border-radius: 8px' src="<?php echo $item['product_image']; ?>" alt="" srcset="">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-deatil">
                                <h5 class="name">
                                    <div>
                                        <?php
                                        echo 'Title:';
                                        echo $item['product_title'];
                                        ?>
                                    </div>

                                </h5>
                                <div>
                                    <?php
                                    echo '$';
                                    echo $item['product_price'];
                                    ?>
                                </div>
                                <div>
                                    <?php
                                    echo 'Description:  ';
                                    echo $item['product_desc'];
                                    ?>
                                </div>
                                <div>
                                    <a href="../actions/manage_quantity_cart.php?increase_id=<?php echo $item['product_id']?>">+</a>
                                    <?php
                                    echo $item['qty'];
                                    ?>
                                    <a href="../actions/manage_quantity_cart.php?decrease_id=<?php echo $item['product_id']?>">-</a>
                                </div>
                            </div>
                            <div class="product-info smart-form">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <!-- <a href="../actions/add_to_cart.php?product_id=<?php echo $item['product_id'] ?>" class='btn btn-success'>Checkout</a> -->

                                        <a href="../actions/remove_from_cart.php?product_id=<?php echo $item['product_id'] ?>" class='btn btn-success'>Remove</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end product -->
        </div>
        <?php } ?>

    </div>
    <a href="payment.php?uid=<?php echo $uid ?>" class='btn btn-danger' style="float: right;">Proceed</a>

</body>

</html>