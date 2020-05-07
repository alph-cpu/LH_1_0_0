<?php 

    $db = mysqli_connect('localhost:3308', 'root', '', 'test_1');

    $query = "SELECT * FROM user LIMIT 1";
    $results = mysqli_query($db, $query);
    if ($results !== FALSE) {
        //Do nothing
    }
    else {
        include('db_create.php');
    }
?>