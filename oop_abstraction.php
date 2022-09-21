<?php
abstract class AbstractClass{
    abstract public function getValue();
    abstract protected function prefixValue($prefix);
    function printOut() {
        print $this->getValue() . "\n";
    }
}
class ConcreteClass1 extends AbstractClass{  
    public function getValue() {
        return "ConcreteClass1 <br>";
    }
    protected function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1 <br>";
    }
}
class ConcreteClass2 extends AbstractClass{
    public function getValue() {
        return "ConcreteClass2 <br>";
    }
    protected function prefixValue($prefix) {
        return "ConcreteClass2{$prefix} <br>";
    }
    private function setPrivate($value){
        return $value;
    }
    public function accessProtected($param){
        return $this->prefixValue($param);
    }
    public function accessPrivate($param){
        return $this->setPrivate($param);
    }
}
$objClass1 = new ConcreteClass1;
//echo $objClass1->accessProtected('Sample') ."<br>";
$objClass2 = new ConcreteClass2;
echo $objClass2->accessPrivate('Test') ."<br>";
?>