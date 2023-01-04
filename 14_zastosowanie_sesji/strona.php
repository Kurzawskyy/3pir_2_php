<?php
// Norbert Kurzawski 3pir02
    session_start();
    if (!isset($_SESSION['log'])) {
        header('location: loguj.php');
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
    <title>Strona główna</title>
</head>
<body>
<?php
    $imie = ucfirst($_SESSION['log']);
    echo "Witaj ".$imie;
?>

    <p>Jesteś na stronie głównej</p>
    <p>Przed opuszczeniem tej strony wyloguj się!</p>
    <a href="wyloguj.php">Wyloguj</a>
</body>
</html>
