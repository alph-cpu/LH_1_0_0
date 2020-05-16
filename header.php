<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg navbar-dark" >
        <a class="navbar-brand" href="/"> <img src="style/logo.png" width="120" height="55" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="#">EXAM ASSIST</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="#">CAREER</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="#">E-LEARNING</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
<!--                <input type="search" placeholder="Search" aria-label="Search">-->
<!--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
                <?php if (!isset($_SESSION['username'])) {   ?>
                    <a class="btn btn-outline-primary" href="login.php">Login</a>
                <?php } ?>
                <?php if (!isset($_SESSION['username'])) {   ?>
                    <a class="btn btn-primary" href="register.php">Join Us</a>
                <?php } else {    ?>
                    <a class="btn btn-primary" href="home.php">logout</a>
                <?php }  ?>
            </ul>
<!--            <form class="form-inline">-->
<!--                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
<!--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
<!--            </form>-->
        </div>
    </nav>
</head>
