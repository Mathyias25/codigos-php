<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
    <title>Exercício 01</title>
</head>
<body>
    <h1>EXERCÍCIO 01</h1>
    
    <form action="exercicio01.php" method="POST">
        NOTA 1: <input type = "text" name = "nota1">
        NOTA 2: <input type = "text" name = "nota2">
        <input type = "submit" name = "calcmedia" value="média"> 
    </form>
   
    <?php
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        /*
        echo "A NOTA 1 É $nota1";
        echo "<br>";
        echo "A NOTA 2 É $nota2";
        echo "<br>";
        */
        $media = ($nota1 + $nota2)/2;
        //echo "A MÉDIA É $media";
        echo "<br>";
        if($media == 10){
            echo "APROVADO COM DISTINÇÃO, MÉDIA = $media";
        }
        elseif($media >= 7){
            echo "APROVADO, MÉDIA = $media";
        }
        elseif ($media <= 7){
            echo "REPROVADO, MÉDIA = $media";
        }
        
    ?>

</body>
</html>