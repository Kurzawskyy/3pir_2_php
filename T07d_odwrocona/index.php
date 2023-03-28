<?php
// Norbert Kurzawski 3pir02
$tab = array(
    array(0,0,0,0),
    array(0,0,0,0),
    array(0,0,0,0),
    array(0,0,0,0),
);

for($i = 0; $i < 4; $i++)
    for($j = 0; $j < 4; $j++)
        $tab[$i][$j] = rand(0,1);

for($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++)
        echo $tab[$i][$j] . " ";
    echo "<br>";
}

$max = 0;
$licz = 0;

$m = 0;

//for($i = 0; $i < 4; $i++) {
//    for ($j = 0; $j < 4; $j++)
//        if ($tab[$i][$j] == 1) $licz+=1;
//    if($licz > $m) {
//        $m = $licz;
//        $licz = 0;
//    }
//}
//echo $m;
//echo "<br><br>";
//$licz = 0;
//for($i = 0; $i < 4; $i++) {
//    for ($j = 0; $j < 4; $j++)
//        if ($tab[$i][$j] == 1) $licz++;
//    if($licz == $max) {
//        for($x = 0; $x < 4;$x++) {
//            echo $tab[$i][$x]." ";
//        }
//    }
//}

for($i = 0; $i < 4; $i++) {
    $sum = array_sum($tab[$i]);
    if ($sum > $max)
        $max = $sum;
}
//for($i = 0;$i < 4;$i++)
//    echo $tab[$sum][$i]." ";

for($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++)
        if (array_sum($tab[$i]) == $sum) {
            echo $tab[$i][$j];
        }
    echo "<br>";
}

$odwr = array();
for($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $odwr[$j][$i] = $tab[3-$i][$j];
    }
}
echo "<br><br>";
for($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++)
        echo $odwr[$i][$j]." ";
    echo "<br>";
}
