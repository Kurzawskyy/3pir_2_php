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

echo "<br>Litera a wystąpiła: ".$a." razy";

$ix = 0;
$b = 0;

for ($i = 0; $i < 7; $i++) {
    for ($j = 0; $j < 7; $j++){
        if($tab[$i][$j] == 'a') $a++;
    }
}

