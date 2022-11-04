<?php
include("../settings/core.php");
include("../controllers/product_controller.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Brand</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<form action="../actions/add_brand.php" method="post">
				<form action="" method="post">
					<label for=""> Add Brand</label>
					<input type="text" name = 'brand' required>
					<button type="submit" name = 'submit'>Add</button>
				</form>
			
</body>
</html>