<?php
require __DIR__ . './../vendor/autoload.php';

use App\Entity\Servico;

//Validação do formulário 

if (isset($_POST['nome_servico'], $_POST['valor_servico']) && $_POST['valor_servico']!==0) {
    $obServico = new Servico;
    $obServico->nome_servico = $_POST['nome_servico'];
    $obServico->valor_servico = $_POST['valor_servico'];
    $obServico->cadastrar();

    $_SESSION['success'] = "<div class='alert alert-success alert-dismissible fade show d-flex justify-content-center col-md-6 offset-md-3' id='success' role='alert'>
                                <strong>Serviço cadastrado com sucesso!</strong>
                                    <button type='button' class='close' data-dismiss='alert' aria-label=Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                            </div>";
    header('location: gerenciar.php?connection=success');
    exit;
} else {
    $_SESSION['erro'] = "<div class='alert alert-danger alert-dismissible fade show d-flex justify-content-center col-md-6 offset-md-3' id='error' role='alert'>
                                <strong>Valor inválido!&nbsp;</strong>Por favor, reescreva novamente.
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                            </div>";
    header('location: cadastro.php?validation=failed');
}
