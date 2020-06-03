<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading">
          <h3>Obrigado pelo contato.</h3> 
        </div>
        <div class="col-md-6 col-serv">
		<?php
@$nome = $_POST['nome'];
@$email = $_POST['email'];
@$telefone = $_POST['telefone'];
@$assunto = $_POST['assunto'];
@$mensagem = $_POST['mensagem'];
@$dados = "INSERT INTO faleconosco (nome, email,telefone,assunto,mensagem) VALUES ('$nome','$email','$telefone','$assunto','$mensagem')";
$query = mysqli_query($conexao,$dados);
?>
  <?php
@$nome = $_POST['nome'];
@$email = $_POST['email'];
@$telefone = $_POST['telefone'];
@$cidade = $_POST['cidade'];
@$cep = $_POST['cep'];
@$numero = $_POST['numero'];
@$complemento = $_POST['complemento'];
@$mensagem = $_POST['mensagem'];
@$dados = "INSERT INTO pedidos (nome, email, telefone, cidade, cep, numero, complemento, mensagem) VALUES ('$nome','$email','$telefone','$cidade','$cep','$numero','$complemento','$mensagem')";
$query = mysqli_query($conexao,$dados);
?>
		</div>
	  </div>
	</div>
</div>