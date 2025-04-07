<?php

setcookie("chirag",16717,time()+86400);
setcookie("fav","tennis",time()+86400);

if(isset($_COOKIE['chirag']))
{

    echo " the cookie value is". $_COOKIE['chirag'];
    echo "<br>";
}


if(isset($_COOKIE['fav']))
{

    echo " the cookie value is". $_COOKIE['fav'];
}

// The values are comming it means the value is setting up.


