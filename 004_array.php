<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// $a=array(1,2,3,4,5) this is same as down okay 

// $a=[1,2,3,4];
// for($i=0;i<count($a);$i++){
// echo $a[i];
// }

// foreach($a as $x)  this is same as above we have implement this down 
// echo "$x <br>";



// start





$fruit=["banana","grapes","apple"];
for($i=0;$i<count($fruit);$i++)
echo "$fruit[$i] <br>";


$fruit=array("banana","grapes","apples");
foreach($fruit as $x)
echo"$x <br>";

$color= array("name" => "Basu", "age" =>"67", "rode"=>"22");
foreach($color as $key => $value)
echo "$key is $value <br>";







$user=[
    [1,23,"chirag","railway"],
    [2,24,"rahul","JH2"]
];

for($i=0;$i<count($user);$i++)
for($j=0;$j<count($user[$i]);$j++)

{
echo $user[$i][$j] ;

echo "<br>";
}








// DO it using for eACH NOW x
$user=[
    [1,23,"chirag","railway"],
    [2,24,"rahul","JH2"]
];



foreach($user as $x)
foreach($x as $y)
{
echo $y ;
echo "<br>";
}




$a=23;
$b=34;
$c=($a>$b);
echo $c;
var_dump($c);



// print_r display the function in structure form okay 











?>
</body>
</html>