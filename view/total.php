
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 
</body>
</html>


<!-- <section class="h-100 gradient-custom"> -->
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Summary</h5>
          </div>
          

          <?php
            foreach($selectedproduct as $product){
                $ptotal = $product['product_price' ] * $product['qty'];
                $sub += (float)$ptotal;
               $title= $product['product_title'];
               $unitprice= $product['product_price'] ;
               $qty= $product['qty'];
            

echo"
             <div class='card-body'>
            <ul class='list-group list-group-flush'>
              <li
                class='list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0'>
                $title
                <span>GHS$unitprice</span>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center px-0'>
                Quantity
                <span>$qty</span>
              </li>
              <li
                class='list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3'>
                <div>
                  <strong>Total amount</strong>
                  <strong>
                    <p class='mb-0'>(including VAT)</p>
                  </strong>
                </div>
                <span><strong>$sub</strong></span>
              </li>
            </ul>
            </div>

            ";
            }
            ?>


            <button type="button" class="btn btn-primary btn-lg btn-block">
              Go to checkout
            </button>
          </div>
        </div>
      </div>
    </div>
<!-- </section> -->

</body>
</html>