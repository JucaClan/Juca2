<?php

// Verificar se a sessão não existe:
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo "Você não está logado!";
        die();
    }

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('classes/Contato.class.php');

    $contato = new Contato();
    $contato->nome = $_POST['nome'];
    $contato->email = $_POST['email'];
    $contato->telefone = $_POST['telefone'];
    $contato->id = $_POST['id'];
    if($contato->Editar() == 1){
        // Redirecionar de volta ao index.php:
        header('Location: ../index.php?sucesso=2');
    }else{
        header('Location: ../index.php?falha=2');
    }

}else{
    echo 'Erro. A página deve ser carregada por POST';
}


// print_r($_POST);

?>