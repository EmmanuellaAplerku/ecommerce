<?php
$take_id=$_GET['cat_id'];
require ('../controllers/product_controller.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update Action</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <?php
		$take_id = $_GET['cat_id'];
		$category = select_one_category_ctr($take_id);
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			$category= $_POST["cat_name"];
			$edit_category = update_category_ctr($take_id,$category);
			if ($edit_category){
				header("location:../admin/view_category.php");
			}
			else{
				echo "Ooops! Try Again";
			}
		}
	?>

    <form method="post">
        <div data-validate = "Enter Email">
            <input  type="text" value= "<?php echo $category['cat_name']?> "placeholder="Update Category" name="cat_name" required>
            <input  type="hidden" value= "<?php echo $category['cat_id']?> "placeholder="Update Category" name="cat_id" required>
        </div>
        <button id="upd_cat" name="Updated"> Update Category</button>   
    </form>
</body>
</html>
