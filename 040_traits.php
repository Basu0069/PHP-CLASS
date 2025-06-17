<?php
// Implement multiple inheritance using traits
trait A {
    public function scan() {
        echo "Scan the Value<br>";
    }
}

trait B {
    public function display() {
        echo "Display the Value<br>";
    }
}

class C {
    use A, B;

    public function displayandscan() {
        $this->scan();
        $this->display();
    }
}

$obj = new C();
$obj->displayandscan();
?>
