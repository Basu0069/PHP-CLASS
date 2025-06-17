<?php
class Student {
    public $regno, $name;


     // function __construct(){
    //         $this->regno = $23;
    //         $this->name = "chirag";
          
    
    //         echo $this->name;
    //         echo "<br>";
    //         echo $this->regno;
    //     }
    // }
    // Constructor
    function __construct($a = 23, $b = "chirag"){
        $this->regno = $a;
        $this->name = $b;

        echo $this->name;
        echo "<br>";
        echo $this->regno;
        echo "<br>";
    }

    // Destructor
    function __destruct(){
        echo "Destructor is called. Object destroyed.";
    }
}

// Object creation
$obj1 = new Student(57, "Basu");
?>


