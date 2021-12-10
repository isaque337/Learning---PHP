<?php
session_start();
require __DIR__ . './../vendor/autoload.php';

use App\Entity\Cliente;
?>

<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>Gerenciar Cliente</title>
    <?php include_once __DIR__ . '/../includes/header.php'; ?>

</head>

<body>

    <?php include_once __DIR__ . '/../includes/navbar.php'; ?>


    <br>
    <div class="container">

        <div class="form-group">
            <div class="col-md-6 offset-md-3 h3">
                <center>GERENCIAR CLIENTE</center>
            </div>
        </div>
    </div>

    <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form> -->

    <?php
    $clientes = Cliente::getClientes();
    $resultados = '';
    foreach ($clientes as $cliente) {
        $resultados .=   '<tr>
                                <td>'.$cliente->id.'</td>
                                <td>'.$cliente->nome.'</td>
                                <td>'.$cliente->cpf.'</td>
                                <td>'.$cliente->status.'</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="editar_cliente.php?id=' .$cliente->id.'">
                                            <button type="button" class="btn btn-light btn-sm">Editar</button>
                                         </a>&nbsp;
                                        <a href="excluir_cliente.php?id=' .$cliente->id.'">
                                            <button type="button" class="btn btn-danger btn-sm">Excluir</button>
                                        </a>
                                    </div                                         
                                </td>
                            </tr>';
    }
    ?>
    <div class="container">

        <div class="form-group">
            <div class="col-md-6 offset-md-3">

                <table class="table bg-secondary mt-3">

                    <thead>
                        <tr class="h5">
                            <th>ID</th>
                            <th>NOME</th>
                            <th>CPF</th>
                            <th>STATUS</th>
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
    <?php include_once __DIR__ . '/../includes/footer.php'; ?>

</body>

</html>