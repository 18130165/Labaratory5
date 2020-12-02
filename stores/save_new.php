<?php
    require_once "../connect.php";

    $name = $_GET['name'];
    $url = $_GET['url'];

    // Выполнение запроса
    $result = $mysqli->query("INSERT INTO Stores SET name='$name', url='$url'");

    header("Location: stores.php");
    exit;
?>