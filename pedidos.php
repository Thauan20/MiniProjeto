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
    <h2>Pedidos</h2>
   <form action="action_page.php">
    <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Nome</label><br>
                <input type="text" id="nome" name="nome" style="width: 80em" value="">
            </div>
            <div class="campo">
                <label for="snome">Sobrenome</label><br>
                <input type="text" id="snome" name="snome" style="width: 80em" value="">
            </div>
        </fieldset>
        <div class="campo">
            <label>Sexo</label>
            <label>
                <input type="radio" name="sexo" value="masculino"> Masculino
            </label>
            <label>
                <input type="radio" name="sexo" value="feminino"> Feminino
            </label>
        </div>
        <div class="campo">
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email" style="width: 80em" value="">
        </div>
        <div class="campo">
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" style="width: 80em" value="">
        </div>

        <fieldset class="grupo">
            <div class="campo">
             <label for="cidade">Cidade</label>
    <select id="cidade" name="cidade">
      <option value="joaopessoa">João Pessoa</option>
      <option value="itaporanga">Itaporanga</option>
            </div>
            <div class="campo">
            <label for="cep">CEP</label><br>
            <input type="text" id="cep" name="cep" style="width: 80em" value="">
        </div>
        <div class="campo">
            <label for="numero">número</label>
            <input type="text" id="numero" name="numero" style="width: 80em" value="">
        </div>
        <div class="campo">
            <label for="complemento">complemento</label>
            <input type="text" id="complemento" name="complemento" style="width: 80em" value="">
        </div>
        </fieldset>

        <div class="campo">
            <label for="mensagem">Mensagem</label>
            <textarea rows="6" style="width: 80em" id="mensagem" name="mensagem"></textarea>
        </div>

        <input type="submit" value="enviar">
    </fieldset>
</form>
</div>

</body>
<?php include_once('rodape.php');?>
</html>



