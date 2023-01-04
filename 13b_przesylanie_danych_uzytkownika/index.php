<?php
    if(!isset($_COOKIE['dane']) && !isset($_POST['nazw'])) {
?>
<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dane użytkownika</title>
</head>
<body>
    <form action="index.php" method="post">
        Podaj nazwisko i imię <br>
        <input type="text" name="nazw" value=" " size="35"> <br>
        <input type="text" name="imie" value=" " size="35"> <br
        <p><input type="submit" value="Wyślij" name="wyslij"></p>
    </form>

    <?php
        } else {
            if (isset($_POST['nazw']) && isset($_POST['imie'])) {
                $dane = $_POST['nazw'] . " " . $_POST['imie'];
                setcookie('dane',$dane,time()+60*60*24*365);
                echo "<p>Dzięujemy za wprowadzenie danych.</p>";
            } else {
                echo "<p>Witamy po raz kolejny! ".$_COOKIE['dane']. "</p>";
            }
        }
    ?>
</body>
</html>
