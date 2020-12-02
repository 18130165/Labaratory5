<?php
    require_once "../connect.php";

    $id = $_GET['id'];

    $result = $mysqli->query("DELETE FROM GameKeys WHERE id='$id'");

    header("Location: game_keys.php");
    exit;
?>