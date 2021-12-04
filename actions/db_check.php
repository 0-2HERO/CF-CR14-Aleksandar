<?php

// Require conn.php (DB connection) file
require_once "db_connect.php";

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $sql = "SELECT * FROM trips";

// Perform a query on the DB
$result = mysqli_query($connect, $sql);

// Fetch the query into $row
$row = mysqli_fetch_assoc($result);

   // Store values into the variables
   $locationName=$row['locationName'];
   $price=$row['price'];


}





// Close the DB connection
mysqli_close($connect);