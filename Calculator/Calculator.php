<?php
interface Oper {
    public function calc($x, $y);
}

class Summ implements Oper {
    public function calc($x, $y){
        return $x + $y;
    }
}

class Multi implements Oper {
    public function calc($x, $y){
        return $x * $y;
    }
}

class Subtract implements Oper {
    public function calc($x, $y){
        return $x - $y;
    }
}

class Division implements Oper {
    public function calc($x, $y){
        return $x / $y;
    }
}

class Exponent implements Oper {
    public function calc($x, $y){
        return $x ** $y;
    }
}

class Calc {
    public $x;
    public $y;
    public function Calculate(Oper $oper){
        return $oper->calc($this->x, $this->y);
    }
}
$calc = new Calc();
$calc->x = 10;
$calc->y = 3;
$summ = new Summ();
echo $calc->Calculate($summ).'<br>';

$multi = new Multi();
echo $calc->Calculate($multi).'<br>';

$subtr = new Subtract();
echo $calc->Calculate($subtr).'<br>';

$division = new Division();
echo $calc->Calculate($division).'<br>';

$expo= new Exponent();
echo $calc->Calculate($expo);

//-----------------------------------------------------------

