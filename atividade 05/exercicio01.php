<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <form action = "" method = "POST">
        NÚMERO <input type = "number" name = "numero">
        <input type = "submit" name = "resultado" value = "Resultado">
    </form>

    <?php
        $numero = $_POST['numero'];

        switch ($numero) {
            case 1:
                echo "Domingo";
                break;
            case 2:
                echo "Segunda";
                break;    
            case 3:
                echo "Terça";
                break; 
            case 4:
                echo "Quarta";
                break;
            case 5:
                 echo "Quinta";
                break;
            case 6:
                echo "Sexta";
                break;
            case 7:
                 echo "Sábado";
                break;    
            default:
                echo "Valor inválido!";
                break;
        }
    ?>
</body>
</html>