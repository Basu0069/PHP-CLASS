<?php
class A 
{
    public $a;

    public function f(){
        $this->a = 0;
    }

    public function display(){
        $this->a++;
    }

    public function okay(){
        echo $this->a;
    }

    public static function inc(){
        echo "Hello<br>";   
    }
}

A::inc();
A::inc();
A::inc();

$obj = new A();
$obj->f();
$obj->display();
$obj->display();
$obj->display();
$obj->okay(); // Output: 3
?>
