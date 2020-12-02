<html>
    <head> <title> Сведения об ключах </title> </head>
     <style>
    th,td { padding: 10px;}

    th { 
        background: #fff070; 
        color: #000;
    }

    td { background: #d0d000;}
    
      h2 { 
    font-size: 200%;
    padding:10px;
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    color: #333366;
   }
</style>
    <h2> Список ключей: </h2>
    <table border="1">
        <tr>
            <th> Дата приобретения </th> <th> Дата окончания действия </th> <th> Игра </th>
            <th> Магазин </th> <th> Цена </th> <th> Код активации </th>
        </tr>
        <?php
            require_once '../connect.php';

            // Запрос на выборку сведений о пользователях
            $result = $mysqli->query("SELECT GameKeys.id, GameKeys.purchase_date, GameKeys.expiry_date,
                Games.name as game, Stores.name as store, GameKeys.price, GameKeys.key_code FROM GameKeys
                LEFT JOIN Games ON GameKeys.game_id=Games.id
                LEFT JOIN Stores ON GameKeys.store_id=Stores.id"
            );

            $counter=0;
            if ($result){
                while ($row = $result->fetch_array()){
                    $id = $row['id'];
                    $purchase_date = $row['purchase_date'];
                    $expiry_date = $row['expiry_date'];
                    $game = $row['game'];
                    $store = $row['store'];
                    $price = $row['price'];
                    $key_code = $row['key_code'];

                    $purchase_date = date('d-m-Y', strtotime($purchase_date));
                    $expiry_date = date('d-m-Y', strtotime($expiry_date));

                    echo "<tr>";
                    echo "<td>$purchase_date</td><td>$expiry_date</td><td>$game</td><td>$store</td><td>$price</td><td>$key_code</td>";
                    echo "<td><button style='color: blue' onclick=\"window.location.href='edit.php?id=$id'\">Редактировать</button></td>";
                    echo "<td><button style='color: blue' onclick=\"window.location.href='delete.php?id=$id'\">Удалить</button></td>";
                    echo "</tr>";

                    $counter++;
                }
            }
            print "</table>";
            print("<p>Всего игр: $counter </p>");
        ?>
    <button style='color: blue' onclick="window.location.href='new.php'">Добавить ключ</button></td>
    <button style='color: blue' onclick="window.location.href='../index.php'">Вернуться в меню</button></td>
</html>