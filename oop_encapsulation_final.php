<?php 
class BaseClass { 
	public function test() { 
		echo "BaseClass::test() called<br>"; 
	}
	public function moreTesting() { 
		echo "BaseClass::moreTesting() called<br>"; 
	} 
} 

class ChildClass extends BaseClass { 	
	function moreTesting() {
		$results =  "ChildClass::moreTesting() called<br>"; 
		return $results;
	} 
}

class ChildClass2 extends ChildClass{
	final function moreTesting(){
		return $results = "test final keyword";
	}
}

class ChildClass3 extends ChildClass2{
	function moreTesting(){
		
	}
}

$objx = new ChildClass2;
echo $objx->moreTesting();
?>
