<?php
 
$alertas_sucesso = [
    "cadastrousuario" => "Cadastro realizado com sucesso!",
    "cadastroproduto" => "Produto cadastrado com sucesso!",
    "editarproduto" => "Produto modificado com sucesso!",
    "removerproduto" => "Produto removido com sucesso!",
    "cadastrocategoria" => "Categoria cadastrada com sucesso!"
];
 
$alertas_falha = [
    "cadastrousuario" => "Falha ao cadastrar. Verifique as informações digitadas.",
    "cadastroproduto" => "Falha ao cadastrar produto. Verifique as informações digitadas.",
    "editarproduto" => "Falha ao modificar produto. Verifique as informações digitadas.",
    "removerproduto" => "Falha ao remover produto.",
    "cadastrocategoria" => "Falha ao cadastrar categoria.",
    "falhalogin" => "Usuário ou senha inválidos."
];
 
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    <?php if (isset($_GET['sucesso'])) { ?>
 
        Swal.fire({
            title: "Show!",
            text: "<?= $alertas_sucesso[$_GET['sucesso']]; ?>",
            icon: "success"
        });
        // Remover os parâmetros da URL (?sucesso= ...):
        window.history.replaceState(null, '', window.location.pathname);
 
    <?php } ?>;
 
    <?php if (isset($_GET['falha'])) { ?>
 
        Swal.fire({
            title: "Erro!",
            text: "<?= $alertas_falha[$_GET['falha']]; ?>",
            icon: "error"
        });
        // Remover os parâmetros da URL (?sucesso= ...):
        window.history.replaceState(null, '', window.location.pathname);
 
    <?php } ?>
</script>
