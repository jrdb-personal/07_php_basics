<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Activity on Arrays</h2>
	<?php

		$product_images = array("toyota_vios.jpg", "mistsubishi_montero.jpg", "ford_raptor.jpg", "jeep_wrangler.jpg");

		$product_toyota = array("Sedan","Vios","2015", "Red", $product_images);
		$product_mitsubishi = array("SUV","Montero","2018", "Black", $product_images);
		$product_ford = array("Truck","Raptor","2017", "Blue", $product_images);
		$product_jeep = array("4WD","Wrangler","2019", "Gray", $product_images);
		

		$product_list = [		
					0 => $product_toyota, 		
					1 => $product_mitsubishi, 
					2 => $product_ford, 
					3 => $product_jeep,
				];

	?>


	<table border="1">
		<tr><th colspan="5">PRODUCT LIST</th></tr>

	
		<?php 
			for($list_index = 0; $list_index < 4; $list_index++){

				echo "<tr>";
				for ($item_index = 0; $item_index < 4; $item_index++) {
					if ($item_index == 0){
						echo "<td>Car Type:".$product_list[$list_index][$item_index]."</td>";
					}

					else if ($item_index == 1){
						echo "<td>Model Name:".$product_list[$list_index][$item_index]."</td>";
					}

					else if ($item_index == 2){
						echo "<td>Model Year:".$product_list[$list_index][$item_index]."</td>";
					}

					else {
						echo "<td>Car Color:" .$product_list[$list_index][$item_index]."</td>";
					}

				}
				echo "<td>Image: <img src='/images/".$product_list[$list_index][$item_index][$list_index]."' width='500' height='300'></td>";
				echo "</tr>";
				
			}

		?>
		
	</table>
</body>
</html>