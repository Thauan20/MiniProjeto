<?php
// conectando ao servidor
$conexao = mysqli_connect("localhost","root","");

// conectando ao BD criado
$db = mysqli_select_db($conexao, "meusite");
$query = mysqli_query($conexao, "SELECT * FROM pedidos");
if($conexao)
?>