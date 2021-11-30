<?php require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM trips WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {
        $picture = $data['picture'];
        $locationName = $data['locationName'];
        $price = $data['price'];
        $description = $data['description'];
        $longitude = $data['longitude'];
        $latitude = $data['latitude'];
    }
} else {
    header("location: error.php");
}


//weather
require_once 'RESTful.php';

$city = "$longitude,$latitude";
$url = 'https://api.darksky.net/forecast/e329256a741df2bcccffedd3600287c2/' . $city .
    '?exclude=minutely,hourly,daily,alerts,flags';
$result = curl_get($url);
$weather = json_decode($result);
$fahrenheit = $weather->currently->temperature;
$celsius = round(($fahrenheit - 32) * (5 / 9), 2);

$whetherbody = "
<div class='card text-center text-white bg-primary' style='width: 18rem; font-size: 1.2rem'>
    <p class='card-title'> {$weather->timezone} </p>
    <div class='card-body'>
        <p class='card-text'> {$weather->currently->summary} </p>
        <p class='card-text'>{$celsius}°C</p>
        <p class='card-text'>{$fahrenheit}°F</p>
    </div>
</div>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <?php require_once 'components/bootccs.php' ?>
    <style type="text/css">
    #map {
        width: 30vw;
        height: 30vw;
        min-width: 250px;
        min-height: 250px;
    }



    #weather {
        width: 20vw;
        height: 20vw;
    }
    </style>

</head>

<body>

    <header>
        <?php require_once 'components/navbar.php' ?>
    </header>


    <div class="container mt-5">
        <div class="row g-5">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card border-0">
                    <img src="../pictures/<?= $picture ?>" class="card-img-top">
                    <div class="card-body">
                        <h1 class="card-title text-center fw-lighter"> <?= $locationName ?></h1>
                        <h4 class="card-subtitle mb-2 mt-3 fw-light">Price: €<?= $price ?></h4>

                        <h5 class="card-text fw-lighter"><?= $description ?></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div id="map"></div>
                <button class="btn btn-success m-3" id="btn">Weather</button>
                <div id="weather"></div>

            </div>
        </div>
    </div>
    <?php require_once 'components/footer.php' ?>

    <script>
    //map
    var map;

    function initMap() {
        var <?= $locationName ?> = {
            lng: <?= $longitude ?>,
            lat: <?= $latitude ?>
        };
        map = new google.maps.Map(document.getElementById('map'), {
            center: <?= $locationName ?>,
            zoom: 8

        });

        var pinpoint = new google.maps.Marker({
            position: <?= $locationName ?>,
            map: map
        });
    }

    //whether
    document.getElementById("btn").addEventListener("click", show);

    function show() {
        console.log("<? echo $whetherbody ?>")
        document.getElementById("weather").innerHTML = `<?php echo $whetherbody; ?>`;
    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap"
        async defer>

    </script>
</body>


</html>