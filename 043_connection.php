<!-- access files like this using this http://localhost/yourfile.php
 -->


 <!-- Check database here  http://localhost/phpmyadmin/ --> 
  



<?php
$servername = "localhost";
$username = "phpuser";
$password = "yourpassword";

$c = new mysqli($servername, $username, $password);

if ($c->connect_error) {
    die("Connection failed: " . $c->connect_error);
}
echo "Connection successful!";
?>




<!-- Create database using sql query -->
 <!-- $sql= "CREATE DATABASE stud1";
 if($conn->query($sql) == TRUE){
    echo "Database created successfully";
 }
 else{
    echo "Error creating database: " . $conn->error;
 }
 $conn->close();
 ?> -->