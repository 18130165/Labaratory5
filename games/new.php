<html>
    <head> <title> Добавление новой игры </title> </head>
    <style>
    input, p { padding: 10px;}

    input { 
        background: #fff070; 
        color: #000;
    }

    td { background: #d0d000;}

</style>
    <body>
        <H2>Добавление новой игры:</H2>
        <form action="save_new.php" method="get">
            <table>
            <tr><th><a>Название:</a></th> <th><input name="name" size="50" type="text"></th></tr>
            <tr><th><a>Жанр:</a></th> <th><input name="genre" size="50" type="text"></th></tr>
            <tr><th><a>Разработчик:</a></th> <th><input name="developer" size="50" type="text"></th></tr>
            <tr><th><a>Издатель:</a></th> <th><input name="publisher" size="50" type="text"></th></tr>
            <tr><th><a>Продажи:</a></th> <th><input name="sold" size="50" type="text"></th></tr>
            </table>
            <p>
                <input name="add" type="submit" value="Добавить" >
                <input name="b2" type="reset" value="Очистить">
            </p>
        </form>
        <p><button style='color: blue' onclick="window.location.href='games.php'">Вернуться к списку игр</button></td></p>
    </body>
</html>