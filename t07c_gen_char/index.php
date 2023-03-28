<?php
// Norbert Kurzawski 3pir02

$tab = array(
    array(0,0,0,0,0,0,0),
    array(0,0,0,0,0,0,0),
    array(0,0,0,0,0,0,0),
    array(0,0,0,0,0,0,0),
    array(0,0,0,0,0,0,0),
    array(0,0,0,0,0,0,0),
    array(0,0,0,0,0,0,0)
);

for($i = 0; $i < 7; $i++)
    for($j = 0; $j < 7; $j++) {
        $x = rand(0,4);
        switch ($x) {
            case 0:
                $tab[$i][$j] = 'a';
                break;
            case 1:
                $tab[$i][$j] = 'b';
                break;
            case 2:
                $tab[$i][$j] = 'c';
                break;
            case 3:
                $tab[$i][$j] = 'd';
                break;
            case 4:
                $tab[$i][$j] = 'e';
                break;
        }
    }

for ($i = 0; $i < 7; $i++) {
    for ($j = 0; $j < 7; $j++)
        echo $tab[$i][$j]." ";
    echo "<br>";
}

$a = 0;
for ($i = 0; $i < 7; $i++) {
    for ($j = 0; $j < 7; $j++){
        if($tab[$i][$j] == 'a') $a++;
    }
}

echo "<br>Znak a wystąpił: ".$a." razy<br>";

$b0 = 0;
$b1 = 0;

for ($i = 0; $i < 7; $i++) {
    $b0 = 0;
    for ($j = 0; $j < 7; $j++){
        if($tab[$i][$j] == 'b') $b0++;
    }
    if($b0 > $b1) $b1 = $b0;
}

$obecne_b = 0;
for ($i = 0; $i < 7; $i++) {
    $obecne_b = 0;
    for ($j = 0; $j < 7; $j++)
        if($tab[$i][$j] == 'b') $obecne_b++;
    if($obecne_b == $b1) echo "<br>Znak b wystąpił najwięcej razy (".$b1.") w linii o indexie: ".$i;
}
