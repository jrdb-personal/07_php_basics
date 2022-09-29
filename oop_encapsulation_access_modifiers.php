<?php
	class Encap{
		public $pub = 'public';
		protected $pro = 'protected';
		private $prv = 'private';

		protected function display(){
			echo $this->pub."<br>";
			echo $this->pro."<br>";
			echo $this->prv."<br>";
		}		
		public function display2(){
			$this->display();
		}
	}
	class ExtEncap extends Encap{
		public function getMembers($pub, $pro, $prv){
			$this->pub = $pub;
			$this->pro = $pro;
			$this->prv = $prv;
			return $this->pub."<br>".$this->pro."<br>".$this->prv;
		}
		public function getDisplay(){
			$this->display();
		}
		public function getThisDisplay(){
			return "<hr>".$this->pub."<br>"
			.$this->pro."<br>"
			.$this->prv;
		}
	}
	$objEncap = new Encap;
	//this will cause an error because both $pro and $prv are not accessible
	//echo $objEncap->pro.$objEncap->prv;
	//this will work because $pub is public
	//echo $objEncap->pub;

	//this will cause an error because display() function is protected
    //$objEncap->display();

	//this will work because display2 is public and it is accessing the protected function within Encap class
	//echo $objEncap->display2();
	//echo $objExtEncap->getThisDisplay();


	$objExtEncap = new ExtEncap;
	//this will work because we are accessing the local variables inherited from Encap class within the ExtEncap class
	//echo $objExtEncap->getMembers("public value", "protected value", "this is private")."<br>";
	

	

	
	

?>