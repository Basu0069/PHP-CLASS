<?php
class Student {
    public $regno, $name;

    public function get_details($a, $b) {
        $this->regno = $a;
        $this->name = $b;
        //  this pointing to its own member
        // private can be use within the class okay 

        echo $this->name;
        echo "<br>";
        echo $this->regno;
    }
}

$obj = new Student();

$obj->get_details(123456, "chirag");
?>
