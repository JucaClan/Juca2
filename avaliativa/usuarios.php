<?php

$tipos = ["Administrador", "Moderador", "Membro"];

$usuarios = array(
    array(
        'id' => 1,
        'username' => 'robson123',
        'nome_completo' => 'Robson Carlos',
        'email' => 'user1@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 1
    ),
    array(
        'id' => 2,
        'username' => 'marcelocarlos',
        'nome_completo' => 'Marcelo Carlos Soares',
        'email' => 'user2@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 2
    ),
    array(
        'id' => 3,
        'username' => 'mariaapjunqueira',
        'nome_completo' => 'Maria Aparecida Pereira',
        'email' => 'user3@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 3
    ),
    array(
        'id' => 4,
        'username' => 'otavioneves',
        'nome_completo' => 'Otavio Neves Lara',
        'email' => 'user4@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 2
    ),
    array(
        'id' => 5,
        'username' => 'thierrycouto',
        'nome_completo' => 'Thierry Couto',
        'email' => 'user5@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 1
    ),
    array(
        'id' => 6,
        'username' => 'matheusbpereira',
        'nome_completo' => 'Matheus Barros Pereira',
        'email' => 'user6@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 2
    ),
    array(
        'id' => 7,
        'username' => 'julianocmiranda',
        'nome_completo' => 'Juliano Coelho Miranda',
        'email' => 'user7@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 1
    ),
    array(
        'id' => 8,
        'username' => 'rosaneborges',
        'nome_completo' => 'Rosane Borges',
        'email' => 'user8@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 2
    ),
    array(
        'id' => 9,
        'username' => 'paulocoelho',
        'nome_completo' => 'Paulo Coelho',
        'email' => 'user9@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 1
    ),
    array(
        'id' => 10,
        'username' => 'antoniomapa3',
        'nome_completo' => 'Antonio Mapa 3',
        'email' => 'user10@gmail.com',
        'foto' => 'https://i.imgur.com/d9MPYlf.png',
        'id_tipo' => 2
    )
);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Gamers</title>
    <!-- Link para o CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS personalizado -->
    <style>
        body {
            background-color: #1c1c1c;
            color: #fff;
        }

        table {
            background-color: #2d2d2d;
            color: #fff;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 10px;
            color: white;
        }

        th {
            background-color: #bf6a1f;
            color: #fff;
        }

        td {
            background-color: #4c4c4c;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center mb-5">Tabela de Usuários</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Nome Completo</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Foto</th>
                    <th scope="col">ID Tipo</th>
                </tr>
            </thead>
            <tbody>
                <!-- Com base no modelo abaixo, exiba os usuários contidos
                no array. -->
                <?php  foreach($usuarios as $usuario) {  ?>
                <tr>
                    <td><?=$usuario['id'];?></td>
                    <td><?=$usuario['username'];?></td>
                    <td><?=$usuario['nome_completo'];?></td>
                    <td><?=$usuario['email'];?></td>
                    <td><img src=<?=$usuario['foto'];?> alt="Foto do usuário username"></td>
                    <td><?=$tipos[$usuario['id_tipo']];?></td>
                </tr>
                <?php  } ?>
               
            </tbody>
        </table>
    </div>
    <!-- Link para o JavaScript do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>