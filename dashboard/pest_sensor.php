<?php

    $connect = mysqli_connect("localhost", "root", "", "pesdios");

    $query = mysqli_query($connect, "SELECT * FROM farm_sensor");
    $data = mysqli_fetch_array($query);
    $pest = $data["pest"];

    if ($pest == 1) {
        echo "Pest Detected";
    } else {
        echo "No Pest Detected";
    }
?>