<?php

print_r($_POST);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('classes/Contato.class.php');
    $contato = new Contato();
    $contato->nome = $_POST['nome'];
    $contato->email = $_POST['email'];
    $contato->telefone = $_POST['telefone'];
    $contato->id = $_POST['id'];
    if ($contato->Editar() == 1) {
        //REDIRECIONAR DE VOLTA AO INDEX.PHP e mostar resultado
        header('Location: ../index.php?sucesso=2');
    } else {
        //REDIRECIONAR DE VOLTA AO INDEX.PHP e mostar resultado
        header('Location: ../index.php?falha=2');
    }
} else {
    echo 'ERRO! A página deve ser carregada por POST';
}

