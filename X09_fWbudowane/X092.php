<?php
// Norbert Kurzawski 3pir02
    $imiona = ["Wiktor","Iwona","Michał","Ania","Paweł","Asia"];

    function ileZenskich($tab) {
        $licznik = 0;
        foreach ($tab as $x) {
            if($x[strlen($x)-1] == "a") $licznik++;
        }
        return $licznik;
    }

    echo ileZenskich($imiona);
?>
