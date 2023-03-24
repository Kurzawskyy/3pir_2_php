<?php
// Norbert Kurzawski 3pir02
$tab = array(
  array(null,null.null),
  array(null,null.null),
  array(null,null.null),
);

for($i = 0; $i < 3; $i++)
    for($j = 0;$j < 3; $j++)
        $tab[$i][$j] = rand(0,9);

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++)
        echo $tab[$i][$j]." ";
    echo "<br>";
}

$przek_lg_pd = $tab[0][0] + $tab[1][1] + $tab[2][2];
$przek_ld_pg = $tab[0][2] + $tab[1][1] + $tab[2][0];

echo "LG-PD: ".$przek_lg_pd."<br>";
echo "LD-PG: ".$przek_ld_pg."<br><br>";

if($przek_ld_pg > $przek_lg_pd) echo "Przekątna LD_PG jest większa";
elseif($przek_lg_pd > $przek_ld_pg) echo "Przekątna LG_PD jest większa";
else echo "Obie wartości przekątnych są równe";