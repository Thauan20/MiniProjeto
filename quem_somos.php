<!DOCTYPE html>
<html>
<?php
	include_once('topo.php');
	?>
<head>
    <title>VenttureStore</title>
    <meta charset="UTF-8">
    <html lang="pt-br"></html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/novocss.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
</head>
<style type="text/css" media="screen">
	<?php include_once('estilo.php');?>
</style>
<body>
    <h2>Quem Somos</h2>
    <?php include "conecta.inc.php";?>
        <?php 
            // Trazendo dados da tabela Página
            $query = mysqli_query($conexao, "SELECT * FROM paginas WHERE id = 0");


            // Litando valores retornados da tabela "paginas"
            while($tabela = mysqli_fetch_array($query)){
            echo $tabela['conteudo'];
            }
        ?>
<div class="container">
</div>
</body>
<?php include_once('rodape.php');?>
</html>
