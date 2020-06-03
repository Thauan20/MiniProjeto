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
<body>
 <div class="container">
      <h2>PEDIDOS</h2>
   <?php include_once('conecta.inc.php'); ?>

  <form  id="contactForm" action="?pg=contatodb" method="post">
     
      <label>Nome:</label> <input type="text" class="form-control" name="nome" required="" data-validation-required-message="Please enter your name.">
      E-mail: <input type="email" class="form-control" name="email"/>
      Telefone: <input type="tel" class="form-control" name="telefone"/>
      Cidade: <input type="text" class="form-control" name="cidade"/>
      Cep: <input type="text" class="form-control" name="cep"/>
      Número: <input type="text" class="form-control" name="numero"/>
      Complemento: <input type="text" class="form-control" name="complemento"/>
      Mensagem:<textarea class="form-control" name="mensagem" rows="5" cols="10"></textarea><br>
      <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
  <?php include_once('contatodb.php');?>  
  </div>

</body>
<?php include_once('rodape.php');?>
</html>



