<?php

    $connect = mysqli_connect("localhost", "root", "", "pesdios");

    $query = mysqli_query($connect, "SELECT * FROM farm_sensor");
    $data = mysqli_fetch_array($query);
    $moisture = $data["moisture"];

    echo $moisture."%";
?>