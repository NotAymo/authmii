<?php

    $sname = "localhost";
    $unmae = "root";
    $password = "";

    $db_name = "test_db";

    $conn = mysqli_connect($sname, $unmae, $password, $db_name);

    if(!$conn) {
        echo "The database disconnected itself, please try again later."
    }