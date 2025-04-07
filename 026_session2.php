<?php
session_start();

if(isset($_SESSION['uid']))
echo $_SESSION['uid'];
else
echo "Session is no longer available"
echo "<br>";
if(isset($_SESSION['uname']))
echo $_SESSION['name'];


?>