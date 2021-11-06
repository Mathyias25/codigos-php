<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>
    <h1>FORMULÁRIO</h1>
    <form action = "formulario.php" method = "POST">
        NOME: <input type = "text" name = "nome">
        EMAIL: <input type = "email" name = "email">
        <input type = "submit" name = "enviar" value = "ENVIAR DADOS">
    </form>

    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        echo "Seu nome é $nome e seu email é $email";
        echo "<br>";
        
    ?>

</body>
</html>