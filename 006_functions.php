<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

// function k23dg(&$a,&$b){
//     //  do it with using reference variable 
// $c=$a;
// $a=$b;
// $b=$c;

// }
// $a=23;
// $b=5;
// k23dg($a,$b);
// // k23dg($a,$b);
// echo $a, $b;




// NOW function with defaualy values::


function k23dg ($x,$y=67){
    $c=$x+$y;
    return $c;


}


$m=k23dg(13);
echo $m;

// // ALways remeber declaration is done on the right  hand sidel aleway




function addNumbers(int $a, int $b){
    return $a + $b;
}
echo addNumbers(5,(int)"5 days");


function addNumbers(int $a, int $b){
    return $a + $b;
}
echo addNumbers(5,(int)"5 days");
// Techincally it should be a error but ye code run ho jana chaiye tha.. but it didint run soo yhe 







?>
</body>
</html>