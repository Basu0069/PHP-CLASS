 <!-- two choices first is use frontend and method mei php file dal do -->
 
 <form action="" method="POST">
        
    Name: <input type="text" name='uid' placeholder="">
        <br>
        <br>
        <button name="button" value="set">Set</button>
        <br>
        <br>
        
        <button name="button" value="display">Display</button>
        <br>
        <br>
        
        <button name="button" value="delete">Delete</button>
        <br>


    </form>

    <?php
if(isset($_POST['button']))
{
    if($_POST['button']=="set")

    {

        $v=$_POST['uid'];
        echo $v;
        echo "<br>";
        setcookie("chirag",$v,time()+86400);
        
        echo "cookie is set up";
        echo "<br>";

    }



    if($_POST['button']=="display")
    {

        if(isset($_COOKIE['chirag'])){
            echo "the value of cookie is ".$_COOKIE['chirag'];
        }
    }



    if($_POST['button']=="delete")
    {
        if(isset($_COOKIE['chirag']))
        {
            setcookie("chirag",null,-1);
        }
    }


}


?>