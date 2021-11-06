<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 02</title>
</head>
<body>
    <h1>Exercício 02</h1>
    <form action = "exercicio02.php" method = "POST">
        ALTURA: <input type = "text" name = "altura">
        SEXO <input type = "text" name = "sexo">
        <input type = "submit" name = "enviar" value = "PESO IDEAL">
    </form>

    <?php
        $altura = $_POST['altura'];
        $sexo = $_POST['sexo'];
        
        if($sexo == "m"){
            $peso_ideal = (72.7 * $altura) - 58;
            echo "SEU PESO IDEAL É $peso_ideal";
        }elseif ($sexo == "f") {
            $peso_ideal = (62.1 * $altura) - 44.7;
            echo "SEU PESO IDEAL É $peso_ideal";
        }
        echo "<br>";

    ?>
</body>
</html>