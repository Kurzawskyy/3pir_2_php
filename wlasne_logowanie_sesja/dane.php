<?php
    session_start();
    if (!isset($_SESSION['loguj'])) {
        header('location: logowanie.php');
        exit();
    }
?>
<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Top secret</title>
</head>
<body>
    <h1>Tajna strona</h1>
    <p>there's nothing to see actually, i'm sorry</p>
    <a href="wyloguj.php"><p>Wyloguj</p></a>
</body>
</html>
