<?php

// Arrays de mensagens de erro/sucesso:
$resultado = [
    "Arquivo enviado com sucesso!",
    "Falha ao enviar arquivo!",

];

$destino = 'imagens/' . $_FILES['arquivo']['name'];
 
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
 
move_uploaded_file( $arquivo_tmp, $destino  );



    echo 'Nome: ' , $_FILES[ 'arquivo' ][ 'name' ] ,'<br>' ;
    echo 'Tipo: ' , $_FILES[ 'arquivo' ][ 'type' ]  ,'<br>';
    echo 'tamanho: ' , $_FILES[ 'arquivo' ][ 'size' ]  ,'<br>';

    HEAD "<img
    src="$destino"
    alt="imagem recebida" />
?>
   
    

