<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piekarnia - Norbert Kurzawski 3pir</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ms+Madi&display=swap" rel="stylesheet">
</head>
<body>

    <form action="order.php" method="post">
        <h1>Zamówienie online</h1>

        Ile pączków (0.99 PLN/szt):
        <input type="text" name="paczkow">
            <br><br>

        Ile grzebieni (1.29 PLN/szt):
        <input type="text" name="grzebieni">
            <br><br>

        <input id="btn" type="submit" value="Wyślij zamówienie">
        <img src="paczek.png" alt="paczek" height="350px">
    </form>
</body>
</html>