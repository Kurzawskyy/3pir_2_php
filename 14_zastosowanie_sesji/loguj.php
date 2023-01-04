<?php
// Norbert Kurzawski 3pir02
    session_start();
    if (isset($_SESSION['log'])) {
        header('location: strona.php');
        exit();
    } elseif(isset($_POST['nazwa']) && isset($_POST['haslo'])) {
        if($_POST['nazwa'] == 'janek' && $_POST['haslo'] == 'jan123') {
            $_SESSION['log'] = $_POST['nazwa'];
            header('location: strona.php');
            exit();
        } else {
            echo "Nieprawiowe dane logowania<br>";
        }
    }
?>
<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autoryzacja danych</title>

    <style>
        p.fo {
            font-weight: bold;
            font-size: 11pt;
        }
        #log {
            font-weight: bold;
            font-size: 14pt;
        }
    </style>

</head>
<body>
    <div>
        <form action="loguj.php" method="post">
            <p id="log">Logowanie</p>
            <p class="fo">Nazwa użytkownika: </p>
            <input type="text" name="nazwa" value="" size="30" placeholder="janek"> <br>
            <p class="fo">Hasło: </p>
            <input type="password" name="haslo" value="" size="30" placeholder="jan123"> <br>
            <input type="submit" value="Zaloguj">
        </form>
    </div>
</body>
</html>
