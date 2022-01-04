<?php
    header("Content-Type: application/json; charset=UTF-8");
    $obj = $_GET["x"];

    //replace the file
    file_put_contents('https://theindispensablemovie.github.io/messages.json', $obj);
    echo file_get_contents('https://theindispensablemovie.github.io/messages.json');
?>