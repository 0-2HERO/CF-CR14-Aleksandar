<?php
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM trips";
$result = mysqli_query($connect, $sql);
$tbody = ''; //this variable will hold the body for the table
if (mysqli_num_rows($result)  > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $tbody .= "<tr>

            <td><img class='img-thumbnail' src='pictures/" . $row['picture'] . "'> </td>
           <td>" . $row['locationName'] . "</td>
           <td>" . $row['price'] . "</td>
           <td>" . $row['description'] . "</td>
           <td>" . $row['longitude'] . "</td>
           <td>" . $row['latitude'] . "</td>
           <td><a href='update.php?id=" . $row['id'] . "'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
           <a href='delete.php?id="  . $row['id'] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>

            </tr>";
    };
} else {
    $tbody =   "<tr><td colspan='10'><center>No Data Available </center></td></tr>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dash</title>
    <?php require_once 'components/bootccs.php' ?>
    <style type="text/css">
    .manageTrips {
        margin: auto;
    }

    .img-thumbnail {
        width: 70px !important;
        height: 70px !important;
    }

    td {
        text-align: left;
        vertical-align: middle;

    }

    tr {
        text-align: center;
    }
    </style>
</head>

<body>
    <header>
        <?php require_once 'components/navbar.php' ?>
    </header>
    <div class="manageTrips w-75 mt-3">
        <div class='mb-3'>

            <a href="create.php"><button class='btn btn-primary' type="button">Add trip</button></a>
        </div>
        <div class="manageTrips w-90 mt-5">
            <table class='table table-striped'>
                <thead class='table-success'>
                    <tr>
                        <th>Picture</ th>
                        <th>Location </th>
                        <th>price</th>
                        <th>description</th>
                        <th>Longitude</th>
                        <th>Latitude</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $tbody; ?>
                </tbody>
        </div>
        </table>

    </div>
    <?php require_once 'components/footer.php' ?>
    <?php require_once 'components/bootjs.php' ?>
</body>

</html>