<?php
    require_once "../connect.php";

    $id = $_GET['id'];
    // Удаление самого магазина
    $result = $mysqli->query("DELETE FROM Stores WHERE id='$id'");

    header("Location: stores.php");
    exit;
?>