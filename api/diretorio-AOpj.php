<?php
session_start();
if(!isset($_SESSION['privilegio']) || !isset($_SESSION['AO_Empresarial']) || !isset($_SESSION['usuario']) || !isset($_SESSION['email']) || !isset($_SESSION['credencial'])) {
  header("location: http://localhost/costeau/");
session_destroy();
} else {
  $privilegio = $_SESSION['privilegio'];
  $ambiente = $_SESSION['AO_Empresarial'];
  $usuario = $_SESSION['usuario'];
  $grupo = $_SESSION['grupo'];
  $email = $_SESSION['email'];
  $credencial = $_SESSION['credencial'];
  $seguranca = rand(000000000,999999999);
  $_SESSION['seguranca'] = $seguranca;
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
<link href="https://fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="estilos/menu-usuario-AOpj-2.0.css">
<style>
button, a {
  cursor:pointer;
}
#conteudo-pesquisa {
display:none;
}
#gerenciador {
height:200px;
padding:20px;
overflow:auto;
}
.arquivo {
position:relative;
width:150px;
height:150px;
border:1px solid #ddd;
box-shadow:2px 2px 2px #888;
border-radius:5px;
margin:5px;
float:left;
}
.funcoes-app {
display:none;
position:absolute;
left:0px;
bottom:0px;
right:0px;
height:35px;
background:#fff;
text-align:center;
border-radius:0px 0px 5px 5px;
border-top:1px solid #ddd;
box-shadow:0px -2px 2px #888;
}
.arquivo:hover .funcoes-app {
display:block;
}
.funcao-app {
background:none;
border:none;
width:17%;
color:#333;
font-size:20px;
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
    border-radius:50px;
    width:100%;
    border:1px solid #666;
  }

  #nomear-nova-pasta {
    padding-left:15px;
    height:40px;
    border:none;
    width:100%;
    border-bottom:1px solid #666;
  }

.funcoes-diretorio {
background:none;
border:none;
font-size:24px;
}

.fa-plus-circle {
font-size:15px
}

  #caixa-publicitarios {
    float:right;
    width:300px;
  }

  #caixa-conteudo {
    padding:20px;
    padding-right:320px;
  }

#grafico-disco {
border-radius:50%;
border:50px solid #ddd;
width:140px;
height:140px;
-ms-transform:rotate(-45deg);
-webkit-transform:rotate(-45eg);
transform:rotate(-45deg);
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
    height:40px;
    border-radius:50px;
    width:80%;
    border:1px solid #666;
  }

  #nomear-nova-pasta {
    padding-left:15px;
    height:40px;
    border:none;
    width:80%;
    border-bottom:1px solid #666;
  }

.funcoes-diretorio {
background:none;
border:none;
font-size:24px;
}

.fa-plus-circle {
font-size:15px;
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

#grafico-disco {
border-radius:50%;
border:50px solid #ddd;
width:140px;
height:140px;
-ms-transform:rotate(-45deg);
-webkit-transform:rotate(-45eg);
transform:rotate(-45deg);
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
  }

  #barra-pesquisa {
    width:80%;
    height:40px;
  }

  #entrada-pesquisa {
    margin:15px;
    padding-left:15px;
    height:40px;
    border-radius:50px 0px 0px 50px;
    width:80%;
    border:1px solid #666;
  }

  #nomear-nova-pasta {
    padding-left:15px;
    height:40px;
    border:none;
    width:80%;
    border-bottom:1px solid #666;
  }

.funcoes-diretorio {
background:none;
border:none;
font-size:24px;
}

#cx-botoes {
width:45px;
padding-top:0px;
margin-top:0px;
}

.fa-plus-circle {
font-size:12px
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

#grafico-disco {
border-radius:50%;
border:50px solid #ddd;
width:100px;
height:100px;
-ms-transform:rotate(-45deg);
-webkit-transform:rotate(-45eg);
transform:rotate(-45deg);
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

/*Rodape do Ambiente Online*/
@media screen and (min-width: 1367px){
    footer {
        float:left;
        width:100%;
        justify-content: center;
        border-top:2px solid #888;
        margin-top:50px;
        box-shadow:0px -2px 8px #666;
    }
#rodape {
display:flex;
justify-content:center;
}
.coluna-rodape {
margin:30px;
}
#barra-costeau {
height:180px;
}
#nota-costeau {
float:left;
}
#link-ambiente {
float:right;
text-align:right;
}
}

@media screen and (min-width: 1024px) and (max-width: 1366px) {
    footer {
        float:left;
        width:100%;
        justify-content: center;
        border-top:2px solid #888;
        margin-top:50px;
        box-shadow:0px -2px 8px #666;
    }
#rodape {
display:flex;
justify-content:center;
}
.coluna-rodape {
margin:30px;
}
#barra-costeau {
height:65px;
}
#nota-costeau {
float:left;
}
#link-ambiente {
float:right;
text-align:right;
}
}

@media screen and (min-width: 800px) and (max-width: 1023px){
    footer {
        float:left;
        width:100%;
        justify-content: center;
        overflow:auto;
        border-top:2px solid #888;
        margin-top:50px;
        box-shadow:0px -2px 8px #666;
    }
#rodape {
display:flex;
justify-content:center;
}
.coluna-rodape {
margin:30px;
}
#barra-costeau {
height:65px;
}
#nota-costeau {
float:left;
}
#link-ambiente {
float:right;
text-align:right;
}
}

@media screen and (min-width: 512px) and (max-width: 799px){
    footer {
        float:left;
        width:100%;
        border-top:2px solid #888;
        margin-top:50px;
        box-shadow:0px -2px 8px #666;
    }
#rodape {
padding:50px;
}
.coluna-rodape {
width:350px;
margin:auto;
margin-bottom:50px;
text-align:center;
}
#nota-costeau {
width:100%;
}
#link-ambiente {
width:100%;
text-align:right;
}
}

@media screen and (max-width: 511px){
    footer {
        float:left;
        width:100%;
        border-top:2px solid #888;
        margin-top:50px;
        box-shadow:0px -2px 8px #666;
    }
#rodape {
padding:50px;
}
.coluna-rodape {
width:100%;
margin-bottom:50px;
text-align:center;
}
#nota-costeau {
width:100%;
}
#link-ambiente {
width:100%;
text-align:right;
}
}
</style>
<script>
var ambiente = "<?= $ambiente; ?>";
var usuario = "<?= $usuario; ?>";
var email = "<?= $email; ?>";
var credencial = "<?= $credencial; ?>";
var privilegio = "<?= $privilegio; ?>";

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

function relatorioDiretorio() {
  
}

function menuFlutuante(event,ref) {
  var x = event.clientX;
  var y = event.clientY;
  var tela = screen.availHeight;
  var comandos = document.getElementById('comandos');
  return false;
}

function criarPasta(vlr,event) {
  if(!vlr || !event) {
    var local = document.getElementById("localizacao-diretorio").value;
    document.getElementById("entrada-pesquisa").setAttribute("type", "hidden");
    document.getElementById("nomear-nova-pasta").setAttribute("type", "text");
    document.getElementById("voltar-pesquisa").style.display = "block";
  } else if (vlr == "") {
    alert("Precisa digitar um nome para a pasta");
  } else {
    if(event.code == "Enter" || event.code == "NumpadEnter") {
      var local = document.getElementById("localizacao-diretorio").value;
      var diretorio_raiz = document.getElementById("diretorio-raiz").innerHTML;
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          if(this.responseText != 0) {
            document.getElementById("localizacao-diretorio").value = this.responseText;
            var caminho = document.getElementById("caminho-diretorio").innerHTML;
            if(caminho == "") {
              var posicao = 1;
            } else {
              var pastas = caminho.split(" / ");
              var posicao = pastas.length;
            }
            nome = vlr.substring(0,15);
            nome = nome+"...";
            document.getElementById("caminho-diretorio").innerHTML = caminho+" / <a onclick='abrirPasta("+this.responseText+","+posicao+")'>"+nome+"</a>";
            document.getElementById("arquivos").innerHTML = "<a onclick='enviarArquivo()'><h1 style='font-size:100px;margin-top:80px;color:#66f;text-align:center;'><i class='fa fa-cloud-upload'></i></h1></a><h3 style='margin-bottom:80px;text-align:center;'>Armazene os seus arquivos em um só lugar...</h3>";
            document.getElementById('entrada-pesquisa').setAttribute('type','text');
            document.getElementById('nomear-nova-pasta').setAttribute('type', 'hidden');
            document.getElementById('voltar-pesquisa').style.display = 'none';
            document.getElementById('nomear-nova-pasta').value='';
          }
        }
      };
      xhttp.open("POST", "processos/criar-pasta.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("diretorio="+diretorio_raiz+"&local="+local+"&nome="+vlr);
    }
  }
}

function abrirPasta(pasta,posicao) {
  document.getElementById("localizacao-diretorio").value = pasta;
  var diretorio_raiz = document.getElementById("diretorio-raiz").innerHTML;
  if(pasta == "raiz") {
    document.getElementById("caminho-diretorio").innerHTML = "";
  } else {
    var caminho = document.getElementById("caminho-diretorio").innerHTML;
    if(!posicao) {
      if(caminho == "") {
        var posicao = 1;
      } else {
        var pastas = caminho.split(" / ");
        var posicao = pastas.length;
      }
      var id = "pasta"+pasta;
      var atual = document.getElementById(id).innerHTML;
      document.getElementById("caminho-diretorio").innerHTML = caminho+" / <a onclick='abrirPasta("+pasta+","+posicao+")'>"+document.getElementById(id).innerHTML+"</a>";
    } else {
      var pastas = caminho.split(" / ");
      var caminho = "";
      for(i=1;i<=posicao;i++) {
        caminho = caminho+" / "+pastas[i];
      }
      document.getElementById("caminho-diretorio").innerHTML = caminho;
    }
  }
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("arquivos").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "processos/abrir-pasta.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("diretorio="+diretorio_raiz+"&pasta="+pasta);
}

function excluirPasta(ref) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if(this.responseText == 1) {
        document.getElementById("excluir"+ref).style.display = "none";
      } else {

      }
    }
  };
  xhttp.open("GET", "processos/excluir-pasta.php?pasta="+ref, true);
  xhttp.send();
}

function enviarArquivo(vlr) {
  if(!vlr) {
    var local = document.getElementById("localizacao-diretorio").value;
    document.getElementById("entrada-pesquisa").setAttribute("type", "hidden");
    document.getElementById("formulario-upload").style.display="block";
    document.getElementById("voltar-pesquisa").style.display = "block";
    
  } else if (parseInt(vlr) == 0) {
    document.getElementById("iframe-upload").style.display = "none";
    document.getElementById("iframe-upload").innerHTML = "";
    document.getElementById("arquivo-upload").value = "";
  } else {
    var arquivo = parseInt(document.getElementById("arquivo-upload").files[0].size);
    var capacidade = parseInt(document.getElementById("capacidade-disco").innerHTML);
    var uso = parseInt(document.getElementById("uso-disco").innerHTML);
    uso += arquivo;
    if (uso >= capacidade) {
      alert("A sua capacidade de armazenamento está preenchida, Apague alguns arquivos ou entre em contato para obter mais espaço de armazenamento");
    } else {
      document.getElementById("uso-disco").innerHTML = uso;
      document.getElementById("diretorio-upload").value = document.getElementById("diretorio-raiz").innerHTML;
      document.getElementById("local-upload").value = document.getElementById("localizacao-diretorio").value;
      document.getElementById("formulario-upload").submit();
      document.getElementById("iframe-upload").style.display = "block";
    }
  }
}
</script>
  <script src="scripts/terminal-AOpj-2.0.js"></script>
</head>
<body onresize="restaurarTela()" onload="relatorioDiretorio()">
<div id="pagina">
  <div id="caixa-pesquisa" style="z-index:3;">
    <span id="cx-botoes" style="float:right;">
      <button class="funcoes-diretorio" onclick="enviarArquivo()"><i class="fa fa-upload"></i></button>
      <button class="funcoes-diretorio" id="criar-diretorio" style="position:relative;" onclick="criarPasta()"><i class="fa fa-folder-o"></i><i class="fa fa-plus-circle" style="position:absolute;top:0px;right:0px;"></i></button>
    </span>
    <div id="barra-pesquisa">
      <input id="entrada-pesquisa" placeholder="Digite o nome do arquivo para pesquisá-lo..."></input>
      <button id="voltar-pesquisa" style="float:right;background:none;border:none;display:none;" onclick="document.getElementById('entrada-pesquisa').setAttribute('type','text');document.getElementById('nomear-nova-pasta').setAttribute('type', 'hidden');document.getElementById('voltar-pesquisa').style.display = 'none';document.getElementById('nomear-nova-pasta').value='';document.getElementById('formulario-upload').style.display='none';"><i class="fa fa-remove"></i></button>
      <input id="nomear-nova-pasta" type="hidden" placeholder="Digite um nome para a nova pasta..." onkeyup="criarPasta(this.value,event)"></input>
      <form method="post" id="formulario-upload" action="processos/receber-arquivo.php" enctype="multipart/form-data" target="iframe_upload" style="display:none;">
        <input type="hidden" name="diretorio" id="diretorio-upload" value=""></input>
        <input type="hidden" name="local" id="local-upload" value=""></input>
        <input id="arquivo-upload" name="arquivo_upload" type="file" placeholder="Selecione um arquivo" onchange="enviarArquivo(this.value);"></input>
        <iframe name="iframe_upload" id="iframe-upload" style="width:100%;height:100px;background:#fff;border:none;border-bottom:1px solid #666;display:none;"></iframe>
      </form>
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
    <div id="gerenciador">
      <table style="width:100%;">
        <tr>
          <td style="width:50%;">

<div id="grafico-disco" style="border-left:50px solid #f80;margin:auto;"></div>

          </td>
          <td style="width:50%;">
<?php
include "portas/conexao-MySQLi.php";

$sql = "SELECT diretorio, armazenamento FROM diretorio_raiz WHERE ambiente = '$ambiente' AND situacao = 'Ativado'";
$res = $con->query($sql);
if ($res->num_rows > 0) {
  $row = $res->fetch_assoc();
  $diretorio = $row['diretorio'];
  echo "Diretório de armazenamento: <font id='diretorio-raiz'>".$diretorio."</font>
     <hr>
     Capacidade: <font id='capacidade-disco'>".$row['armazenamento']."</font> Bytes";
} else {
    echo "Capacidade: <font id='capacidade-disco'>0</font>";
}
echo "<br>";
$mysql = "SELECT tamanho, registro FROM pastas WHERE diretorio = '$diretorio' AND (situacao = 'ativado' OR situacao = 'lixeira') UNION SELECT tamanho, registro FROM arquivos WHERE diretorio = '$diretorio' AND (situacao = 'ativado' OR situacao = 'lixeira')";
$result = $con->query($mysql);
$uso = 0;
if($result->num_rows > 0) {
  while($info = $result->fetch_assoc()) {
    $uso += $info['tamanho'];
  }
  echo "Uso: <font id='uso-disco'>".$uso."</font> Bytes";
} else {
  echo "Uso: <font id='uso-disco'>0</font>";
}
?>
          </td>
        </tr>
      </table>
    </div>
    <div style="width:100%;padding:40px 10px;"><i class="fa fa-hdd-o" style="font-size:20px;color:#666;cursor:pointer;" onclick="abrirPasta('raiz')"></i><span id="caminho-diretorio"></span></div>
    <input type="hidden" id="localizacao-diretorio" value="raiz"></input>
    <div id="arquivos">
<?php
$mysqlpastas = "SELECT pasta, nome, LEFT(nome, 15) as abrev, icone FROM pastas WHERE diretorio = '$diretorio' AND local = 'raiz' AND situacao = 'ativado'";
$mysqlarquivos = "SELECT arquivo, nome, LEFT(nome, 15) as abrev, icone, backup FROM arquivos WHERE diretorio = '$diretorio' AND local = 'raiz' AND situacao = 'ativado'";
$respastas = $con->query($mysqlpastas);
$resarquivos = $con->query($mysqlarquivos);

$i = 0;
if($respastas->num_rows > 0 or $resarquivos->num_rows > 0) {
  if($respastas->num_rows > 0) {
    while($info = $respastas->fetch_assoc()) {
      $excluir = "document.getElementsByClassName('excluir-arquivo')[".$i."].style.display='block';";
      $cancelar = "document.getElementsByClassName('excluir-arquivo')[".$i."].style.display='none';";
      echo '
      <div class="arquivo" id="excluir'.$info['pasta'].'" onselectstart="return false" oncontextmenu="return menuFlutuante(event,'.$i.')" title="'.$info['nome'].'" style="text-align:center;">
        <a onclick="abrirPasta('.$info['pasta'].')"><i class="'.$info['icone'].'" class="icone-arquivo" style="font-size:70px;margin:5px;color:#e82;cursor:pointer;"></i></a><br>
        <font style="font-size:13px;" id="pasta'.$info['pasta'].'">'.$info['abrev'].'...</font>
        <div class="funcoes-app">
          <button class="funcao-app" onclick=""><i class="fa fa-square-o"></i></button>
          <button class="funcao-app" onclick=""><i class="fa fa-edit"></i></button>
          <button class="funcao-app" onclick=""><i class="fa fa-copy"></i></button>
          <button class="funcao-app" onclick=""><i class="fa fa-share-alt"></i></button>
          <button class="funcao-app" onclick="'.$excluir.'"><i class="fa fa-trash"></i></button>
        </div>
        <div class="excluir-arquivo" style="position:absolute;display:none;left:0px;top:0px;right:0px;background:#ffffffee;color:#333;height:80%;">
          <button style="background:none;color:#f00;border:none;font-size:32px;margin-top:20%;" onclick="excluirPasta('.$info['pasta'].');"><i class="fa fa-check"></i></button>
          <button style="background:none;border:none;font-size:32px;margin-top:20%;" onclick="'.$cancelar.'"><i class="fa fa-reply"></i></button>
        </div>
      </div>
      ';
      $i++;
    }
  }
  if($resarquivos->num_rows > 0) {
    $excluir = "document.getElementsByClassName('excluir-arquivo')[".$i."].style.display='block';";
    $cancelar = "document.getElementsByClassName('excluir-arquivo')[".$i."].style.display='none';";
    while($info = $resarquivos->fetch_assoc()) {
      echo '
      <div class="arquivo" onselectstart="return false" oncontextmenu="return menuFlutuante(event,'.$i.')" title="'.$info['nome'].'" style="text-align:center;">
        <a href="dir/a-'.$diretorio.'/'.$info['backup'].'" target="_blank"><i class="'.$info['icone'].'" class="icone-arquivo" style="font-size:70px;margin:5px;"></i></a><br>
        <font style="font-size:13px;">'.$info['abrev'].'...</font>
        <div class="funcoes-app">
          <button class="funcao-app" onclick=""><i class="fa fa-square-o"></i></button>
          <button class="funcao-app" onclick=""><i class="fa fa-edit"></i></button>
          <button class="funcao-app" onclick=""><i class="fa fa-copy"></i></button>
          <button class="funcao-app" onclick=""><i class="fa fa-share-alt"></i></button>
          <button class="funcao-app" onclick="'.$excluir.'"><i class="fa fa-trash"></i></button>
        </div>
        <div class="excluir-arquivo" style="position:absolute;display:none;left:0px;top:0px;right:0px;background:#ffffffee;color:#333;height:80%;">
          <button style="background:none;color:#f00;border:none;font-size:32px;margin-top:20%;" onclick="excluirArquivo('.$info['arquivo'].');"><i class="fa fa-check"></i></button>
          <button style="background:none;border:none;font-size:32px;margin-top:20%;" onclick="'.$cancelar.'"><i class="fa fa-reply"></i></button>
        </div>
      </div>
      ';
      $i++;
    }
  }
} else {
  echo "<a onclick='enviarArquivo()'><h1 style='font-size:100px;margin-top:80px;color:#66f;text-align:center;'><i class='fa fa-cloud-upload'></i></h1></a><h3 style='margin-bottom:80px;text-align:center;'>Armazene os seus arquivos em um só lugar...</h3>";
}
$con->close();
?>
    </div>
  </div>
<?php include "includes/rodape-usuario-AOpj-2.0.inc"; ?>
  <span id="barra-externa-menu">
    <a id="abrir-menu" style="cursor:pointer">MENU</a>
  </span>
<?php include "includes/menu-usuario-AOpj-2.0.inc"; ?>
</div>
<div id="fundo-dialogo" style="display:none;position:fixed;left:0px;top:0px;right:0px;bottom:0px;overflow:auto;background:#000000dd;z-index:3;">
  <button style="background:none;border:none;color:#fff;font-size:24px;float:right;margin:10px;" onclick="$('#fundo-dialogo').fadeOut('slow');"><i class="fa fa-remove"></i></button>
  <div id="dialogo" style="margin:auto;width:500px;background:#fff;height:200px;margin-top:50px;margin-bottom:50px;">

  </div>
</div>
</body>
</html> 
