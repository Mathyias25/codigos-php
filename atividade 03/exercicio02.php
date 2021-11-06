<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 02</title>

    <style>
        body{
            background:#cccccc;
        }
   </style>
</head>
<body>
    <h1>EXERCÍCIO 02</h1>
    <form action="exercicio02.php" method="POST">
        ALTURA(cm): <input type = "text" name = "altura">
        SEXO(m ou f): <input type = "text" name = "sexo">
        <input type = "submit" name="calcular" value="PESO IDEAL">
   </form>

   <?php
        $altura = $_POST['altura'];
        $sexo = $_POST['sexo'];

        if($sexo == "m"){
            $pesoIdeal = (72.7 * $altura) - 58;
            echo "Seu peso ideal é $pesoIdeal";
        }elseif($sexo == "f"){
            $pesoIdeal = (62.1 * $altura) - 44.7;
            echo "Seu peso ideal é $pesoIdeal";
        }
   ?>
</body>
</html>