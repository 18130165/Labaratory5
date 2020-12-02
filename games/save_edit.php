<?php
    require_once "../connect.php";

    $id = $_GET['id'];

    $name = $_GET['name'];
    $genre = $_GET['genre'];
    $developer = $_GET['developer'];
    $publisher = $_GET['publisher'];
    $sold = $_GET['sold'];

    $result = $mysqli->query("UPDATE Games
        SET name='$name', genre='$genre', developer='$developer',
        publisher='$publisher', sold='$sold' WHERE id='$id'"
    );

    header("Location: games.php");
    exit;
?>