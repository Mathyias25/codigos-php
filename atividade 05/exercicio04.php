<?php
    //EXERCÍCIO 04
    $codigo = 2;
    $salario = 2000;

    if($codigo == 1){
        echo "O SALARIO ATUAL É $salario\n";
        echo "<br>";
        echo "ESCRITURÁRIO\n";
        echo "<br>";
        $aumento = $salario * 0.5;
        $novo_salario = $salario + $aumento;
        echo "O VALOR DO AUMENTO É $aumento";
        echo "<br>";
        echo "O VALOR DO NOVO SALÁRIO É $novo_salario";
        echo "<br>";
    }
    if($codigo == 2){
        echo "O SALARIO ATUAL É $salario\n";
        echo "<br>";
        echo "SECRETÁRIO\n";
        echo "<br>";
        $aumento = $salario * 0.35;
        $novo_salario = $salario + $aumento;
        echo "O VALOR DO AUMENTO É $aumento";
        echo "<br>";
        echo "O VALOR DO NOVO SALÁRIO É $novo_salario";
        echo "<br>";
    }
    