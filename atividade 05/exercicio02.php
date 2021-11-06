<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <form action = "" method = "POST">
        Digite o código do produto <br> 
        <input type = "number" name = "codigo"> <br>
        <input type = "submit" name = "resultado" value = "Classificação do produto">
    </form>

    <?php
        $codigo = $_POST['codigo'];

        switch ($codigo) {
            case 1:
                echo "ALIMENTO NÃO-PERECÍVEL";
                break;
            case 2:case 3:case 4:        
                echo "ALIMENTO PERECÍVEL";
                break; 
            case 5:
            case 6:    
                echo "VESTUÁRIO";
                break;
            case 7:
                echo "HIGIENE PESSOAL";
                break;
            case 8:
            case 9:
            case 10:
            case 11:
            case 12:
            case 13:
            case 14:
            case 15:
                echo "LIMPEZA E UTENSÍLIOS";
                break;                      
            default:
                echo "CÓDIGO INVÁLIDO";
                break;
        }

    ?>
</body>
</html>    