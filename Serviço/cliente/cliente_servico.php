<!-- <script>
     $(document).ready(function(e) {
         $("#buscaRapida").on('click', function(e) {
             var cod_veiculo = $('[name="cod_veiculo"]').val();
             var acao = $('*[name=acao] option:selected').val();
             console.log(acao);
             if (cod_veiculo) {
                 $('#formBuscaRapida').attr('action', acao).submit();
             } else {
                 alert('O Veículo deve ser selecionado !');
             }
         });
     } -->
<!-- </script> -->
<?php
require __DIR__ . './../vendor/autoload.php';
// namespace App\Db;
// session_start();
// use PDOException;



?>

<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>Cadastrar Serviço para Cliente</title>
    <?php include_once __DIR__ . '/../includes/header.php'; ?>

</head>

<body>

    <?php include_once __DIR__ . '/../includes/navbar.php'; ?>
    <br>
    <div class="container">

        <div class="form-group">
            <div class="col-md-6 offset-md-3 h3">
                <center>CADASTRAR SERVIÇO</center>
            </div>
        </div>
    </div>

    <form class="form-inline my-2 my-lg-0">
    <div class="input-group">

        <select name="cliente" class="form-control mr-sm-2 type="search" placeholder="Digite o nome do cliente">
                                            <option></option>
                                            <?php

                                            try {
                                                $result = $pdo->prepare("select nome, id from cliente");
                                                $result->execute();
                                                while ($row = $result->fetch()) {
                                                    echo "<option value={$row['id']}>{$row['nome']}</option>";
                                                }
                                            } catch (PDOException $e) {
                                                echo "Erro ao consultar regiões";
                                            }

                                            ?>
                                        </select>
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>

    </div>
            </form>
        
        <?php





        ?>





            <?php include_once __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>