<?php


$studid= 16;
$marks= 500;

$sql= "UPDATE stud SET amrks = $marks WHERE  studid=$studid"

if(mysqli_query($con,$sql)){
    echo "Record updated successfully\"'
}

?>
