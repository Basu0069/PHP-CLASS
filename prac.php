<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label>username</label>
        <input type="text" name="username">
        <label>passwro</label>
        <input type="password" name="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>



<?php

if(isset($_POST["login"])){
    $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE__SPECIAL_CHARS)
}


?>setcookie("fav_food","pizza",time()+(86400*2), "/");


<?php

session_start();
?>



<?php
$_SESSION["username"= "Broded"]


echo $_SESSION["usrname"] . "<br>";

if($_SERVER["REQUEST_METHOD"])
?>


$passwrofd= "pizza123";

$hash = password_has($password, PASSWORD_DEFAULT);