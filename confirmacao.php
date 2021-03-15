<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
    echo "Olá, É um prazer te conhecer!!, pedimos para que confirme suas informações para que não ocrra nenhum erro";
    echo "Seu nome é: " . $_SESSION['Nome']; 
    echo "Seu CPF é: " . $_POST["CPF"];
    echo "Seu Numero de Telefone: " . $_POST["apelido"];
    echo "Sua Forma de Pagamento: " . $_POST["#"];
?>
</body>
</html> 

