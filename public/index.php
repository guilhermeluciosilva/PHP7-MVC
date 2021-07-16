<?php
include './../app/configuracao.php';
include './../app/Libraries/Rota.php';
include './../app/Libraries/Controller.php';
include './../app/Libraries/Database.php';
$db = new Database;

$usuarioId = 10;
$titulo = 'Titulo';
$texto = 'texto';

$db->query("INSERT INTO tb_posts (usuario_id, titulo, texto) VALUES (:usuario_id, :titulo, :texto)");
$db->bind(":usuario_id", $usuarioId);
$db->bind(":titulo", $titulo);
$db->bind(":texto", $texto);

$db->executa();


echo 'Total de resultados: '.$db->totalResultados();
echo '<br>Ultimo id: '.$db->ultimoIdInserido();
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