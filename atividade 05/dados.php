<?php
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $media = ($nota1 + $nota2)/2;

        echo "<br>";

        if($media == 10){
            echo "ALUNO APROVADO COM DISTINÇÃO";
        }elseif ($media >= 7) {
            echo "APROVADO, MÉDIA = $media";
        }elseif ($media < 7) {
            echo "REPROVADO, MÉDIA = $media";
        }
    ?>
