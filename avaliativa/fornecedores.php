<?php

/* 
    O array abaixo será listado no formato de tabela no corpo do
    documento HTML: 
*/
$fornecedores = array(
    array(
        'id' => 1,
        'razao_social' => 'Empresa A',
        'cnpj' => '11.111.111/0001-01',
        'telefone' => '(11) 1111-1111',
        'cidade' => 'São Paulo'
    ),
    array(
        'id' => 2,
        'razao_social' => 'Empresa B',
        'cnpj' => '22.222.222/0001-02',
        'telefone' => '(22) 2222-2222',
        'cidade' => 'Rio de Janeiro'
    ),
    array(
        'id' => 3,
        'razao_social' => 'Empresa C',
        'cnpj' => '33.333.333/0001-03',
        'telefone' => '(33) 3333-3333',
        'cidade' => 'Belo Horizonte'
    ),
    array(
        'id' => 4,
        'razao_social' => 'Empresa D',
        'cnpj' => '44.444.444/0001-04',
        'telefone' => '(44) 4444-4444',
        'cidade' => 'Curitiba'
    ),
    array(
        'id' => 5,
        'razao_social' => 'Empresa E',
        'cnpj' => '55.555.555/0001-05',
        'telefone' => '(55) 5555-5555',
        'cidade' => 'Porto Alegre'
    ),
    array(
        'id' => 6,
        'razao_social' => 'Empresa F',
        'cnpj' => '66.666.666/0001-06',
        'telefone' => '(66) 6666-6666',
        'cidade' => 'Recife'
    ),
    array(
        'id' => 7,
        'razao_social' => 'Empresa G',
        'cnpj' => '77.777.777/0001-07',
        'telefone' => '(77) 7777-7777',
        'cidade' => 'Fortaleza'
    ),
    array(
        'id' => 8,
        'razao_social' => 'Empresa H',
        'cnpj' => '88.888.888/0001-08',
        'telefone' => '(88) 8888-8888',
        'cidade' => 'Salvador'
    ),
    array(
        'id' => 9,
        'razao_social' => 'Empresa I',
        'cnpj' => '99.999.999/0001-09',
        'telefone' => '(99) 9999-9999',
        'cidade' => 'Brasília'
    ),
    array(
        'id' => 10,
        'razao_social' => 'Empresa J',
        'cnpj' => '10.000.000/0001-10',
        'telefone' => '(10) 1010-1010',
        'cidade' => 'Belém'
    ),
    array(
        'id' => 11,
        'razao_social' => 'Empresa K',
        'cnpj' => '11.111.111/0001-11',
        'telefone' => '(11) 1111-1111',
        'cidade' => 'Belém'
    ),
    array(
        'id' => 12,
        'razao_social' => 'Empresa L',
        'cnpj' => '12.121.212/0001-12',
        'telefone' => '(12) 1212-1212',
        'cidade' => 'Florianópolis'
    ),
    array(
        'id' => 13,
        'razao_social' => 'Empresa M',
        'cnpj' => '13.131.313/0001-13',
        'telefone' => '(13) 1313-1313',
        'cidade' => 'Natal'
    ),
    array(
        'id' => 14,
        'razao_social' => 'Empresa N',
        'cnpj' => '14.141.414/0001-14',
        'telefone' => '(14) 1414-1414',
        'cidade' => 'Vitória'
    ),
    array(
        'id' => 15,
        'razao_social' => 'Empresa O',
        'cnpj' => '15.151.515/0001-15',
        'telefone' => '(15) 1515-1515',
        'cidade' => 'Cuiabá'
    )
);


?>
<!DOCTYPE html>
<html>

<head>
    <title>Tabela de Fornecedores</title>
    <!-- Importação do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Estilos personalizados -->
    <style type="text/css">
        body {
            background-color: #292b2c;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Tabela de Fornecedores</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Razão Social</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Cidade</th>
                </tr>
            </thead>
            <tbody>
                <!-- Com base no modelo abaixo, liste os dados do
                array do topo desse documento: -->
                
                <?php  foreach($fornecedores as $fornecedor) {  ?>
                <tr>
                    <td><?=$fornecedor['id'];?></td>
                    <td><?=$fornecedor['razao_social'];?></td>
                    <td><?=$fornecedor['cnpj'];?></td>
                    <td><?=$fornecedor['telefone'];?></td>
                    <td><?=$fornecedor['cidade'];?></td>
                </tr>
                <?php  } ?>
                
            </tbody>
        </table>
    </div>
    <!-- Importação do jQuery e do Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>