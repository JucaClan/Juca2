<?php

// Verificar se a página foi carregada por POST:
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('actions/classes/Usuario.class.php');
    $u = new Usuario;
    $u->email = $_POST['email'];
    $u->senha = $_POST['senha'];

    $resultado = $u->Logar();
    if (count($resultado) == 1) {
        echo 'Acertou miseravi';
    } else {
        echo 'senha incorreta!';
    }
    print_r($resultado);
} else {
    echo "<h3>A página deve ser carregada por POST</h3>";
}
