<?php
 
// Array que será utilizada na atividade:
 
$animais = array(
    array("id" => 1, "nome" => "Bolinha", "tipo" => "Cachorro", "raça" => "Poodle", "nome_proprietario" => "Maria Silva"),
    array("id" => 2, "nome" => "Mimi", "tipo" => "Gato", "raça" => "Siames", "nome_proprietario" => "João Santos"),
    array("id" => 3, "nome" => "Toby", "tipo" => "Cachorro", "raça" => "Beagle", "nome_proprietario" => "Lucas Souza"),
    array("id" => 4, "nome" => "Luna", "tipo" => "Gato", "raça" => "Persa", "nome_proprietario" => "Isabela Oliveira"),
    array("id" => 5, "nome" => "Billy", "tipo" => "Cachorro", "raça" => "Bulldog", "nome_proprietario" => "Rafaela Silva"),
    array("id" => 6, "nome" => "Mel", "tipo" => "Gato", "raça" => "Siamês", "nome_proprietario" => "Sofia Costa"),
    array("id" => 7, "nome" => "Ted", "tipo" => "Cachorro", "raça" => "Labrador", "nome_proprietario" => "Pedro Alves"),
    array("id" => 8, "nome" => "Mila", "tipo" => "Gato", "raça" => "Angorá", "nome_proprietario" => "Gustavo Lima"),
    array("id" => 9, "nome" => "Nina", "tipo" => "Cachorro", "raça" => "Vira-Lata", "nome_proprietario" => "Ana Oliveira"),
    array("id" => 10, "nome" => "Bela", "tipo" => "Gato", "raça" => "Persa", "nome_proprietario" => "Bruno Santos")
);
 
// Abaixo o código HTML:
?>
 
 
<!doctype html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listagem de Animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
 
<body>
    <div class="container">
        <h1>Lista de Animais de Estimação</h1>
 
        <!-- Tabela: Lista os animais do array na tabela abaixo: -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Raça</th>
                    <th>Nome do Proprietário</th>
                </tr>
            </thead>
            <tbody>
                <!-- Registro de Exemplo: Utilize como base para realizar a estrutura em PHP -->
                
                
                <?php  foreach($animais as $animal) {  ?>
                <tr>
                    <td><?=$animal['id'];?></td>
                    <td><?=$animal['nome'];?></td>
                    <td><?=$animal['tipo'];?></td>
                    <td><?=$animal['raça'];?></td>
                    <td><?=$animal['nome_proprietario'];?></td>
                </tr>
                <?php  } ?>


            </tbody>
        </table>
    </div>
 
 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
 
</html>