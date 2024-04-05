<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  if ($_SERVER['REQUEST_METHOD'] === 'POST') { ?>
    <h3>Olá, <?=$_POST['Nome']?></h3>
    <h3>Sua senha é:<?=$_POST['senha']?></h3>
    <?php } else{ ?>
        <h2>Erro! A página não foi carregada por POST!</h2>
    <?php } ?>
</body>
</html>