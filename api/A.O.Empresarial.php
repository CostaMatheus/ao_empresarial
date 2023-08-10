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
  $seguranca = rand(000000000,999999999);
  $_SESSION['seguranca'] = $seguranca;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Ambiente Online Empresarial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="estilos/menu-usuario-AOpj-2.0.css">
  <link rel="stylesheet" href="estilos/rodape-usuario-AOpj-2.0.css">
  <style>
  #conteudo-pesquisa {
  position:absolute;
  top:220px;
  left:0px;
  right:0px;
  bottom:0px;
  overflow:auto;
  background:#666666aa;
  display:none;
  }
  #mural {
  height:400px;
  padding:20px;
  overflow:auto;
  }
  .lembretes {
  float:left;
  background:#f7df00;
  color:#333;
  font-family: 'Pacifico', cursive;
  padding:10px;
  width:150px;
  height:150px;
  margin:5px;
  box-shadow:2px 2px 8px #333;
  }
  .comandos {
  width:100%;
  text-align:center;
  font-size:20px;
  }
  .comando-lembrete {
  background:none;
  border:none;
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

  /*Rodape do Ambiente Online*/
  </style>
  <script>
    var ambiente = "<?= $ambiente ?>";
    var usuario = "<?= $usuario ?>";
    var email = "<?= $email ?>";
    var credencial = "<?= $credencial ?>";
    var privilegio = "<?= $privilegio ?>";

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
  </script>
  
  <script src="scripts/terminal-AOpj-2.0.js"></script>
</head>
<body onresize="restaurarTela()" onload="carregarLembretes()">
  
  <div id="pagina">
    <div id="caixa-pesquisa">

    </div>

    <!-- Caixa Puplicitaios -->  
    <div id="caixa-publicitarios">

      <!-- Afiliados Hostinger -->
      <a href="http://br.hostg.co/9152" target="_blank" id="hostinger-desktop">
        <img style="border:0px" src="https://www.hostinger.com/banners/affiliate-banners/id/300x250-2.jpg" width="300" height="250" alt="Hospede o seu site e pode contar com o nosso suporte">
      </a>

      <?php include "includes/adsense.inc"; ?>
    </div>
    <!-- Fim Caixa Puplicitaios --> 

    <div id="caixa-conteudo">
      <div id="mural">
        <i class="fa fa-spinner fa-spin" style="font-size:38px;text-align:center;"></i>
      </div>

      <div style="width:100%;border-bottom:3px solid #4a4;padding-left:15px;">
        <!--<span style="float:right;color:#333;margin:5px;font-size:24px;"><i class="fa fa-shopping-basket"></i></span>-->
        <h3>Aplicações Web</h3>
      </div>

      <?php
        if($ambiente == 2) {
          echo "
          <div id='caixa-aplicacoes' style='width:100%;overflow:auto;display:flex;justify-content:center;margin-top:30px;'>
          <div style='width:140px;height:140px;border:1px solid #ddd;box-shadow:2px 2px 2px #666;text-align:center;margin:10px;'>
          <img src='../imagens/consulta+.png' style='width:60%;margin:15px;'></img>
          <a href='http://localhost/costeau/consulta-mais/direcionar-acesso.php?ambiente=$ambiente&credencial=$credencial&seguranca=$seguranca' target='_blank'>Consulta+</a>
          </div>
          </div>
          ";
        } elseif ($ambiente == 1) {
          echo "
          <div style='width:200px;height:200px;border:1px solid #ddd;box-shadow:2px 2px 2px #666;text-align:center;'>
          <img src='../imagens/consulta+.png' style='width:60%;margin:15px;'></img>
          <a href='http://localhost/costeau/ambiente-online/processos/solicitar-acesso-csltm.php' target='_blank'>Consulta+</a>
          </div>
          ";
        }
      ?>
    </div>

    <?php include "includes/rodape-usuario-AOpj-2.0.inc"; ?>

    <span id="barra-externa-menu">
      <a id="abrir-menu" style="cursor:pointer">MENU</a>
    </span>

  </div>

  <?php include "includes/menu-usuario-AOpj-2.0.inc"; ?>

  <div id="dialogo-lembretes" style="display:none;position:fixed;left:0px;top:0px;right:0px;bottom:0px;background:#33333399;overflow:auto;">
    <button style="background:none;border:none;color:#fff;font-size:24px;float:right;margin:10px;" onclick="document.getElementById('dialogo-lembretes').style.display='none';">
      <i class="fa fa-close"></i>
    </button>
    <div id="conteudo-lembrete" style="width:100%;margin-top:10%;margin-bottom:10%;background:#fff;text-align:center;padding:20px;">
      <textarea style="width:100%;" id="texto-lembrete" placeholder="Digite o seu texto aqui!"></textarea>
      <hr>
      <button style="border-radius:50%;background:#f80;color:#fff;border:none;width:60px;height:60px;font-size:24px;" onclick="novoLembrete('fixar')"><i class="fa fa-thumb-tack"></i></button>
    </div>
  </div>
  
  <script>
  var aopj = "<?= $ambiente; ?>";
  function novoLembrete(passo) {
    if(passo == 1) {
      document.getElementById("dialogo-lembretes").style.display="block";
      document.getElementById("conteudo-lembrete").innerHTML = '<textarea style="width:100%;" id="texto-lembrete" placeholder="Digite o seu texto aqui!"></textarea><hr><button style="border-radius:50%;background:#f80;color:#fff;border:none;width:60px;height:60px;font-size:24px;" onclick="novoLembrete(2)"><i class="fa fa-thumb-tack"></i></button>';
    } else if (passo == 2) {
      var lembrete = document.getElementById('texto-lembrete').value;  
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          if(this.responseText == 1) {
            document.getElementById("dialogo-lembretes").style.display='none';
            carregarLembretes();
          } else if (this.responseText == 0) {
            alert("Erro no registro dos dados");
          } else {
            alert("Erro na requisição da página");
          }
        }
      };
      xhttp.open("POST", "processos/registrar-lembrete.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("ambiente="+aopj+"&lembrete="+lembrete);
    }
  }

  function carregarLembretes() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("mural").innerHTML= this.responseText;
      }
    };
    xhttp.open("POST", "processos/carregar-lembretes.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("ambiente="+aopj);
  }

  function checarLembrete(ref,val) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        carregarLembretes();
      }
    };
    xhttp.open("POST", "processos/checar-lembrete.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("ambiente="+aopj+"&lembrete="+ref+"&validade="+val);
  }

  function carregarLembrete(ref) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("conteudo-lembrete").innerHTML= this.responseText;
        document.getElementById("dialogo-lembretes").style.display="block";
      }
    };
    xhttp.open("POST", "processos/carregar-lembrete.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("ambiente="+aopj+"&lembrete="+ref);
  }

  function excluirLembrete(ref) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        carregarLembretes();
      }
    };
    xhttp.open("POST", "processos/excluir-lembrete.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("ambiente="+aopj+"&lembrete="+ref);
  }
  </script>
</body>
</html> 

