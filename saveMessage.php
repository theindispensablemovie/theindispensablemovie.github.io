<?php
    header("Content-Type: application/json; charset=UTF-8");
    $obj = $_GET["x"];

    //replace the file
    file_put_contents('messages.json', $obj);
?>