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
$wylosowane = array();

for($i = 0; $i < 7; $i++) {
    for($j = 0; $j < 7; $j++) {
        do {
            $los = rand(10, 99);
        } while (in_array($los, $wylosowane));
        $tab[$i][$j] = $los;
        $wylosowane[] = $los;
    }
}

for($i = 0; $i < 7; $i++) {
    for($j = 0; $j < 7; $j++) {
        echo $tab[$i][$j]." ";
    }
    echo "<br>";
}

