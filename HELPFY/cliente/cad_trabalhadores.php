<?php
session_start();
require __DIR__ . './../vendor/autoload.php';
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
    <br>
    <div class="container">

        <div class="form-group">
            <div class="col-md-6 offset-md-3 h3">
                <center>CADASTRAR SERVIDOR DOMÉSTICO</center><br>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 offset-md-3 h5">
            <center>Cadastre-se como cliente <a href="cad_cliente.php">aqui!</a></center>
        </div>
    </div>
    </div>

    <div class="container">
        <?php
        if (isset($_GET['validation'])) {
            echo $_SESSION['erro'];
        } else if (isset($_GET['connection'])) {
            echo $_SESSION['success'];
        } ?>
        <form action="cadastrar_trabalhadores.php" method="POST">

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Nome Completo</label>
                    <input type="text" name="nome" class="form-control" placeholder="Nome completo" required="" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Digite seu e-mail" required="" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Telefone</label>
                    <input type="number" name="telefone" class="form-control" placeholder="ex: (33)90000-0000" maxlength="12" required="">

                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> CPF</label>
                    <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Digite seu CPF" required="" autocomplete="off">
                </div>
            </div>

            <!-- <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> sexo</label>
                    <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Digite seu CPF" required="" autocomplete="off">
                </div>
            </div> -->

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label for="exampleFormControlSelect1">Sexo</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="sexo">
                        <option>Selecione uma opção</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Outros">Outros</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Seu CEP</label>
                    <input type="text" name="cep" class="form-control" placeholder="12345-678" required="" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Número</label>
                    <input type="text" name="numero_casa" class="form-control" placeholder="ex: 103" required="">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Complemento</label>
                    <input type="text" name="complemento" class="form-control" placeholder="ex: 2° andar B " required="" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Cidade de atuação</label>
                    <input type="text" name="cidade" class="form-control" placeholder="Digite a sua cidade" required="" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label for="exampleFormControlTextarea1">Referências anteriores</label>
                    <textarea class="form-control" name="ref_anteriores" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label for="exampleFormControlTextarea1">Experiência profissional</label>
                    <textarea class="form-control" name="exp_prof" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Serviços ofertados</label>
                    <input type="text" name="oferto" class="form-control" placeholder="Descreva a sua mão de obra" required="" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Valor minímo</label>
                    <input type="text" name="valor_min" class="form-control" placeholder="Digite um valor de entrada" required="" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Dias da semana disponível</label>
                    <input type="text" name="data" class="form-control" placeholder="Digite a sua cidade" required="" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Login</label>
                    <input type="text" name="login" class="form-control" placeholder="Digite seu login" required="" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Senha</label>
                    <input type="text" name="senha" class="form-control" placeholder="Digite sua senha" required="" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>


    <?php include_once __DIR__ . '/../includes/footer.php'; ?>

</body>

</html>