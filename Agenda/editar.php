<?php
// Verificar se a sessão não existe:
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo "Você não está logado!";
        die();
    }

if (!isset($_GET['id'])) {
    // Redirecionar: 
    header('Location: index.php');
} else {
    require_once("actions/classes/Contato.class.php");
    $contato = new Contato();
    $contato->id = $_GET['id'];
    $dados = $contato->ListarPorID()[0];
}



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Edição</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Formulário de Edição</h1>
        <form action="actions/editar_contato.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" value="<?= $dados['nome'] ?>" class="form-control" id="nome" name="nome">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" value="<?= $dados['email'] ?>" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" value="<?= $dados['telefone'] ?>" class="form-control" id="telefone" name="telefone">
            </div>
            <input type="hidden" id="id" name="id" value="<?= $dados['id'] ?>">
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>