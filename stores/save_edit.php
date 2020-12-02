<?php
    require_once "../connect.php";

    $id = $_GET['id'];

    $name = $_GET['name'];
    $url = $_GET['url'];

    $result = $mysqli->query("UPDATE Stores SET name='$name', url='$url' WHERE id='$id'");

    header("Location: stores.php");
    exit;
?>