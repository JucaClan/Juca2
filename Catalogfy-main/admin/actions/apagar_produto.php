<?php
 
// Verificar se a sessão não existe:
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo "Você não está logado.";
        die();
    }
 
    if(isset($_GET['id'])){
        // Apagar:
        require_once('classes/Produto.class.php');
        $produto = new Produto();
        // Obtendo o id da URL:
        $produto->id = $_GET['id'];
        if($produto->Remover() == 1){
            // Redirecionar de volta ao index.php:
            header('Location: ../painel.php?sucesso=removerproduto');
        }else{
            header('Location: ../painel.php?falha=removerproduto');
        }
    }else{
        echo "Erro! Informe o ID a ser apagado.";
    }
 
?>