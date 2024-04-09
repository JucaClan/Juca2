<?php

if(isset($_GET['id'])){
    // Apagar:
    require_once('classes/Contato.class.php');
    $contato = new Contato();
    // Obtendo o id da URL:
    $contato->id = $_GET['id'];
    if($contato->Apagar() == 1){
        // Redirecionar de volta ao index.php:
        header('Location: ../index.php?sucesso=1');
    }else{
        header('Location: ../index.php?falha=1');
    }
}else{
    echo "Erro! Informe o ID a ser apagado!";
}


?>