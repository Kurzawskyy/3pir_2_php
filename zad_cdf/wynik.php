<?php
    $imie = $_POST['imie'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];

    echo "<h1>Witaj $imie na mojej stronie.</h1> <br>";

    $tab = [$a,$b,$c,$d];

    var_dump($tab);

    $tab = [(float)$a,(float)$b,(float)$c,(float)$d];

    $x = 0;
    foreach($tab as $element) {
        if(is_numeric($element) and $element != 0)
            $x++;
    }

    var_dump($tab);
    $suma = 0;
    for($i = 0; $i < count($tab); $i++) {
        $suma += $tab[$i];
    }

    $srednia = $suma/$x;

    echo "<br>Suma: $suma <br> Średnia: $srednia ";
?>
