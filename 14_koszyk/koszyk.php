<?php
// Norbert Kurzawski 3pir02
    session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Koszyk zakupów</title>
</head>
<body>
    <p><b>Zawartość koszyka</b></p>
<?php
if (isset($_SESSION['koszyk'])) {
    foreach(unserialize($_SESSION['koszyk']) as $produkt) {
        echo "<li>" . $produkt . "</li>";
    }
} else {
    echo "brak sesji";
}
?>
    <p><a href="lista.php">Przejdź do listy produktów</a></p>
</body>
</html>