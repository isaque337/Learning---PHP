<?php
require_once('./config.php'); // Incluindo o arquivo (Caso não exista, 'Fatal error' paralizando scripts posteriores)
//include('./estrutura/header.php'); // Incluindo o arquivo (Caso não exista, 'Warning' sem parar a página)
include_once('./estrutura/header.php'); // Inclui o arquivo somente uma vez, ignorando as outras chamadas, caso acontença.
?>

<h3>Contéudo da página HOME</h3>

<?php
include_once dirname('./estrutura/footer.php');
?>
