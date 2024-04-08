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
        <tr>
          <td>Maria Silva</td>
          <td>maria@gmail.com</td>
          <td>(11) 99999-9999</td>
          <td><a href="#">Editar</a> | <a href="#">Excluir</a></td>
        </tr>
 
        <!-- Repita esse formato para cada contato cadastrado -->
 
      </tbody>
 
    </table>
 
  </div>
 
 
  <script src = "https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</body>
</html>