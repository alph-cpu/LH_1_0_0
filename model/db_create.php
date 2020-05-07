<?php

    $d = file_get_contents('model\db_conf.sql');
    $qr = "$d";
    $create = mysqli_query($db, $qr);
?>