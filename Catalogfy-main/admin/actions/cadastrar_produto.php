<?php

// Verificar a sessão:
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo "Falha! Você precisa estar logado(a).";
        die();
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        require_once('classes/Produto.class.php');
        $p = new Produto();
        $p->nome = strip_tags($_POST['nome']);
        $p->preco = strip_tags($_POST['preco']);
        $p->estoque = strip_tags($_POST['estoque']);
        $p->id_categoria = strip_tags($_POST['id_categoria']);
        $p->descricao = strip_tags($_POST['descricao']);
        $p->id_usuario_resp = $_SESSION['usuario']['id'];

        // Verificar se está chegando uma foto do formulário:
            if($_FILES['foto']['size']>0){
                $destino = "../fotos/";
                // Obter o hash do arquivo:
                $novo_nome = hash_file('md5', $_FILES['foto']['tmp_name']);
                // Obter a extensão do arquivo:
                $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
                // Montar o novo nome do arquivo:
                $novo_nome = $novo_nome . "." . $extensao;
                
                // Mover o arquivo para a pasta:
                if(move_uploaded_file($_FILES['foto']['tmp_name'], $destino.$novo_nome)){
                    $p->foto = $novo_nome;
                    if($p->CadastrarComFoto() == 1){
                        // Redirecionar:
                        header("Location: ../painel.php");
                    }else{
                        echo "Falha ao cadastrar o produto.";
                    }
                }else{
                    echo "Falha ao mover a imagem!";
                }
                

                //print_r($_FILES['foto']);
            }else{
                // Cadastro sem foto
                if($p->CadastrarSemFoto() == 1){
                    // Redirecionar:
                    header("Location: ../painel.php");
                }else{
                    echo "Falha ao cadastrar o produto.";
                }
            }
    }


?>