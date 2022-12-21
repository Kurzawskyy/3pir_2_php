<html>
    <head>
        <link rel="stylesheet" href="style_php.css">
    </head>
</html>

<?php
// Norbert Kurzawski 3pir02
echo "<h1>Dane Osobowe klienta</h1>";
echo "<hr>";
echo "Imię i nazwisko: ".trim($_POST['name-surname'])."<br>";
echo "Adres E-mail: ".trim($_POST['email'])."<br>";
echo "Numer telefonu: ".trim($_POST['phone'])."<br>";
echo "<hr>";
echo "Wiadomość: ".$_POST['mess']."<br><hr>";
echo "<h2>Wybrałeś dla Twoich butów:</h2>";

echo "Kolor trampek: ";
if(!empty($_POST['radioColor'])) echo $_POST['radioColor']."<br>";
else echo "Nie wybrano koloru."."<br>";

echo "Rozmiar trampek: ".$_POST['size']."<br>";

echo "Dodatki "."<br>";
if(!empty($_POST['dodatki']))
    foreach ($_POST['dodatki'] as $x) {
        echo $x."<br>";
    }
else
    echo "Nie wybrano żadnych dodatków";

