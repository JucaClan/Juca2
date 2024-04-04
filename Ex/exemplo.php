<?php

$nomes = ["Cleber", "Josué", "Abraão", "Carlos"];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $titulo;  ?></title>
</head>
<body>
    <h2>Funcionários:</h2>

    <ul>
        <?php  foreach($nomes as $nome) {   ?>
            <li><?=$nome;?></li>
        <?php } ?>
    </ul>
    
</body>
</html>