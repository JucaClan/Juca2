<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('classes/Contato.class.php');
$contato = new Contato();
$contato->nome = $_POST['nome'];
$contato->email = $_POST['email'];
$contato->telefone = $_POST['telefone'];
if($contato->Cadastrar() == 1) {
    echo 'Contato cadastrado!';
}
else{
    echo 'ERRO!';
}

} else {
    echo 'ERRO! A página deve ser carregada por POST';
}

?>
