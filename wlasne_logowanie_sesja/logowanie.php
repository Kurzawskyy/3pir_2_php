<?php
    session_start();
    if(isset($_SESSION['loguj'])) {
        header('location: dane.php');
        exit();
    } elseif (isset($_POST['login']) && isset($_POST['haslo'])) {
        if ($_POST['login'] == 'login' && $_POST['haslo'] == 'haslo') {
            $_SESSION['loguj'] = $_POST['login'];
            header('location: dane.php');
            exit();
        } else {
            echo "Nieprawidłowe dane logowania<br>";
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
    <title>Logowanie</title>
</head>
<body>
<div>
    <h1>Logowanie</h1>
    <form action="logowanie.php" method="post">
        Podaj login <br><br>
        <input type="text" name="login" value="" placeholder="login"> <br> <br>
        Podaj haslo <br><br>
        <input type="password" name="haslo" value="" placeholder="haslo"> <br><br>
        <input type="submit" value="Zaloguj">
    </form>
</div>
</body>
</html>
