<?php
// Norbert Kurzawski 3pir
    session_start();
    if (isset($_SESSION['log'])) {
        unset($_SESSION['log']);
    } else {
        header('location: loguj.php');
        exit();
    }

    $s = session_destroy();
?>
<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Koniec sesji</title>
</head>
<body>
    <p>Wylogowałeś się ze strony.</p>
    <a href="loguj.php">Logowanie</a>
</body>
</html>
