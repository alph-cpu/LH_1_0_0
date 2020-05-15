<?php
require('model/server.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/style_intro.css">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" >
    <a class="navbar-brand" href="/"> <img src="style/logo.png" width="120" height="55" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Forum </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">About</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php if (!isset($_SESSION['username'])) {   ?>
                <a class="btn btn-primary" href="register.php">Join Us</a>
            <?php } else {    ?>
                <!--                   <a class="btn btn-primary" href="home.php?logout='1'">logout</a>-->
                <a class="btn btn-primary" href="home.php">logout</a>
            <?php }  ?>

        </ul>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="#">Phase 1</a></p>
            <p><a href="#">Phase 2</a></p>
            <p><a href="#">General</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <h1>Welcome</h1>
            <h2><a href="https://www.fleetmon.com/maritime-news/2020/29601/philippine-navy-patrol-ship-damaged-fire-two-crew-/">Philippine Navy patrol ship damaged by fire, two crew injured </a>
                </h2>

            <p>     Fire erupted in engine room of Philippine Navy patrol ship BRP Ramon Alcaraz at night May 6,
                    shortly the ship left Cochin India, together with patrol ship BRP Davao del Sur (LD602),
                    with cargo of donated personal protective equipment. Fire ...
                    <a href="https://www.fleetmon.com/maritime-news/2020/29601/philippine-navy-patrol-ship-damaged-fire-two-crew-/">continue reading</a></p>

            <h3>Test</h3>
            <p>Lorem ipsum...</p>
        </div>
    </div>
</div>

</body>
</html>

