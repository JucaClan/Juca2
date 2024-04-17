<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('classes/Usuario.class.php');

    $u = new Usuario();
    $u->nome = $_POST['nome'];
    $u->email = $_POST['email'];
    $u->senha = $_POST['senha']; 
    $u->ativo = $_POST['ativo']; 
   
    if($u->Cadastrar() == 1){
        // Redirecionar de voltar para l
        header('Location: ../index.php');
    }else{
        echo'Falha ao cadastrar';
    }

}else{
    echo 'Erro. A página deve ser carregada por POST';
}

?>