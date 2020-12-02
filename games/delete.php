<?php
    require_once "../connect.php";

    $id = $_GET['id'];

    // Удаление самой игры
    $result = $mysqli->query("DELETE FROM Games WHERE id='$id'");

    header("Location: games.php");
    exit;
?>