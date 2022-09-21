<?php 
	class Student{
		public $studentID;
		public $studentName;
		public $studentYr;
		public $studentCourse;
		public $studentGWA;

		function __construct($id, $name){
			$this->studentID = $id;
			$this->studentName = $name;
		}
		function setStudentID($id){
			$this->studentID = $id;
		}
		function getStudentID(){
			return $this->studentID;
		}
		function setStudentName($name){
			$this->studentName = $name;
		}
		function getStudentName(){
			return $this->studentName;
		}

		static function setPrintStudentID($value){
			return "Student ID: ".$value;
		}

		function printStudentID(){
			return $this->getStudentID();
		}


		
		
	}

	class StudentElementary extends Student {
		function setStudentID($id){
			$this->studentID = "XXXX".$id;
		}

		function getStudentID(){
			return $this->studentID."XXXX";
		}	
	}
	
	class StudentSecondary extends Student{
		var $studentSubjNo;

		function setStudentSubjNo($num){
			$this->studentSubjNo = $num;
		}

		function getStudentSubjNo(){
			return $this->studentSubjNo;
		}
	}

	
	class StudentTransfer extends StudentElementary{
		function setStudentID($id){
			$this->studentID = "****".$id;
		}
		function getStudentID(){
			return $this->studentID."****";
		}
		function getOriginalSetStudID($id){
			Student::setStudentID($id);
			Parent::setStudentID($id);
			Self::setStudentID($id);
		}
	}
	

	$objStudentP = new Student(2021000, 'Student X');
	$objStudentP->setStudentID(2021002);
	echo "Student ID: ". $objStudentP->getStudentID()."<br>";

	$objStudentE = new StudentElementary(20210000, 'Student X');
	$objStudentE->setStudentID(2021001);
	echo "Student ID: ". $objStudentE->getStudentID()."<br>";

	$objStudentS = new StudentSecondary(2021000, 'Student X');
	$objStudentS->setStudentSubjNo(10);
	echo "Studen Name: ". $objStudentS->getStudentName()."<br>";
	echo "Number of Subjects: ". $objStudentS->getStudentSubjNo()."<br>";

	
	$objStudentX = new StudentTransfer(2021000, 'Student X');
	$objStudentX->getOriginalSetStudID(2021111);
	echo "Student ID: ". $objStudentX->getStudentID()."<br>";
	echo "Studen Name: ". $objStudentX->getStudentName()."<br>";

	echo Student::setPrintStudentID(2021999);
	
?>	