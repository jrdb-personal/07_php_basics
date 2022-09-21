<html>
<head>
	<title>Activity</title>
	<link rel="stylesheet" type="text/css" href=css/bootstrap.css>
</head>
<body>

<label>Please Enter your grades on each subjects</label>

<div class="container">
	<div class="row">
		<div class="container"> 
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-md-12">	
					<form action="exercise_oop_concepts_action.php" method="POST">
						<div class="col-md-3">
						

						<div class="form-group">
							<label>Student Type:</label>
							<select id="itemcategory" name="itemcategory">
								<option value="CategoryX">CategoryX</option>
								<option value="CategoryY">CategoryY</option>
								<option value="CategoryZ">CategoryZ</option>
							</select>
						</div>	

						<div class="form-group">
							<label>Item Code:</label>
							<input type="" id="itemcode" name="itemcode" class="form-control">
						</div>
						
						<div class="form-group">
							<label>Item Name:</label>
							<input type="" id="itemname" name="itemname" class="form-control">
						</div>

						<div class="form-group">
							<label>Item Description:</label>
							<input type="" id="itemdescription" name="itemdescription" class="form-control">
						</div>

						<div class="form-group">
							<label>Color:</label>
							<input type="" id="itemcolor" name="itemcolor" class="form-control">
						</div>

						<div class="form-group">
							<label>Size:</label>
							<input type="" id="itemsize" name="itemsize" class="form-control">
						</div>

						<div class="form-group">
							<label>Model:</label>
							<input type="" id="itemmodel" name="itemmodel" class="form-control">
						</div>

						<input type="submit" value="Save" name="saveitem" class="btn default">	
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		
</body>
</html>

