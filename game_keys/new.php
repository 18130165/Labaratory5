<html>
    <head> <title> Добавление новой ключа </title> </head>
    <body>
        <H2>Добавление новой ключа</H2>
        <form action="save_new.php" method="get">
            Дата приобретения: <input name="purchase_date" size="50" placeholder="dd-mm-yyyy" type="date">
            <br>Дата окончания действия: <input name="expiry_date" size="20" placeholder="dd-mm-yyyy" type="date">
            <?php
                require_once "../connect.php";

                // Получение данных об играх
                $result = $mysqli->query("SELECT id, name FROM Games");
                echo "<br>Игра: <select name='game_id'>";

                if ($result){
                    while ($row = $result->fetch_array()){
                        $id = $row['id'];
                        $name = $row['name'];

                        echo "<option value='$id'>$name</option>";
                    }
                }
                echo "</select>";

                // Получение данных о магазинах
                $result = $mysqli->query("SELECT id, name FROM Stores");
                echo "<br>Магазин: <select name='store_id'>";

                if ($result){
                    while ($row = $result->fetch_array()){
                        $id = $row['id'];
                        $name = $row['name'];

                        echo "<option value='$id'>$name</option>";
                    }
                }
                echo "</select>";
            ?>
            <br>Цена: <input name="price" size="30" type="text">
            <br>Код активации: <input name="key_code" size="30" type="text">
            <p>
                <input name="add" type="submit" value="Добавить">
                <input name="b2" type="reset" value="Очистить">
            </p>
        </form>
        <p><button style='color: blue' onclick="window.location.href='game_keys.php'">Вернуться к списку ключей</button></td></p>
    </body>
</html>