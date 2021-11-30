<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Error</title>
    <?php require_once 'components/bootccs.php' ?>
</head>

<body>
    <header>
        <?php require_once 'components/navbar.php' ?>
    </header>
    <div class="d-flex justify-content-center align-items-center"
        style="background-image: url(https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1744&q=80); height: 50vh; background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
    </div>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Invalid Request</h1>
        </div>
        <div class="alert alert-warning" role="alert">
            <p> You've made an invalid request. Please <a href="index.php" class="alert-link">go back </a> to index and
                try again.</p>
        </div>
    </div>
    <?php require_once 'components/footer.php' ?>
    <?php require_once 'components/bootjs.php' ?>

</body>

</html>