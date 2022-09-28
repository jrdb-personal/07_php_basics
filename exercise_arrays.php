<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>
	<h1>PHP with MySQL Training Course</h1>
	<h2>Associative Arrays</h2>
	<?php
		$product_images = array("toyota_vios.jpg", "mitsubishi_montero.jpg", "ford_raptor.jpg", "jeep_wrangler.jpg");
		$product_toyota = array("Sedan","Vios", 2015, "Red", $product_images);
		$product_mitsubishi = array("SUV","Montero",2018, "Black", $product_images);
		$product_ford = array("Truck","Raptor",2017, "Blue", $product_images);
		$product_jeep = array("4WD","Wrangler",2019, "Gray", $product_images);
		$product_list = [		
					0 => $product_toyota, 		
					1 => $product_mitsubishi, 
					2 => $product_ford, 
					3 => $product_jeep,
				];
	?>
	<table border="1">
		<tr><th colspan="5">PRODUCT LIST</th></tr>
		
		<tr>
			<td>Car Type: <?php echo $product_list[0][0]; ?></td>
			<td>Model Name: <?php echo $product_list[0][1]; ?></td>
			<td>Model Year: <?php echo $product_list[0][2]; ?></td>
			<td>Car Color: <?php  echo $product_list[0][3]; ?></td>
			<?php $toyotaprice = ($product_list[0][2] > 2018) ? "900K" : "600K" ?>
			<td>Price: <?php echo $toyotaprice; ?>
			<td>Image: <img src="images/<?php echo $product_list[0][4][0]; ?>" width='500' height='300'></td>
		</tr>
		<tr>
			<td>Car Type: <?php echo $product_list[1][0]; ?></td>
			<td>Model Name: <?php echo $product_list[1][1]; ?></td>
			<td>Model Year: <?php echo $product_list[1][2]; ?></td>
			<td>Car Color: <?php  echo $product_list[1][3]; ?></td>
			<td>Image: <img src="images/<?php echo $product_list[1][4][1]; ?>" width='500' height='300'></td>
		</tr>
		<tr>
			<td>Car Type: <?php echo $product_list[2][0]; ?></td>
			<td>Model Name: <?php echo $product_list[2][1]; ?></td>
			<td>Model Year: <?php echo $product_list[2][2]; ?></td>
			<td>Car Color: <?php  echo $product_list[2][3]; ?></td>
			<td>Image: <img src="images/<?php echo $product_list[2][4][2]; ?>" width='500' height='300'></td>
		</tr>
		<tr>
			<td>Car Type: <?php echo $product_list[3][0]; ?></td>
			<td>Model Name: <?php echo $product_list[3][1]; ?></td>
			<td>Model Year: <?php echo $product_list[3][2]; ?></td>
			<td>Car Color: <?php  echo $product_list[3][3]; ?></td>
			<td>Image: <img src="images/<?php echo $product_list[3][4][3]; ?>" width='500' height='300'></td>
		</tr>
	</table>
</body>
</html


				