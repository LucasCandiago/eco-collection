<?
ini_set('display_errors', '0');     # don't show any errors...
error_reporting(E_ALL | E_STRICT);

require_once("define.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <? include("includes/includes.php"); ?>

    <title>Eco Colletion</title>
</head>

<body>
    <? include("modulos/topo.php"); ?>

    <?
    if ($_GET['a'] == '') {
        include('modulos/home.php');
    } else if ($_GET['a'] == 'papel') {
        include('modulos/janelas/papel.php');
    } else if ($_GET['a'] == 'plastico') {
        include('modulos/janelas/plastico.php');
    } else if ($_GET['a'] == 'vidro') {
        include('modulos/janelas/vidro.php');
    } else if ($_GET['a'] == 'metal') {
        include('modulos/janelas/metal.php');
    } else if ($_GET['a'] == 'organico') {
        include('modulos/janelas/organico.php');
    } 
    ?>

    <? include("modulos/rodape.php"); ?>
</body>
<script src="js/carousel.js"></script>
<? include("includes/sem-prioridade.php"); ?>
<script src="js/mask.js"></script>

</html>