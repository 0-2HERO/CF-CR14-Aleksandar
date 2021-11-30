<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #map {

        height: 90%;

    }


    html,
    body {

        height: 100%;

        margin: 0;

        padding: 0;

    }
    </style>
</head>

<body>


    <div id="map"></div>
    <script>
    //map
    var map;

    function initMap() {
        var vienna = {
            lat: 48.2072128523562,
            lng: 16.371752818166843
        };
        map = new google.maps.Map(document.getElementById('map'), {
            center: vienna,
            zoom: 8

        });

        var pinpoint = new google.maps.Marker({
            position: vienna,
            map: map
        });
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap"
        async defer>
    </script>
</body>

</html>