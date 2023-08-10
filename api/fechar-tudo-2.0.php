<?php
session_start();
session_destroy();
header( "refresh:3;url=https://www.costeau.com.br/index.php?preferencias=portugues" );
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Fechando tudo...</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="scripts/estatisticas-dispositivos.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.conteudo {
margin:auto;
margin-top:50px;
width:600px;
box-shadow:4px 4px 8px #333;
padding:50px;
border-radius:5px;
color:#666;
}

@media screen and (max-width:600px) {
.conteudo {
width:100%;
padding:15px;
}
}

.loader {
  border: 2px dotted #4a4;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
  margin:auto;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body>
<div class="conteudo">
  <h4 style='text-align:center;color:orangered;'>Obrigado por usar nosso sistema, estamos fechando todas as suas informações.</h4>
  <div class="loader"></div>
</div>
</body>
</html>
