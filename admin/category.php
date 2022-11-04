<?php
include("../settings/core.php");
include("../controllers/product_controller.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Categories</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<form action="../actions/add_category.php" method="post">
					<label for=""> Add Category</label>
					<input type="text" name = 'category' required>
					<button type="submit" name = 'submit'>Add</button>
				</form>
			
</body>
</html>