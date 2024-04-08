<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {  ?>
        <h1>Formulário Enviado!</h1>
        <p>Olá, <?= $_POST['nome'] ?></p>
        <p>Seu e-mail é <?= $_POST['email'] ?></p>
        <?php setcookie("visitou", 1); ?>
    <?php } else {

        header('Location: index.php');
    }
    ?>

</body>

</html>