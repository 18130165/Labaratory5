<html>
    <head> <title> Редактирование данных об игре </title> </head>
    <style>
    th,td { padding: 10px;}

    th { 
        background: #fff070; 
        color: #000;
    }

    td { background: #d0d000;}

</style>
    <body>
        <form action='save_edit.php' method='get'>
            <table border="0">
                <?php
                    require_once "../connect.php";

                    $id = $_GET['id'];

                    $result = $mysqli->query("SELECT name, genre, developer, publisher, sold FROM Games WHERE id='$id'");

                    if ($result && $st = $result->fetch_array()){
                        $name = $st['name'];
                        $genre = $st['genre'];
                        $developer = $st['developer'];
                        $publisher = $st['publisher'];
                        $sold = $st['sold'];
                    }

                    print "<tr> <th>Название: </th> <th> <input name='name' size='50' type='text' value='$name'> </th> </tr>";
                    print "<br> <tr> <th>Жанр: </th> <th> <input name='genre' size='50' type='text' value='$genre'> </th> </tr>";
                    print "<br> <tr> <th>Разработчик: </th> <th> <input name='developer' size='50' type='text' value='$developer'> </th> </tr>";
                    print "<br> <tr> <th>Издатель: </th> <th><input name='publisher' size='50' type='text' value='$publisher'> </th> </tr>";
                    print "<br> <tr> <th>Продано: </th> <th> <input type='text' name='sold' size='50' value='$sold'> </th> </tr>";
                    print "<input type='hidden' name='id' size='30' value='$id'>";
                ?>
                </table>
            <p><input type='submit' name='save' value='Сохранить'></p>
        </form>
        <p><button style='color: blue' onclick="window.location.href='games.php'">Вернуться к списку игр</button></td></p>
    </body>
</html>