<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- To run php files on localhost start your build in server by this link  -->
php -S localhost:8000

<!--  then go to the browser and type this  -->
http://localhost:8000/myfile.php











    
<?php
// echo "Hello, World! it is working fineeeeeeeeeeee ";
$a = 23;

function swap($x,$y)
{
    global $a; // iska mtlb h ki ye bahar ke a ko acces kr pa rha h okay 
    $a++;
    $a = 23;
    $temp=$x;
    $x=$y;
    $y=$temp;

    
    echo "x=$x, y=$y";
}
$a++;

?>

<!-- array name is the pointer which by default points to the first element of an aray..It is basically a pointer  -->


    
</body>
</html>


