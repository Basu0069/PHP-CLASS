<?php
abstract class Shape {
    abstract function area();
}

class Circle extends Shape {
    public $r;

    public function __construct($a) {
        $this->r = $a;
    }

    public function area() {
        return 3.14 * $this->r * $this->r;
    }
}

$obj = new Circle(2);
echo $obj->area(); // Output: 12.56

// Removed echo $b; because $b is undefined.
?>
