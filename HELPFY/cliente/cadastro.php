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
    <title>Cadastrar Cliente</title>
    <?php include_once __DIR__ . '/../includes/header.php'; ?>

</head>

<body>

    <?php include_once __DIR__ . '/../includes/navbar.php'; ?>

    <br>
    <div class="container">

        <div class="form-group">
            <div class="col-md-6 offset-md-3 h3">
                <center>CADASTRAR CLIENTE</center><br>
            </div>
        </div>
    </div>

    <div class="form-group">
            <div class="col-md-6 offset-md-3 h5">
                <center>Cadastre-se como servidor <a href="trabalhadores.php">aqui!</a></center>
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
        <form action="cadastrar.php" method="POST">

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Nome Completo</label>
                    <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" required="" autocomplete="off">
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
                    <input type="number" name="telefone" class="form-control" placeholder="Digite seu número" maxlength="12" required="">

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
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Selecione uma opção</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Outros">Outros</option>
                    </select>
                </div>
            </div>

            <!-- <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label>Estado</label>
                    <input type="text" name="uf" class="form-control" placeholder="Digite seu CPF" required="" autocomplete="off">
                </div>
            </div> -->

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label for="exampleFormControlSelect1">Estado</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Selecione uma opção</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="RR">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>

                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Cidade</label>
                    <input type="text" name="cidade" class="form-control" placeholder="Digite a sua cidade" required="" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> CEP</label>
                    <input type="text" name="cep" class="form-control" placeholder="12345-678" required="" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Rua</label>
                    <input type="text" name="rua" class="form-control" placeholder="Digite sua rua" required="" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label>Bairro</label>
                    <input type="text" name="bairro" class="form-control" placeholder="Digite o seu bairro" required="">
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