<?php
    require_once "../connect.php";

    $name = $_GET['name'];
    $genre = $_GET['genre'];
    $developer = $_GET['developer'];
    $publisher = $_GET['publisher'];
    $sold = $_GET['sold'];

    // Выполнение запроса
    $result = $mysqli->query("INSERT INTO Games
        SET name='$name', genre='$genre', developer='$developer',
        publisher='$publisher', sold ='$sold'"
    );

    header("Location: games.php");
    exit;
?>