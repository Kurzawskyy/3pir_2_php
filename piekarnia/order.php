<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podsumowanie zamówienia</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ms+Madi&display=swap" rel="stylesheet">
</head>
<body>
    

<?php
    $paczkow = $_POST['paczkow'];
    $grzebieni = $_POST['grzebieni'];
    $suma = 0.99*$paczkow + 1.29*$grzebieni;

echo<<<END
<div>
    <h2>Podsumowanie zamówienia</h2>
    <table border="1" cellpadding="10" cellspacing="0"
    <tr>
        <td>Pączek (0.99PLZ/szt)</td> <td>$paczkow</td>
    </tr>

    <tr>
        <td>Grzebień (1.29PLN/szt)</td> <td>$grzebieni</td>
    </tr>

    <tr>
        <td>SUMA</td> <td>$suma PLN</td>
    </tr>
    </table>
    <br> <a href="index.php">Link powrotny</a>
</div>
END;
?>
</body>
</html>