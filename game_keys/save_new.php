<?php
    require_once "../connect.php";

    $purchase_date = $_GET['purchase_date'];
    $expiry_date = $_GET['expiry_date'];
    $game_id = $_GET['game_id'];
    $store_id = $_GET['store_id'];
    $price = $_GET['price'];
    $key_code = $_GET['key_code'];

    // Выполнение запроса
    $result = $mysqli->query("INSERT INTO GameKeys
        SET purchase_date='$purchase_date', expiry_date='$expiry_date',
        game_id='$game_id', store_id='$store_id',
        price='$price', key_code ='$key_code'"
    );

    header("Location: game_keys.php");
    exit;
?>