<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="container">
    <form id="contact" action="resultado.php" method="post">
      <h3>Contato</h3>

      <?php if ($_COOKIE['visitou'] == 1) { ?>
        <h1>SAI FORA PARSA! VOCÊ JÁ ENVIOU UMA MENSAGEM!</h1>
      <?php  } ?>

      <?php if (isset($_GET['nome'])) {   ?>
        <h4>Olá, <?= $_GET['nome']; ?>! Entre em contato conosco pelo formulário abaixo:</h4>
      <?php } else { ?>
        <h4>Olá! Entre em contato conosco pelo formulário abaixo:</h4>
      <?php } ?>

      <fieldset>
        <input placeholder="Nome" name="nome" type="text" tabindex="1" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="E-mail" name="email" type="email" tabindex="2" required>
      </fieldset>
      <fieldset>
        <input placeholder="Telefone" name="tel" type="tel" tabindex="3" required>
      </fieldset>
      <fieldset>
        <textarea placeholder="Digite sua mensagem" tabindex="5" required></textarea>
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="Enviando...">Enviar</button>
      </fieldset>
    </form>
  </div>
</body>

</html>