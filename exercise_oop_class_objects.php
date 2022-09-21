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
					<form action="exercise_oop_class_objects_action.php" method="POST">
						<div class="col-md-3">
						<div class="form-group">
							<label>Student Type:</label>
							<select id="student_type" name="student_type">
								<option value="High School">High School</option>
								<option value="College">College</option>
							</select>
						</div>	
						<div class="form-group">
							<label>Science:</label>
							<input type="text" id="science" name="science" class="form-control">
						</div>
						<div class="form-group">
							<label>Mathematics:</label>
							<input type="text" id="math" name="math" class="form-control">
						</div>
						<div class="form-group">
							<label>Literature:</label>
							<input type="text" id="literature" name="literature" class="form-control">
						</div>
						<div class="form-group">
							<label>History:</label>
							<input type="text" id="history" name="history" class="form-control">
						</div>
						<input type="submit" value="Compute Average" name="signin" class="btn default">	
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

