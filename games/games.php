<?php 
    
 ?>
<html>
    <head> <title> Сведения об играх </title> </head>

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

    <h2>Список игр:</h2>
    <table border="1">
        <tr>
            <th> Название </th> <th> Жанр </th> <th> Разработчик </th>
            <th> Издатель </th> <th> Продано </th>
        </tr>
        <?php
            require_once '../connect.php';

            // Запрос на выборку сведений о пользователях
            $result = $mysqli->query("SELECT id, name, genre, developer, publisher, sold FROM Games");

            $counter=0;
            if ($result){
                while ($row = $result->fetch_array()){
                    $id = $row['id'];
                    $name = $row['name'];
                    $genre = $row['genre'];
                    $developer = $row['developer'];
                    $publisher = $row['publisher'];
                    $sold = $row['sold'];

                    echo "<tr>";
                    echo "<td>$name</td><td>$genre</td><td>$developer</td><td>$publisher</td><td>$sold</td>";
                    echo "<td><button style='color: blue' onclick=\"window.location.href='edit.php?id=$id'\">Редактировать</button></td>";
                    echo "<td><button style='color: blue' onclick=\"window.location.href='delete.php?id=$id'\">Удалить</button></td>";
                    echo "</tr>";

                    $counter++;
                }
            }
            print "</table>";
            print("<p>Всего игр: $counter </p>");
        ?>
    <button style='color: blue' onclick="window.location.href='new.php'">Добавить игру</button></td>
    <button style='color: blue' onclick="window.location.href='../index.php'">Вернуться в меню</button></td>
</html>