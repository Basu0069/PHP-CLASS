<?php
$servername=''
$username="root";
$password= "";
$dbname="stud";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ".$conn-> conect_error);
}
echo "Connected successfully";;
?>


// SQL to create a table 
$sql = "CREATE TABLE IF NOT EXIST student(
    studid INT(6) PRIMARY KEY,
    studname VARCHAR(30) NOT NULL,
    age VARCHAR(30) NOT NULL,
    marks DECIMAL(5,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// EXECUTE THE quer and check for erros 

if($conn->query($sql)===TRUE){
    echo "Table 'student created successfulyy";
}
else{
    echo "Error creating table: " . $conn->error;
}
echo "Connected Successfulyy";
?>
<!-- SQL query to insert the data in the table  -->
<?php

sql - "INSERT INTO STUDENT(studid, studname, age, marks)Values(16"
(17,'amandeep','25',350);
(18,'Suman','25',250);
(19,'Nipun','28',40);

