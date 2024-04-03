<?php

$somar = 5 + 3;
$dividir = 10 / 2;
$subtrair = 5 - 3;
$multiplicar = 5 * 3;
$resto = 10 % 3;

echo "5 + 3 = $somar<br>";
echo "10 / 2 = $dividir<br>";
echo "5 - 3 = $subtrair<br>";
echo "5 * 3 = $multiplicar<br>";
echo "10 % 3 = $resto<br>";


$idadeFabio = 48;
$idadeValeria = 42;

if ($idadeFabio > $idadeValeria) {
    echo "Fabio é mais velho que Valeria<br>";
}

if ($idadeFabio < $idadeValeria) {
    echo "Fabio é mais novo que Valeria<br>";
}

if ($idadeFabio == $idadeValeria) {
    echo "Fabio tem a mesma idade que Valeria<br>";
}

if ($idadeFabio != $idadeValeria) {
    echo "Fabio não tem a mesma idade que Valeria<br>";
}

if ($idadeFabio >= $idadeValeria) {
    echo "Fabio é mais velho ou tem a mesma idade que Valeria<br>";
}

if ($idadeFabio <= $idadeValeria) {
    echo "Fabio é mais novo ou tem a mesma idade que Valeria<br>";
}

if($idadeFabio >40 && $idadeValeria >40){
    echo "Ambos tem mais de 40 anos<br>";
}

if($idadeFabio >40 || $idadeValeria >40){
    echo "Pelo menos um tem mais de 40 anos<br>";
}

if($idadeFabio >40 xor $idadeValeria >40){
    echo "Apenas um tem mais de 40 anos<br>";
}
