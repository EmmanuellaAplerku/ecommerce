<?php
include ('../controllers/product_controller.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update Brand</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

<?php
	$takeid = $_GET['brand_id'];
	$ella_brand = select_one_brand_ctr($takeid);
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
	   $ella_brand= $_POST["brand_name"];
	   $editbrand = update_brand_ctr($takeid,$ella_brand);
	   if ($editbrand){
		    header("location:../admin/viewbrand.php");
	    }
	   else{
		echo "Oops! Try Again";
	   }
    }
?>

<form method="post">
        <div data-validate = "Enter Email">
            <input  type="text" value= "<?php echo $ella_brand['brand_name']?> "placeholder="Update Brand" name="brand_name" required>
            <input  type="hidden" value= "<?php echo $ella_brand['brand_id']?> "placeholder="Update Brand" name="brand_id" required>
        </div>
        <button id="upd_brd" name="brandupdated"> Update Brand</button>   
 </form>
 
</body>
</html>
