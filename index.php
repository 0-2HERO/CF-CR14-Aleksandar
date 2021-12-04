<?php
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM trips";
$result = mysqli_query($connect, $sql);
$offers = ''; //this variable will hold the body for the table
if (mysqli_num_rows($result)  > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $offers .= "
         <div class='card  border-0' style='width: 20rem;'>
         <img class='card-img-top' src='pictures/" . $row['picture'] . "'>
         <div class='card-body'>
           <h5 class='card-title fw-light'>WHAT IS AUSTRIA ABOUT..</h5>
           <h5 class='card-title fw-lighter'>" . $row['locationName'] . "</h5>
           <p class='card-text fw-lighter fs-7'>" . $row['description'] . "</p>
           <a href='details.php?id=" . $row['id'] . "'><button class='btn btn-primary btn-sm' type='button'>Details</button></a>
         </div>
       </div>";
    };
} else {
    $tbody =   "<tr><td colspan='5'><center> No trips available</center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">


    <?php require_once 'components/bootccs.php' ?>
    <link rel="stylesheet" href="components/style.css">
</head>

<body>
    <header>
        <?php require_once 'components/navbar.php' ?>
    </header>
    <div class="jumbotron p-3 p-md-5 text-white rounded" id="jumbo">
        <div class="col-md-6 px-0 mt-5">
        <br>       <br>        <br>        <br>        <br>        <br>        <br>        <br> 
          <h1 class="display-4 font-italic" id="first">Advenure awaits...</h1>
          <p class="lead my-3" id="second">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0" id="third"><a href="#" class="text-white font-weight-bold">Contact us...</a></p>
        </div>
      </div>
    <div class="d-flex justify-content-center mt-5 mb-5">
        <h2 class="fw-lighter">Travel offers</h2>

    </div>
    <div class="row justify-content-around "><?= $offers; ?></div>

    <?php require_once 'components/footer.php' ?>

    <?php require_once 'components/bootjs.php' ?>
</body>

</html>