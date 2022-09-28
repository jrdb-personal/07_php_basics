<?php
	include("exercise_oop_class_objects_include.php");
		if (isset($_POST['science']) && !empty($_POST['science'])
				&& isset($_POST['math']) && !empty($_POST['math'])
				&& isset($_POST['literature']) && !empty($_POST['literature'])
				&& isset($_POST['history']) && !empty($_POST['history'])
	 	   )
		{
			if ($_POST["student_type"] == "High School"){
				$studentHS = new StudentHS;
				$studentHS->setGrades($_POST['science'],$_POST['math'],$_POST['literature'],$_POST['history']);
				$grades = $studentHS->getGrades();
				echo "Your grades are: <br>";
				for($x=0;$x<4;$x++){
					echo $grades[$x]."<br>";
				}
				echo "Your average is: ";
				echo $studentHS->computeAverage()."<br>";
				echo "Your rating is: ";
				echo $studentHS->displayRate($studentHS->computeAverage());
			}
			else {
				$studentCollege = new StudentCollege;
				$studentCollege->setGrades($_POST['science']
				,$_POST['math'],$_POST['literature']
				,$_POST['history']);
				$grades = $studentCollege->getGrades();
				echo "Your grades are: <br>";
				for($x=0;$x<4;$x++){
					echo $grades[$x]."<br>";
				}
				echo "Your GWA is: ";
				echo $studentCollege->computeAverage()."<br>";
				echo "Your rating is:";
				echo $studentCollege->displayRate
				($studentCollege->computeAverage());
			}
		}
		else {
			echo "One of the input is blank.";
		}
?>