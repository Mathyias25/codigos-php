<?php
//EXERCÍCIO 05

$peso_morango = 8;
$peso_maca = 2;

//PARA PESOS MENORES OU IGUAIS A 5kg
if($peso_morango <= 5){
    $total_morango = 2.5 * $peso_morango;
    echo "PREÇO - MORANGO = $total_morango";
    echo "<br>";
}
if($peso_maca <= 5){
    $total_maca = 1.8 * $peso_maca;
    echo "PREÇO - MAÇÃ = $total_maca";
    echo "<br>";
}

//PARA PESOS MAIORES QUE 5Kg
if($peso_morango > 5){
    $total_morango = 2.2 * $peso_morango;
    echo "PREÇO - MORANGO = $total_morango";
    echo "<br>";
}
if($peso_maca > 5){
    $total_maca = 1.5 * $peso_maca;
    echo "PREÇO - MAÇÃ = $total_maca";
    echo "<br>";
}

//DESCONTOS
$peso_total = $peso_morango + $peso_maca;
echo "PESO TOTAL DAS FRUTAS $peso_total";
echo "<br>";
$total_morango_maca = $total_morango + $total_maca;
echo "PREÇO TOTAL DAS FRUTAS $peso_total";
echo "<br>";

if($peso_total > 8 || $total_morango_maca >25){
    $desconto = 0.1 * $total_morango_maca;
    $total_morango_maca = $total_morango_maca - $desconto;
    echo "O VALOR TOTAL A SER PAGO COM DESCONTO É $total_morango_maca";
}