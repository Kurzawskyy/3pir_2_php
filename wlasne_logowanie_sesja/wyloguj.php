<?php
    session_start();
    if(isset($_SESSION['loguj'])) {
        unset($_SESSION['loguj']);
    } else {
        header('location: logowanie.php');
        exit();
    }

    $zamknacToWyMozecie = session_destroy();
?>
<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wylogowano</title>
</head>
<body>
    <h1>Poprawnie sie wylogowałes</h1>
    <h2>I co należą się brawa?</h2>
    <a href="logowanie.php">Zaloguj się ponownie</a>
</body>
</html>
