<?php

$name = array("John","Alice","Bob");

$len = count($name);

echo "[";
for($i=0;$i<$len;$i++){
    echo "$i => $name[$i] ";
}
echo "]";




?>