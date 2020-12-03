<html>
    <head> <title> Сведения </title> </head>
<style>
   h2 { 
    font-size: 200%;
    padding:10px;
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    color: #333366;
   }
   
    a {text-decoration: none;
        font-size: 140%;
    }
    a:hover {text-decoration: underline;}
  </style>

    <h2>Меню</h2>
    <ul id="nav"> <!-- Собственные скрипты для просмотра и редактирования БД -->
        <li><a href="games/games.php">Игры</a>
        <li><a href="stores/stores.php">Магазины игр</a>
        <li><a href="game_keys/game_keys.php">Ключи игр</a>
    </ul>

    <button onclick="window.location.href='gen_pdf.php'">PDF-версия таблицы игр</button>
    <button onclick="window.location.href='gen_xls.php'">XML-версия таблицы игр</button>
</html>
