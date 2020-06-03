	
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


  *  {
  margin:0;
  padding:0;
}
html, body {height:100%;}
.geral {
  min-height:100%;
  position:relative;
  width:800px;
}
.content {overflow:hidden;}
.aside {width:200px;}
.fleft {float:left;}
.fright {float:right;}
.footer {
  position:absolute;
  bottom:0;
  width:100%;
}

  </style>