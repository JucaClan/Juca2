<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  if ($_SERVER['REQUEST_METHOD'] === 'POST') { ?>
    <h1>Seu email é: <?=$_POST['email']?></h1>
    <h1>Sua senha é:<?=$_POST['senha']?></h1>
    <?php } else{ ?>
        <h2>Erro! A página não foi carregada por POST!</h2>
    <?php } ?>
    
</body>
</html>