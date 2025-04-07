<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $n=$_POST['username'];
    if(!preg_match("/^[a-zA-Z]+$/",$n)){
        echo "Invalid username";
    }else{
        echo htmlspecialchars($n);
    }
    $a=$_POST['pwd'];
    $l=strlen($a);
    if(($l==10) && (preg_match("/^[0-9]+$/",$ph))){
        echo htmlspecialchars($a);
    }else{
        echo "enter valid password number";
    }
}
seesion_start();
if(isset($_SESSION['button']))
{
$u=$_POST['uid'];
if(!filter_var($u,FILTER_VALIDATE_EMAIL)){
    echo "Invalid username ";
}else{
echo htmlspecialchars($u)
}

if($_POST['button']=='login'){
        

}

// error 


}