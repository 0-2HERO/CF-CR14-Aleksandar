<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM trips WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $locationName = $data['locationName'];
        $description = $data['description'];
        $longitude = $data['longitude'];
        $latitude = $data['latitude'];
        $price = $data['price'];
        $picture = $data['picture'];
    } else {
        header("location: error.php");
    }
} else {
    header("location: error.php");
};

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once 'components/bootccs.php' ?>
</head>
<style>
.manageTrips {
    margin: auto;
}

.img-thumbnail {
    width: 70px !important;
    height: 70px !important;
}

td {
    text-align: middle;
    vertical-align: middle;

}

tr {
    text-align: center;
}
</style>

<body>
    <header>
        <?php require_once 'components/navbar.php' ?>
    </header>
    <div class="d-flex justify-content-center align-items-center"
        style="background-image: url(https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1744&q=80); height: 50vh; background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
    </div>






    <div class="container">
        <div class="row justify-content-evenly py-5">
            <div class="d-flex flex-column align-items-center mt-3 mb-3">


                <fieldset>
                    <legend class='h2 py-4 text-center'>Update Trip</legend>
                    <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
                        <table class='table'>
                            <tr>
                                <th>Location Name</th>
                                <td><input class='form-control' type="text" name="locationName"
                                        placeholder="Location Name" value="<?php echo $locationName ?>" /></td>
                            </tr>
                            <tr>
                                <th>Image File Upload</th>
                                <td><input class='form-control' type="file" name="picture" placeholder="Picture Name" />
                                </td>
                            </tr>

                            <th>Price</th>
                            <td><input class='form-control' type="number" name="price" placeholder="Price"
                                    value="<?php echo $price ?>" /></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td><textarea class='form-control' type="text" name="description"
                                        placeholder="Max. 500 characters" rows="5"
                                        value="<?php echo $description ?>"><?php echo $description ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>Longitude</th>
                                <td><input class='form-control' type="text" name="longitude" placeholder="Longitude"
                                        value="<?php echo $longitude ?>" /></td>
                            </tr>
                            <tr>
                                <th>Latitude</th>
                                <td><input class='form-control' type="text" name="latitude" placeholder="Latitude"
                                        value="<?php echo $latitude ?>" /></td>
                            </tr>
                            <th></th>
                            <input type="hidden" name="id" value="<?php echo $id ?>" />
                            <input type="hidden" name="picture" value="<?php echo $picture ?>" />
                            <td><button class="btn btn-primary me-5" type="submit">Save Changes</button><a
                                    href="index.php" class="btn btn-danger">Back</a></td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
    <?php
    include_once 'components/footer.php';
    ?>

    <?php include_once 'components/bootjs.php'; ?>


</body>

</html>