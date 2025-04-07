<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// Array_Combine

// $arr1=array("Hello","ok","bye");
// $arr2=array(75,57,62);

// $c= array_combine($arr1,$arr2);
// print_r($c);
// echo "<br>";





// Array_chunk()


// $courses=array("PHP","Laravael","Node js", "HTML","CSS","ASP.NET");
// print_r(array_chunk($courses,2));





// function sum($a,$b){
//     $c= $a+$b;
//     echo $c;
// }
// sum(5,"Hello"); // it wont work cause php will conver this string into numerice value 







// array count
// echo "<br>";
// $a=array(1,2,2,3,4,4);
// print_r(array_count_values($a));


// array difference 
// comapres of values of 2 or more and arrays and return the differernces. 
// first agument then it will check first argument neatly. 


// $a=["Hello","Okay","Bye"];
// $b=["Okay"];
// print_r(array_diff($a,$b)); // without using varuabe 



// Using array flip her3 imp
// $a1=array("a"=>"red","b"=>"green","c"=>"blue")



// array intersect 
// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("e"=>"red","f"=>"green","g"=>"blue");
// $a3=array("red","blue");
// $result=array_intersect($a1,$a2,$a3);
// print_r($result);



// ye same question app numberd ke ath kr skte ho okay
// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("e"=>"red","f"=>"green","g"=>"blue");
// $a3=array("h"=> "blue");
//   $result=array_intersect($a3,$a2,$a1);// here a3 is the domiannt one so rhe answer wold be in a3 values
//   print_r($result);


// Array Merge()
// merges one or more arrays into one arrays:
// $a1=array("a"=>"red","b"=>"green");
// $a2=array("c"=>"blue","b"=>"yellow");
// $a3=array("c"=>"orange","b"=>"magenta");
// print_r(array_merge($a1,$a2,$a3));



// Array pop
// $a=array("Red","Green","Black");
// array_pop($a);
// print_r($a);

// ARRAY PUSH
// $a=array("red","green");
// array_push($a,"blue","yellow");
// print_r($a);



// ARRAY REVERSE:

// $a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
// print_r(array_reverse($a));




// Array Search 
// $a=array("a"=>"red","b"=>"green","c"=>"blue");
// echo array_search("red",$a);


// Array Slice:return selected parts of the array 
// 3 aguments to work with 
// $a=array("a"=>"Red","b"=>"Green","c"=>"blue","d"=>"yellow","e"=>"brown");
// print_r(array_slice($a,1,2));


// Every time im running code this local variables changes eerytime okay 


// Array_Column 
// returns the value from a singlr column in the input array:

$result=array(
    array('name'=>'Mannoj','cgpa'=>6.7,'status'=>'pass'),
    array('name'=>'Basu','cgpa'=>9.8,'status'=>'pass'),
    array('name'=>'Mani','cgpa'=>3.2,'status'=>'fail')
);

$name1 = array_column($result,'name');
print_r($name1);












?>
</body>
</html>