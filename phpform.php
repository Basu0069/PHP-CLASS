<?php
$ne=$pe=$ee="";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(empty($_POST['user_name'])){
        $ne="enter the useername";
    }
    else{
        $user_name=htmlspecialchars($_POST['user_name']);
        $ne= "Welcome,". $user_name. "!";
    }

    if(empty($_POST['pwd'])){
        $pe="enter user password";
    }
    else{
        $pwd=htmlspecialchars($_POST['pwd']);
        $pe="your passwrod is".$pwd."!!";
    }


    if(empty($_POST['email'])){
        $ee="enter email";
    }
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    name: <input type="text" name="user_name">
    <?php echo $ne? "<br>". $ne: ""; ?>
    <br>

    pwd: <input type="password" name="pwd"> 
    <?php echo $pe ? "<br>" . $pe : ""; ?>
    <br>

    email: <input type="email" name="email">
    <?php echo $ee ? "<br>" . $ee : "";?>
    <br>

    <input type="submit" value="Submit">
    </form>

</body>
</html>