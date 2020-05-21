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
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Alterar cor ao passar o mouse */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Crie três colunas iguais que flutuam próximas uma da outra */
.column {
  float: left;
  width: 33.33%;
  padding: 15px;
}

/* Limpar carros alegóricos após as colunas*/
.row:after {

  display: table;
  clear: both;
}

/* Layout responsivo - faz as três colunas se empilharem umas sobre as outras, em vez de ficarem próximas uma da outra */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}

</style>
<body>
<div class="row">
        <div class="container">
          <h2 class="page-header">Ventture Store</h2>
  <img src="img/banner.jpg" alt="Notebook" style="width:150%;">
  <div class="content">
    <h1>Seja você mesmo seu próprio padrão.</h1>
    <p>Ventture Store é uma loja de bonés, T-shirts, tênis, acessórios, online que surgiu em 2020 com objetivo de oferecer e entregar produtos de ótima qualidade e precos acessiveis.Temos uma variedades enormes de modelos, de várias marcas do mercado.Use nossa marca e arranque elogios por ai.</p>
  </div>
</div>
</div>

</body>
</html>
</div>
        </div>
      </div>    
    </div>
  </div>

<?php include_once('rodape.php');?>
</body>
</html>