<?php


function sumMyNumbers(...$a){
    $n=0;
    $len=count($a);

    for($i=0;$i<$len;$i++){
        $n=$n+$a[$i];
    }
    return $n;
}



$a=sumMyNumbers(5,5,5,5,5,5);
echo $a;
?>