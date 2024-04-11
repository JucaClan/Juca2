<?php

// Verificar se a página foi carregada por POST:
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // Verificar se o e-mail e a senha estão corretos:
            if($_POST['email'] == 'admin@admin.com' && $_POST['senha'] == 'admin'){
                echo "Show, acertou a senha!";
                
                // Iniciar a sessão:
                session_start();
                // Criar a sessão:
                $_SESSION['usuario'] = ['nome' => 'Robson', 'email' => 'admin@admin.com'];
            }else{
                echo "Email ou senha incorretos.";
            }
    }else{
        echo "<h3>A página deve ser carregada por POST</h3>";
    }

?>