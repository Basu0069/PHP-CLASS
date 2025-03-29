<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function K23DG(){
        static $x; // iska mtlb h ki. retains its value across multiple function calls.Remember its value from the previous call.
        $x++;
        echo$x;
    }
    K23DG();
    K23DG();
    K23DG();


    ?>

    <!-- static value does not deleted..  -->

    <!-- THE Semi - Colon written after any control structure statement signifies that there is no statement inside it ...Dont need to put braces -->


    $p= 2;
    if($p<5);
    echo $p;

    
    
</body>
</html>