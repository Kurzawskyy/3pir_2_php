<?php
// Norbert Kurzwski 3pir02

    function odwroc() {
        $p = fopen('imiona.txt','r');
        if($p) {
            while(($imie = fgets($p)) !== false) {
                $x = "";
                for($i = strlen($imie)-1; $i >= 0; $i--) {
                    $x = $x.$imie[$i];
                }
                echo $imie." - ".$x."<br>";
            }
        fclose($p);
        } else
            echo "Nie udało się otworzyć pliku.";
    }

    odwroc();
?>
