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
<h2>Fale conosco</h2>
  <form action="action_page.php">

    <label for="fname">Nome</label>
    <input type="text" id="Snome" name="Seunome" placeholder="Seu nome..">

    <label for="lname">Sobrenome</label>
    <input type="text" id="Sname" name="Sobrenome" placeholder="Seu sobrenome..">

    <label for="cidade">Cidade</label>
    <select id="cidade" name="cidade">
      <option value="joaopessoa">João Pessoa</option>
      <option value="itaporanga">Itaporanga</option>
      
    </select>

    <label for="mensagem">Mensagem</label>
    <textarea id="mensagem" name="mensagem" placeholder="Escreva algo.." style="height:200px"></textarea>

    <input type="submit" value="enviar">

  </form>
</div>
</body>
<?php include_once('rodape.php');?>
</html>