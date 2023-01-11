<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filmoteka</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
<?php
    $db = mysqli_connect("localhost","root","","3pir_filmoteka");

    $k = $_POST['kategorie'];
    // trzeba zmienić w kw1 tak jak jest w kw 3 -> zastosować join i pracować na dwóch tabelach
    // w domu


?>

    <main>
        <header>
            <div><img src="klaps.png" alt="Nasze filmy"></div>
            <div><h1>BAZA FILMÓW</h1></div>
            <div>
                <form action="index.php" method="post">
                    <select name="kategorie" id="kategorie">
                        <option value="Sci-Fi">Sci-Fi</option>
                        <option value="animacja">animacja</option>
                        <option value="dramat">dramat</option>
                        <option value="horror">horror</option>
                        <option value="komedia">komedia</option>
                    </select>
                    <input type="submit" value="Filmy">
                </form>
            </div>
            <div><img src="gwiezdneWojny.jpg" alt="szturmowcy"></div>
        </header>
        
        <section>
            <article>
                <h2>Wybrano filmy</h2>

            </article>
            <article>
                <h2>Wszystkie filmy</h2>

            </article>
        </section>

        <footer>
            <p>Autor: Norbert Kurzawski 3pir02</p>
            <a href="kwerendy.txt">Zapytania do bazy</a>
            <a href="filmy.pl" target="_blank">Przejdź do filmy.pl</a>
        </footer>
    </main>
</body>
</html>