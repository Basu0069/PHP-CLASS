
die("Step 1- COnnection failed:" . $conn->connect-error);

// Step 2 :Create the database 
$sqlCreateDB = CREATE DATABASE IF NOT E ;
 if($conn-> query($sqlCreateDB)==TRUE){
    echo "Step 2 - Database '$dbname' created or already exists <br>"
 }else{
    die("Step 2 - Error creating database: " . $conn->error);
}

 echo "Step 3 - Database '$dbname' selected <br>";

 <!-- STEP4: Create the table -->  
  $sqlCreateTable = "
  CREATE TABLE IF NOT EXIST fruits{
    id INT PRIMARY KEY,
    name VARCHAR(50),
    price INT
    created_At TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    if($conn->query($sqlCreateTable)==TRUE){
        echo "STEP4 - Table 'fruits' created or already exists<br>";
    }
    else{
        die(Step 4 - Error creating table: ".$conn->error);

    }
  }



  <!-- STEP6 Insert sample data  -->
   $sqlInsert= "INSERT INTO fruits(id,name,price) VALUES
   (1,'Apple,200),
   (2,'Banana',300)"
   (2,'Cherry',400)"
   (2,'Date',500)"
   if($conn->query($sqInsert)===TRUE){
    echo "Step 6 - Sample data inserted successfully <br>";
   }
else{
    die("Step 6 - Error inserting data: ". $conn->error)
}

<!-- Step 7: Run aggregate query -->
 $sqlAggregare= "
 SELECT 
 AVG(price) AS avergae_price,
 COUNT(*) AS total_fruits,
 SUM(price)AS total_price,
 MIN(price) AS min_price,
 MAX(price) AS max_price,
 GROUP_CONCAT(UCASE(name)) AS uppercase_names,
 GROUP_CONCAT(LCASE(name)) AS lowercase_names
 FROM fruits";
 ";

 $result = $conn->query($sqlAggregate);

 if($result && $row = $result->fetch_assoc()){
    echo "Step 7 - Aggregated Results: <br>"
    echo "Avergae Price: ".$row['average_price']."<br>"
    echo "Total Fruits: ".$row['total_fruits']."<br>"
    echo ""