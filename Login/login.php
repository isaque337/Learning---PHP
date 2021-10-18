<?php
session_start();
if(isset($_SESSION['aviso'])){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}else{
    header("location: index.php");

}

// switch (isset($_SESSION)) {
//     case ['aviso']:
//         echo $_SESSION['aviso'];
//         $_SESSION['aviso'] = '';
//         break;
//     case ['aviso2']:
//         echo $_SESSION['aviso2'];
//         $_SESSION['aviso2'] = '';
//         break;
//     default:
//         header("location: index.php");
//         break;
// }

?>
<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form method="POST" action="recebe.php">

        <label>
            Qual o seu nome?
            <br>
            <input type="text" autocomplete="off" name="nome">
            <br>
        </label>

        <label>
            <input type="submit" value="Salvar">
        </label>


    </form>
</body>

</html>