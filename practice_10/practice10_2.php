<?php
class MyCalculator{
    private $n1, $n2;

    public function __construct($n1, $n2){
        $this->n1 = $n1;
        $this->n2 = $n2;
    }

    public function add(){
        return $this->n1 + $this->n2;
    }

    public function multiply(){
        return $this->n1 * $this->n2;
    }
}

$mycalc = new MyCalculator(12,6);
echo $mycalc->add()."<br>";
echo $mycalc->multiply();
?>