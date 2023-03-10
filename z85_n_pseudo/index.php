<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            text-align: center;
            background-color: antiquewhite;
        }
        form {
            padding: 15px;
            background-color: lavender;
        }
    </style>
</head>
<body>
    <h1>Zadanie 85</h1>
    <h2>Norbert Kurzawski 3pir02</h2>
    <p>Napisz program, który dla trzech liczb całkowitym n, min, max wyświetla n liczb pseudolosowych z zakresu <min, max>.</p>
    <hr>

    <form action="index.php" method="post">
        podaj n: <input type="text" name="n">
        podaj min: <input type="text" name="min">
        podaj max: <input type="text" name="max">
        <input type="submit" name="wyslij" value="Wyślij"> <br>
    </form>

    <?php
        if(isset($_POST['wyslij'])) {
            if(isset($_POST['n']) && isset($_POST['min']) && isset($_POST['max']))
                if(is_numeric($_POST['n']) && is_numeric($_POST['min']) && is_numeric($_POST['max'])) {
                    $n = $_POST['n'];
                    $min = $_POST['min'];
                    $max = $_POST['max'];
                    echo "Wylosowane liczby: ";
                    for($i = 0; $i < $n; $i++) {
                        $x = rand($min, $max);
                        echo "<b>$x   </b>";
                    }
                }
        }
    ?>
</body>
</html>