<?php

for ($i = 0; $i < 10; $i++) {
    echo "i = $i\n";
}


$countries = array("Brasil", "Argentina", "Uruguai", "Paraguai", "Chile", "Peru", "Colombia", "Venezuela", "Equador", "Bolivia");
$count = 0;

while ($count < count($countries)) {
    echo "País: " . $countries[$count] . "\n";
    if ($countries[$count] == "Uruguai") {
        break;
    }
    $count++;
}