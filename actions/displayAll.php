<?php
require_once 'db_connect.php';
// Set Content-Type header to application/json
// header("Content-Type:application/json");
$response = array();

if ($connect) {
    $sql = "SELECT * FROM trips";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header("Content-Type:application/json");
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $response[$i]['id'] = $row['id'];
            $response[$i]['picture'] = $row['picture'];
            $response[$i]['locationName'] = $row['locationName'];
            $response[$i]['price'] = $row['price'];
            $response[$i]['description'] = $row['description'];
            $response[$i]['longitude'] = $row['longitude'];
            $response[$i]['latitude'] = $row['latitude'];

            $i++;
        }
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
} else {
    echo "Database connection failed";
}