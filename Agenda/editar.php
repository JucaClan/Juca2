<?php
if (!isset($_GET['id'])) {
    //REDIRECIONAR
    header('Location/ ../index.php');
} else {
    require_once('classes/Contato.class.php');
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
        <form>
            <div class="form-group">
                <label for="nome" value="<?= $dados['nome'] ?>">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="form-group">
                <label for="email" value="<?= $dados['email'] ?>">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="telefone" value="<?= $dados['telefone'] ?>">Telefone:</label>
                <input type="tel" class="form-control" id="telefone" name="telefone">
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>