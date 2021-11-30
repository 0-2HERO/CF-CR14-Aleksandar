<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require_once 'components/bootccs.php'; ?>
    <title>Add Trip</title>
</head>

<body>
    <header>
        <?php
        include_once 'components/navbar.php';
        ?>
    </header>
    <div class="d-flex justify-content-center align-items-center"
        style="background-image: url(https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1744&q=80); height: 50vh; background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
    </div>
    <div class="container">
        <div class="d-flex flex-column align-items-center">
            <fieldset>
                <legend class='h2 py-4'>Add a new Trip</legend>
                <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
                    <table class='table'>
                        <tr>
                            <th>Location Name</th>
                            <td><input class='form-control' type="text" name="locationName"
                                    placeholder="Location Name" /></td>
                        </tr>
                        <tr>
                            <th>Image File Upload</th>
                            <td><input class='form-control' type="file" name="picture" placeholder="Picture" />
                            </td>
                        </tr>

                        <tr>
                            <th>Price</th>
                            <td><input class='form-control' type="number" name="price" placeholder="Price" /></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td><textarea class='form-control' type="text" name="description"
                                    placeholder="Max. 500 characters" rows="5"></textarea></td>
                        </tr>
                        <tr>
                            <th>Longitude</th>
                            <td><input class='form-control' type="text" name="longitude" placeholder="Longitude" /></td>
                        </tr>
                        <tr>
                            <th>Latitude</th>
                            <td><input class='form-control' type="text" name="latitude" placeholder="Latitude" /></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><button class='btn btn-primary mx-2' type="submit">Insert Trip</button><a
                                    href="index.php" class='btn btn-danger mx-2'>Cancel</a>
                            </td>


                        </tr>
                    </table>
                </form>
            </fieldset>
        </div>
    </div>
    <?php
    require_once 'components/footer.php';
    ?>
    <?php require_once 'components/bootjs.php'; ?>

</body>