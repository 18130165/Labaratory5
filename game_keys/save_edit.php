<?php
    require_once "../connect.php";

    $id = $_GET['id'];

    $purchase_date = $_GET['purchase_date'];
    $expiry_date = $_GET['expiry_date'];
    $game_id = $_GET['game_id'];
    $store_id = $_GET['store_id'];
    $price = $_GET['price'];
    $key_code = $_GET['key_code'];

    $result = $mysqli->query("UPDATE GameKeys
        SET purchase_date='$purchase_date', expiry_date='$expiry_date',
        game_id='$game_id', store_id='$store_id',
        price='$price', key_code='$key_code'
        WHERE id='$id'"
    );

    header("Location: game_keys.php");
    exit;
?>