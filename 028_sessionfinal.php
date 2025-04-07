<!-- create fomr in html and link it to php file 
 another option is create html in this file only 
  -->








<form action="" method="POST">
UID: <input type="text" name="uid" placehooder="Enter UID">
<br>
<br>
<button name="button" value="set">SETSESSION</button>
<br>
<br>
<button name="button" value="display">DISPLAY SESSION</button>
<br>
<br>
<button name="button" value="delete">DELETEESSION</button>



</form>

<?php
session_start();
if(isset($_POST['button']))
{
    if($_POST['button']="set")
    {
        $v=$_POST['uid'];
        $_SESSION['uid']=$v;
        echo "Session is setup";
        echo "<br>";
    }



    if($_POST['button']=="display"){
        if(isset($_SESSION['uid']))
        echo "My session value is ".$_SESSION['uid'];
    }
    else{
        echo"Session does not exits";
    }



    if($_POST['button']=="delete"){
        if(isset($_SESSION['uid'])){
            echo "Session has been destroyed";
            echo "<br>";
            session_unset();
            session_destroy();
        }
    }
}

?>