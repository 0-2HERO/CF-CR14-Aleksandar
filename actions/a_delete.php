<?php
require_once 'db_connect.php';

if ($_POST) {
    $id = $_POST['id'];
    $picture = $_POST['picture'];
    ($picture == "travel.jpeg") ?: unlink("../pictures/$picture");

    $sql = "DELETE FROM trips WHERE id = {$id}";
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "Successfully Deleted!";
    } else {
        $class = "danger";
        $message = "The entry was not deleted due to: <br>"  . $connect->error;
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
    <title>Delete</title>
    <?php require_once '../components/bootccs.php' ?>

</head>

<body>
    <header>
        <?php require_once '../components/navbar.php' ?>
    </header>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Delete request response</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p><?= $message; ?></p>
            <a href='../dash.php'><button class="btn btn-success" type='button'>Dashboard</button></a>
            <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
        </div>
    </div>
    <?php require_once '../components/footer.php' ?>
    <?php require_once '../components/bootjs.php' ?>
</body>

</html>