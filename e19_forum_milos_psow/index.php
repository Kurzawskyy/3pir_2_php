<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <main>
        <header>
            <h1>Forum miłośników psów</h1>
        </header>

        <section>
            <article class="left">
                <img src="Avatar.png" alt="Użytkownik forum">
                <!--skr 1-->

                <?php
                    $db = mysqli_connect('localhost','root','','forumpsy');
                    $q = "SELECT konta.nick, konta.postow, pytania.pytanie FROM konta INNER JOIN pytania ON pytania.konta_id = konta.id WHERE pytania.id = 1;";
                    $wynik = mysqli_query($db,$q);

                    while($el = mysqli_fetch_row($wynik)) {
                        echo "<h4>Użytkownik: $el[0]</h4>";
                        echo "<p>$el[1] postów na forum</p>";
                        echo "<p>$el[2]</p>";
                    }
                ?>

                <video src="video.mp4" controls loop></video>
            </article>
            <article class="right">
                <form action="index.php" method="post">
                    <textarea name="odp" id="odp" cols="40" rows="4"></textarea> <br>
                    <input type="submit" name="wyslij" value="Dodaj odpowiedź" id="btn">
                </form>
                <!--skr 2-->
                <?php
                    if(isset($_POST['wyslij']) && !empty($_POST['odp'])) {
                        $odp = $_POST['odp'];
                        $q = "INSERT INTO `odpowiedzi`(`id`, `Pytania_id`, `konta_id`, `odpowiedz`) VALUES (null,1,5,'$odp');";
                        $wynik = mysqli_query($db,$q);
                    }

                ?>

                <h2>Odpowiedzi na pytanie</h2>
                <!--ol skr 3-->

                <?php
                    $q = "SELECT odpowiedzi.id, odpowiedzi.odpowiedz, konta.nick FROM odpowiedzi INNER JOIN konta ON odpowiedzi.konta_id = konta.id WHERE odpowiedzi.Pytania_id = 1;";
                    $wynik = mysqli_query($db,$q);

                    echo "<ol>";
                    while($el = mysqli_fetch_row($wynik)) {
                        echo "<li>$el[1] <i>$el[2]</i></li><hr>";
                    }
                    echo "</ol>";

                    $db = mysqli_close($db);
                ?>

            </article>
        </section>

        <footer>
            Autor: Norbert Kurzawski 3pir02
            <a href="http://mojestrony.pl/" target="_blank">Zobacz nasze realizacje</a>
        </footer>
    </main>
</body>
</html>