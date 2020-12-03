<html>
    <head> <title> Сведения о магазинах </title> </head>
    
     <style>
    th,td { padding: 10px;}

    th { 
        background: #fff070; 
        color: #000;}
    td { background: #d0d000;}
    h2 { 
    font-size: 200%;
    padding:10px;
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    color: #333366;}
    </style>

    <h2>Магазины:</h2>
    <table border="1">
        <tr>
            <th> Название </th> <th> Адрес </th>
        </tr>
        <?php
            require_once "../connect.php";

            // Запрос на выборку сведений о пользователях
            $result = $mysqli->query("SELECT id, name, url FROM Stores");

            $counter=0;
            if ($result){
                while ($row = $result->fetch_array()){
                    $id = $row['id'];
                    $name = $row['name'];
                    $url = $row['url'];
                   

                    $counter++;

                    echo "<tr>";
                    echo "<td>$name</td><td>$url</td>";
                    echo "<td><button style='color: blue' onclick=\"window.location.href='edit.php?id=$id'\">Редактировать</button></td>";
                    echo "<td><button style='color: blue' onclick=\"window.location.href='delete.php?id=$id'\">Удалить</button></td>";
                    echo "</tr>";
                }
            }
            print "</table>";
            print("<p>Всего магазинов: $counter </p>");
        ?>
    <button style='color: blue' onclick="window.location.href='new.php'">Добавить магазин</button></td>
    <button style='color: blue' onclick="window.location.href='../index.php'">Вернуться в меню</button></td>
</html>
