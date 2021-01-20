<?php
$url="http://localhost/correios/apicorreios.php";
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rastreamento do Produto </title>
</head>
<body>

    <h3>Acompanhe seu produto </h3>
    <br>
    <form action="correios.php" method="post">
        <label for="codigo">Digite o código do seu produto </label>
        <br><br>
        <input id="cod" name="cod" class="cod" type="text" placeholder="Ex:02938ADS98AS">
        <br><br>
        <label for="email">Digite aqui seu email para receber as informações</label>
        <br><br>
        <input id="email" name="email" class="email" type="email">
        <br><br>
        <a href="apicorreios.php"><button type="submit" >Enviar</button></a>
    </form>
</body>
</html>