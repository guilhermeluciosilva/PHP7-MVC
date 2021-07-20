<?php
include './../app/configuracao.php';
// include './../app/autoload.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NOME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="<?=URL?>/public/css/estilos.css" rel="stylesheet"> 
</head>
<body>
    <?php  
        include '../app/Views/topo.php';  
        $rotas = new Rota();    
        include '../app/Views/rodape.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="<?=URL?>/public/js/jquery.funcoes.js" ></script>
</body>
</html>