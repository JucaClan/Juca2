<?php
// Arrays de mensagens de erro/sucesso:
$sucesso = [
  "Contato cadastrado com sucesso!",
  "Contato removido com sucesso!",
  "Contato editado com sucesso!"
];
$falha = [
  "Falha ao cadastrar contato!",
  "Falha ao remover contato!",
  "Falha ao modificar contato!"
];

require_once('actions/classes/Contato.class.php');

$contato = new Contato();

$tabela = $contato->Listar();


?>

<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Cadastro de Contatos</title>
</head>

<body>
  <div class="container">
    <h1>Cadastro de contatos</h1>
    <form class="form-group" action="actions/cadastrar_contato.php" method="POST">
      <label for="nome">Nome completo:</label>
      <input type="text" id="nome" name="nome" class="form-control" required>
      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" class="form-control" required>
      <label for="telefone">Telefone:</label>
      <input type="tel" id="telefone" name="telefone" class="form-control">
      <br>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <?php if (isset($_GET['sucesso']) || isset($_GET['falha'])) {
      if (isset($_GET['sucesso'])) { ?>

        <div class="alert alert-success" role="alert">
          <?=$sucesso[ $_GET['sucesso'] ]; ?>
        </div>

      <?php } else { ?>

        <div class="alert alert-danger" role="alert">
        <?=$falha[ $_GET['falha'] ]; ?>
        </div>

    <?php }
    } ?>


    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>Nome</th>
          <th>E-mail</th>
          <th>Telefone</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>

        <!-- Insira aqui as linhas da tabela com os dados dos contatos -->

        <!-- Exemplo de linha da tabela com um contato fictício -->
        <?php foreach ($tabela as $linha) { ?>
          <tr>
            <td><?= $linha['nome']; ?></td>
            <td><?= $linha['email']; ?></td>
            <td><?= $linha['telefone']; ?></td>
            <td><a href="editar.php?id=<?= $linha['id']; ?>">Editar</a> | <a href="actions/apagar_contato.php?id=<?= $linha['id']; ?>">Excluir</a></td>
          </tr>
        <?php } ?>
        <!-- Repita esse formato para cada contato cadastrado -->

      </tbody>

    </table>

  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>