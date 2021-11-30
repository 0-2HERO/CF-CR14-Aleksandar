<?php
require_once 'db_connect.php';
require_once  'file_upload.php';

if ($_POST) {
    $locationName = $_POST['locationName'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $uploadError = '';


    //this function exists in the service file upload.
    $picture = file_upload($_FILES['picture']);

    $sql = "INSERT INTO `trips`( `picture`, `locationName`, `price`, `description`, `longitude`, `latitude`) VALUES ('$picture->fileName','$locationName','$price','$description','$longitude','$latitude')";

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $locationName</td>
            <td> $price </td>
            </tr></table><hr>";
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <?php require_once '../components/bootccs.php' ?>
</head>

<body>
    <header>
        <?php require_once '../components/navbar.php' ?>
    </header>
    <div class="d-flex justify-content-center align-items-center"
        style="background-image: url(https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1744&q=80); height: 50vh; background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
    </div>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Create request response</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p><?php echo ($message) ?? ''; ?></p>
            <p><?php echo ($uploadError) ?? ''; ?></p>
            <a href="/index.php"><button class="btn btn-primary">Home</button></a>
            <a href="../create.php"><button class="btn btn-primary ms-1">New trip</button></a>
        </div>
    </div>
    <?php require_once '../components/footer.php' ?>
    <?php require_once '../components/bootjs.php' ?>
</body>

</html>