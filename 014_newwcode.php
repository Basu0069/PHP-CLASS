<?php
if($_POST['username']&&$_POST['pwd']&&$_POST['email'])
{
    echo $_POST['username'];
    echo "<br>";
    echo $_POST['pwd'];
    echo "<br>";
    echo $_POST['email'];



    // WE CAN PRINT THE VALUES USING PRINT_R 
    print_r($_POST); 
}
else{
    echo "Enter all Details Properly";
}



?>