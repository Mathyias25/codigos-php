<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <form action = "" method = "POST">
       CÓDIGO DO PRODUTO <input type = "text" name = "codigo"><br>
       QUANTIDADE DE PRODUTOS <input type = "text" name = "quantidade"><br>
        <input type = "submit" name = "calcular" value = "PREÇO A PAGAR">
    </form>

    <?php
        $codigo_produto = $_POST['codigo'];
        $quantidade_produto = $_POST['quantidade'];

        switch ($codigo_produto) {
            case '100':
             $preco_a_pagar = $quantidade_produto * 1.70;
             echo "PREÇO TOTAL = R$ $preco_a_pagar";
                break;

            case '101':
            $preco_a_pagar = $quantidade_produto * 2.30;
            echo "PREÇO TOTAL = R$ $preco_a_pagar";
                break;

            case '102':
            $preco_a_pagar = $quantidade_produto * 2.60;
            echo "PREÇO TOTAL = R$ $preco_a_pagar";
                break;

            case '103':
            $preco_a_pagar = $quantidade_produto * 2.40;
            echo "PREÇO TOTAL = R$ $preco_a_pagar";
                break;

            case '104':
            $preco_a_pagar = $quantidade_produto * 2.50;
            echo "PREÇO TOTAL = R$ $preco_a_pagar";
                break;

            case '105':
            $preco_a_pagar = $quantidade_produto * 1;
            echo "PREÇO TOTAL = R$ $preco_a_pagar"; 
                break;

            default:
                echo "CÓDIGO INVÁLIDO";
                break;
        }
    ?>
</body>
</html>