<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Podaj 10 znaków</h3>
<form action="index.php" method="post">
    <input type="text" name="c0"> <br><br>
    <input type="text" name="c1"> <br><br>
    <input type="text" name="c2"> <br><br>
    <input type="text" name="c3"> <br><br>
    <input type="text" name="c4"> <br><br>
    <input type="text" name="c5"> <br><br>
    <input type="text" name="c6"> <br><br>
    <input type="text" name="c7"> <br><br>
    <input type="text" name="c8"> <br><br>
    <input type="text" name="c9"> <br><br>

    <h3>Podaj ile słow należy wygenerować i ile mają mieć liter</h3>
    <label for='ile_slow'>Ile słów: </label>
    <input type='text' name='ile_slow'> <br><br>
    <label for='ile_liter'>Ile liter: </label>
    <input type='text' name='ile_liter'> <br><br>

    <input type="submit" value="Wyślij"> <br><br>
</form>

<?php
// Norbert Kurzawski 3pir02
    if(
            isset($_POST["c0"]) &&
            isset($_POST["c1"]) &&
            isset($_POST["c2"]) &&
            isset($_POST["c3"]) &&
            isset($_POST["c4"]) &&
            isset($_POST["c5"]) &&
            isset($_POST["c6"]) &&
            isset($_POST["c7"]) &&
            isset($_POST["c8"]) &&
            isset($_POST["c9"]) &&
            isset($_POST['ile_liter']) &&
            isset($_POST['ile_slow'])
) {
        $tab = array();
        for($i = 0; $i < 10; $i++) {
            $tab[$i] = $_POST["c".$i];
        }

        for($i = 0; $i < 10; $i++) {
            echo $tab[$i]." ";
        }

        echo "<br><br>";

            $slow = $_POST['ile_slow'];
            $liter = $_POST['ile_liter'];

            $s = "";
            for ($j = 0; $j < $slow; $j++) {
                $s = "";
                for ($i = 0; $i < $liter; $i++) {

                    $x = rand(0, 9);
                    $s = $s . $tab[$x];

                }
                echo "$s<br>";
            }
        }
?>
</body>
</html>