<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
    // $x= "Hello";
    // var_dump($x);
    // $x= 5;
    // Var_dump($x);

    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);


    $K23DG= array(1,2,3);
    Var_dump($K23DG);

        $x="Hello World";
    echo strtoupper($x);

    // When function that is user defined or pre-defined wants to print hte value that is return you need to put echo before it. okay 

// 'it returns a integer where your integer is present in the value..'


    $b= strpos("$x","World");
    echo $b;


    // echo strpos("Hello World","World");

    $y="SMALLER VALUES";
    echo strtolower($y);


    $p="Hello World!";
    echo str_replace("World","Dolly",$x);
    // first one is what you want to replace and the second one is which character you want it asa place and then variables .



    $x= "Hello";
    $y="World";
    echo $x.$y;


    // $txt1=" hello";
    // $txt2=" okay bye";
    // echo $txt1.=$txt2;


    const x = 4;

    function add(){
        $y=25;
        // x+=$y;
        // Changes in x would not work okayy!!
        $y+=x;
    }


//     define("X", 4);  // Use define() to create a constant in PHP

//         function add() {
//     $y = 25;
//     $y += X;  // Use the constant X, no $ sign needed
//     return $y;  // Return the result of the addition
// }

// echo add();  // Echo the result of the add function

    
    define("Hello","EMMEMEM ");
    define("l",55);
    echo Hello;
    echo l;
    
    echo __FILE__;
    echo "<br>";
    echo __DIR__;
    echo "<br>";
    echo __CLASS__;
    echo "<br>";
    echo __LINE__;
    echo "<br>";
    
    function okay(){
        $y=25;
        echo __FUNCTION__;
    }
    okay();


    $x = 20;
    $y = 45;
    $z= ($x==$y);
    echo ($z);


    ?>



</body>
</html>