<?php
session_start();

require __DIR__ . './../vendor/autoload.php';

use App\Entity\Servico;
?>


<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>Gerenciar Serviços</title>
    <?php include_once __DIR__ . '/../includes/header.php'; ?>

</head>

<body>

    <?php include_once __DIR__ . '/../includes/navbar.php'; ?>

    <br>
    <div class="container">

        <div class="form-group">
            <div class="col-md-6 offset-md-3 h3">
                <center>GERENCIAR SERVIÇO</center>
            </div>
        </div>
    </div>

    <?php
    $servicos = Servico::getServicos();
    $resultados = '';
    foreach ($servicos as $servico) {
        $resultados .=   '<tr>
                                <td>' . $servico->id . '</td>
                                <td>' . $servico->nome_servico . '</td>
                                <td>' . $servico->valor_servico . '</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="editar_servico.php?id=' . $servico->id . '">
                                            <button type="button" class="btn btn-light btn-sm">Editar</button>
                                         </a>&nbsp;
                                        <a href="excluir_servico.php?id=' . $servico->id . '">
                                            <button type="button" class="btn btn-danger btn-sm">Excluir</button>
                                        </a>
                                    </div                                         
                                </td>
                            </tr>';
    }

    $resultados = strlen($resultados) ? $resultados : '<tr>
                                                            <td colspan ="5" class="text-center">
                                                                Nenhum Cliente encontrado
                                                            </td>       
                                                        </tr>';

    ?>

    <div class="container-fluid">

        <div class="form-group">
        <?php
                if (isset($_GET['validation'])) {
                    echo $_SESSION['error'];
                } else if (isset($_GET['connection'])) {
                    echo $_SESSION['success'];
                } ?>
            <div class="col-md-6 offset-md-3">


                <table class="table bg-secondary mt-3">

                    <thead>
                        <tr class="h5">
                            <th>ID</th>
                            <th>NOME</th>
                            <th>VALOR</th>
                            <th>AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $resultados ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
    <!-- 
<form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>

 -->


    <?php include_once __DIR__ . '/../includes/footer.php'; ?>

</body>

</html>