<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 01</title>
</head>
<body>
    <h1>Exercício 01</h1>
    <form action = "exercicio01" method = "POST">
        NOTA 1: <input type = "text" name = "nota1">
        NOTA 2: <input type = "text" name = "nota2">
        <input type = "submit" name = "enviar" value = "CALCULAR MÉDIA">
    </form>

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

</body>
</html>