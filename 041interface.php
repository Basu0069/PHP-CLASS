<?php
interface A {
    public function scan();
}

interface B {
    public function print();
}

class C implements A, B {
    public function scan() {
        echo "This is the actual scan function that overrides scan()<br>";
    }

    public function print() {
        echo "This is the actual print function that overrides print()<br>";
    }
}

$obj = new C();
$obj->scan();
$obj->print();
?>
