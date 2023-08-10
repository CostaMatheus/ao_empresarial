<?php
session_start();
if(!isset($_SESSION['privilegio']) || !isset($_SESSION['AO_Empresarial']) || !isset($_SESSION['usuario']) || !isset($_SESSION['email']) || !isset($_SESSION['credencial'])) {
  header("location: http://localhost/costeau");
session_destroy();
} else {
  $privilegio = $_SESSION['privilegio'];
  $ambiente = $_SESSION['AO_Empresarial'];
  $grupo = $_SESSION['grupo'];
  $usuario = $_SESSION['usuario'];
  $email = $_SESSION['email'];
  $credencial = $_SESSION['credencial'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Estrutura Ambiente Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="estilos/menu-usuario-AOpj-2.0.css">
<style>
#conteudo-pesquisa {
position:absolute;top:220px;left:0px;right:0px;bottom:0px;overflow:auto;background:#ddd;opacity:0.9;display:none;
}
button {
  cursor:pointer;
  background:none;
  border:none;
}
.configuracao {
  position:absolute;
  left:0px;
  right:0px;
  bottom:0px;
  background:#ffffffdd;
  display:none;
}
.aplicacao:hover .configuracao {
  display:block;
}

@media screen and (min-width: 1024px) {
  #pagina {
    width:100%;
    height:800px;
    margin-top:120px;
  }

  #caixa-pesquisa{
    width:100%;
    height:100px;
    border-bottom:5px solid #ccc;
    background:white;
    padding:30px;
  }

  #barra-pesquisa {
    width:500px;
    height:40px;
    margin:auto;
  }

  #entrada-pesquisa {
    padding-left:15px;
    float:left;
    height:40px;
    border-radius:50px 0px 0px 50px;
    width:80%;
    border:1px solid #666;
  }

  #botao-pesquisa {
    width:20%;
    float:right;
    border-radius: 0px 50px 50px 0px;
    height:40px;
    border:none;
    background:rgb(95,211,95);
  }

  #icone-pesquisar {
    font-size:20px;
    color:#fff;
  }

  #caixa-publicitarios {
    float:right;
    width:300px;
  }

  #caixa-conteudo {
    padding:20px;
    padding-right:320px;
  }

  #barra-interna-menu, #barra-externa-menu {
    display:none;
  }

  #caixa-menu {
    position:absolute;
    left:0px;
    top:0px;
    right:0px;
    height:120px;
    background:#333;
  }
}

@media screen and (min-width:640px) and (max-width:1024px) {
  #pagina {
    width:100%;
    height:800px;
  }

  #caixa-pesquisa{
    width:100%;
    height:100px;
    border-bottom:5px solid #ccc;
    background:white;
    padding:25px;
  }

  #barra-pesquisa {
    width:500px;
    height:40px;
    margin:auto;
  }

  #entrada-pesquisa {
    padding-left:15px;
    float:left;
    height:40px;
    border-radius:50px 0px 0px 50px;
    width:80%;
    border:1px solid #666;
  }

  #botao-pesquisa {
    width:20%;
    float:right;
    border-radius: 0px 50px 50px 0px;
    height:40px;
    border:none;
    background:rgb(95,211,95);
  }

  #icone-pesquisar {
    font-size:20px;
    color:#fff;
  }

  #caixa-publicitarios {
    width:100%;
  }

  #hostinger-desktop {
    display:none;
  }

  #caixa-conteudo {
    padding:20px;
    width:100%;
  }

  #caixa-menu {
    width:100%;
    background:#333;
    display:none;
  }

  #barra-externa-menu {
    position:fixed;
    left:0px;
    bottom:0px;
    right:0px;
    padding:15px;
    text-align:center;
    background:#ddd;
  }

  #barra-interna-menu {
    width:100%;
    padding:15px;
    text-align:center;
    color:#fff;
  }
}

@media screen and (max-width:640px) {
  #pagina {
    width:100%;
    height:800px;
  }

  #caixa-pesquisa{
    width:100%;
    height:80px;
    border-bottom:5px solid #ccc;
    background:white;
    padding:15px;
  }

  #barra-pesquisa {
    width:90%;
    height:40px;
    margin:auto;
  }

  #entrada-pesquisa {
    padding-left:15px;
    float:left;
    height:40px;
    border-radius:50px 0px 0px 50px;
    width:80%;
    border:1px solid #666;
  }

  #botao-pesquisa {
    width:20%;
    float:right;
    border-radius: 0px 50px 50px 0px;
    height:40px;
    border:none;
    background:rgb(95,211,95);
  }

  #icone-pesquisar {
    font-size:20px;
    color:#fff;
  }

  #caixa-publicitarios {
    width:100%;
  }

  #hostinger-desktop {
    display:none;
  }

  #caixa-conteudo {
    padding:20px;
    width:100%;
  }

  #barra-externa-menu {
    position:fixed;
    left:0px;
    bottom:0px;
    right:0px;
    padding:15px;
    text-align:center;
    background:#ddd;
  }

  #barra-interna-menu {
    width:100%;
    padding:15px;
    text-align:center;
    color:#fff;
    border-bottom:1px solid #fff;
    box-shadow:0px 2px 8px #fff;
    margin-bottom:30px;
  }
}
</style>
<script>
$(document).ready(function(){
    $("#abrir-menu").click(function(){
        $("#pagina").slideUp("slow");
        $("#caixa-menu").slideDown("slow");
    });
});

$(document).ready(function(){
    $("#fechar-menu").click(function(){
        $("#pagina").slideDown("slow");
        $("#caixa-menu").slideUp("slow");
    });
});

function restaurarTela() {
  var l = document.body.clientWidth;
  if(l>1024) {
    $("#pagina, #caixa-menu").slideDown("slow");
  } else {
    $("#caixa-menu").slideUp("slow");
    $("#pagina").slideDown("slow");
  }
}

window.onscroll = function() {barraPesquisa()};
	
function barraPesquisa() {
  var l = document.body.clientWidth;
  if(l>1024) {
    if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
      document.getElementById("caixa-pesquisa").style.position = "fixed";
      document.getElementById("caixa-pesquisa").style.top = "0px";
      document.getElementById("conteudo-pesquisa").style.position = "fixed";
      document.getElementById("conteudo-pesquisa").style.top = "100px";
    } else {
      document.getElementById("caixa-pesquisa").style.position = "relative";
      document.getElementById("caixa-pesquisa").style.top = "0px";
      document.getElementById("conteudo-pesquisa").style.position = "absolute";
      document.getElementById("conteudo-pesquisa").style.top = "220px";
    }
  } else {
    document.getElementById("caixa-pesquisa").style.position = "relative";
    document.getElementById("caixa-pesquisa").style.top = "0px";
    document.getElementById("conteudo-pesquisa").style.position = "absolute";
    document.getElementById("conteudo-pesquisa").style.top = "100px";
  }
}

function conteudoPesquisa(acao) {
  if(acao == "carregar") {
    document.getElementById("conteudo-pesquisa").style.display = "block";

  } else if (acao == "fechar") {
    document.getElementById("conteudo-pesquisa").style.display = "none";
  }
}

function carregarRepositorio() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("listar-aplicacoes").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "processos/carregar-repositorio.php", true);
  xhttp.send();
}

function minhasAplicacoes() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("listar-aplicacoes").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "processos/minhas-aplicacoes.php", true);
  xhttp.send();
}
</script>
</head>
<body onresize="restaurarTela()" onload="minhasAplicacoes()" contextmenu="menu-desenvolvedor">

<menu type="context" id="menu-desenvolvedor">
  <menuitem label="Modo desenvolvedor" onclick="$('#habilitar-modo').fadeIn('slow');" icon="ico_reload.png"></menuitem>
</menu>

<div id="pagina">
  <div id="caixa-pesquisa">
    <div id="barra-pesquisa">
      <button id="botao-pesquisa" onclick="conteudoPesquisa('carregar')"><i class="fa fa-search" id="icone-pesquisar"></i></button>
      <input id="entrada-pesquisa" placeholder="Digite o nome do arquivo para pesquisá-lo..."></input>
    </div>
  </div>
  <div id="caixa-publicitarios">
    

<!-- Afiliados Hostinger -->
    <a href="http://br.hostg.co/9152" target="_blank" id="hostinger-desktop">
      <img style="border:0px" src="https://www.hostinger.com/banners/affiliate-banners/id/300x250-2.jpg" width="300" height="250" alt="Hospede o seu site e pode contar com o nosso suporte"></img>
    </a>

<?php include "includes/adsense.inc"; ?>

  </div>
  <div id="caixa-conteudo">
    <div style="width:100%;border-bottom:3px solid #4a4;padding-left:15px;">
<!--      <span style="float:right;color:#333;margin:5px;font-size:24px;"><i class="fa fa-shopping-basket"></i></span>-->
      <h3>Aplicações Web</h3>
    </div>
    <div style="text-align:center;padding:20px 0px;">
      <button onclick="carregarRepositorio()" style="width:45%;margin:0px;border:none;padding:20px;cursor:pointer;">Todas</button>
      <button onclick="minhasAplicacoes()" style="width:45%;margin:0px;border:none;padding:20px;cursor:pointer;">Minhas</button>
    </div>
    <div id="listar-aplicacoes" style="padding:20px;">

    </div>
  </div>
  <span id="barra-externa-menu">
    <a id="abrir-menu" style="cursor:pointer">MENU</a>
  </span>
</div>

<?php include "includes/menu-usuario-AOpj-2.0.inc"; ?>

<div id="habilitar-modo" style="position:fixed;left:0px;top:0px;width:100%;height:100%;background:#ffffffaa;display:none;">
  <div style="width:400px;margin:auto;margin-top:15%;background:#fff;box-shadow:2px 2px 4px #aaa;padding:30px;">
    <button onclick="$('#habilitar-modo').fadeOut('slow');" style="font-size:20px;color:#333;float:right;margin:-15px;"><i class="fa fa-close"></i></button>
    <br>
    <input type="text" id="desenvolvedor" style="border:none;border-bottom:1px solid #333;width:300px;" placeholder="Acesso restrito"></input>
    <button onclick="autorizarModoDesenvolvedor()" style="font-size:24px;color:#333;"><i class="fa fa-unlock-alt"></i></button>
  </div>
</div>

<div id="gerenciar-aplicacoes" style="position:fixed;left:0px;top:0px;width:100%;height:100%;background:#ffffffaa;display:none;">

</div>

<script>
function autorizarModoDesenvolvedor() {
  var dados = document.getElementById("desenvolvedor").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if(this.responseText != 0) {
/*
        $('#habilitar-modo').slideUp('fast');
        $('#gerenciar-aplicacoes').slideDown('slow');
        document.getElementById("gerenciar-aplicacoes").innerHTML = this.responseText;
*/
      }
alert(this.responseText);
    }
  };
  xhttp.open("POST", "../processos/habilitar-modo-desenvolvedor.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("dados="+dados);
}
</script>
</body>
</html> 

