<?php
session_start();
//$ambiente = $_SESSION['ambiente'];
//$privilegio = $_SESSION['privilegio'];
if ($_SESSION['usuario'] == "" || $_SESSION['email'] == "") header("location: http://localhost.costeau/ambiente-online.php");
$usuario = $_SESSION['usuario'];
$email = $_SESSION['email'];
//$credencial = $_SESSION['credencial'];
session_destroy();
session_start();
$_SESSION['email'] = $email;
$_SESSION['usuario'] = $usuario;
$_SESSION['pagina'] = "trocar-sessao-2.0.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Trocar grupo empresarial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, html {
  height:100%;
}

#fundo {
  height:100%;
  background-image:url('../img/banner2.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
#adsense {
  position:absolute;
  left:0px;
  top:0px;
  right:0px;
  height:80px;
  margin-bottom:50px;
}

@media screen and (min-width: 1366px) {
  #versao-AO {
    position:fixed;
    bottom:0px;
    right:0px;
    color:#fff;
    padding-right:50px;
    font-size:16px;
  }
  #coluna-esquerda {
    position:absolute;
    top:200px;
    left:10%;
    width:400px;
    height:300px;
    background:#003;
    border-radius:15px;
    padding:20px;
  }
  #grupo {
    width:100%;
    height:40px;
    background:none;
    color:#fff;
    border:2px solid #fff;
    border-radius:5px;
    margin-top:20px;
  }
  #senha {
    width:100%;
    height:40px;
    margin-top:20px;
  }
  .funcao {
    width:50px;
    height:50px;
    background:none;
    color:#fff;
    border:none;
    margin:20px;
    font-size:32px;
  }
  #coluna-direita {
    position:absolute;
    top:250px;
    right:5%;
    width:45%;
    color:#fff;
    text-align:center;
  }
}

@media screen and (min-width: 1024px) and (max-width:1365px) {
  #versao-AO {
    position:fixed;
    bottom:0px;
    right:0px;
    color:#fff;
    padding-right:50px;
    font-size:16px;
  }
  #coluna-esquerda {
    position:absolute;
    top:200px;
    left:5%;
    width:400px;
    height:300px;
    background:#003;
    border-radius:15px;
    padding:20px;
  }
  #grupo {
    width:100%;
    height:40px;
    background:none;
    color:#fff;
    border:2px solid #fff;
    border-radius:5px;
    margin-top:20px;
  }
  #senha {
    width:100%;
    height:40px;
    margin-top:20px;
  }
  .funcao {
    width:50px;
    height:50px;
    background:none;
    color:#fff;
    border:none;
    margin:20px;
    font-size:32px;
  }
  #coluna-direita {
    position:absolute;
    top:250px;
    right:5%;
    width:45%;
    color:#fff;
    text-align:center;
  }
}

@media screen and (min-width: 800px) and (max-width: 1023px) {
  #versao-AO {
    position:fixed;
    bottom:0px;
    right:0px;
    color:#fff;
    padding-right:50px;
    font-size:16px;
  }
  #coluna-esquerda {
    position:absolute;
    top:150px;
    left:25%;
    width:50%;
    height:300px;
    background:#003;
    border-radius:15px;
    padding:20px;
    display:none;
  }
  #grupo {
    width:100%;
    height:40px;
    background:none;
    color:#fff;
    border:2px solid #fff;
    border-radius:5px;
    margin-top:20px;
  }
  #senha {
    width:100%;
    height:40px;
    margin-top:20px;
  }
  .funcao {
    width:50px;
    height:50px;
    background:none;
    color:#fff;
    border:none;
    margin:20px;
    font-size:32px;
  }
  #coluna-direita {
    position:absolute;
    top:150px;
    right:15%;
    width:70%;
    color:#fff;
    text-align:center;
  }
}

@media screen and (min-width: 640px) and (max-width: 799px)  {
  #versao-AO {
    position:fixed;
    bottom:0px;
    right:0px;
    color:#fff;
    padding-right:50px;
    font-size:16px;
  }
  #coluna-esquerda {
    position:absolute;
    top:150px;
    left:15%;
    width:70%;
    height:300px;
    background:#003;
    border-radius:15px;
    padding:20px;
    display:none;
  }
  #grupo {
    width:100%;
    height:40px;
    background:none;
    color:#fff;
    border:2px solid #fff;
    border-radius:5px;
    margin-top:20px;
  }
  #senha {
    width:100%;
    height:40px;
    margin-top:20px;
  }
  .funcao {
    width:50px;
    height:50px;
    background:none;
    color:#fff;
    border:none;
    margin:20px;
    font-size:32px;
  }
  #coluna-direita {
    position:absolute;
    top:150px;
    right:15%;
    width:70%;
    color:#fff;
    text-align:center;
  }
}

@media screen and (max-width: 639px) {
  #versao-AO {
    position:fixed;
    bottom:0px;
    right:0px;
    color:#fff;
    padding-right:50px;
    font-size:16px;
  }
  #coluna-esquerda {
    position:absolute;
    top:150px;
    left:5%;
    width:90%;
    height:300px;
    background:#003;
    border-radius:15px;
    padding:20px;
    display:none;
  }
  #grupo {
    width:100%;
    height:40px;
    background:none;
    color:#fff;
    border:2px solid #fff;
    border-radius:5px;
    margin-top:20px;
  }
  #usuario {
    width:100%;
    height:40px;
    margin-top:20px;
  }
  .funcao {
    width:50px;
    height:50px;
    background:none;
    color:#fff;
    border:none;
    margin:20px;
    font-size:32px;
  }
  #coluna-direita {
    position:absolute;
    top:150px;
    right:5%;
    width:90%;
    color:#fff;
    text-align:center;
  }
}
</style>
<script>
function liberarAcesso() {
//  document.getElementById("painel-acesso-aov2").style.display = "block";
  var grupo = document.getElementById("grupo").value;
  var email = document.getElementById("usr").value;
  var senha = document.getElementById("senha").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var info = this.responseText.split("->");
      if(info[0] == 0) {
        alert(info[1]);
  //      document.getElementById("painel-acesso-aov2").style.display = "none";
      } else if (info[0] == 1){
        window.location.href = info[1];
      }
    }
  };
  xhttp.open("POST", "portas/liberar-acesso.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("grupo="+grupo+"&email="+email+"&senha="+senha);
  return false;
}
</script>
</head>
<body>
<div id="fundo"></div>
<div id="adsense">

</div>
<div id="coluna-esquerda">
  <h4 style="color:#fff;opacity:none;" id="usuario"><?=$email?></h4>
  <hr style="border-color:#fff;">
  <form method="post" action="verificar-acesso-2.0.php" onsubmit="return liberarAcesso()">
    <input type="hidden" name="usuario" id="usr" value="<?=$email?>"></input>
    <select id="grupo" name="grupo">

<?php
include "includes/conexao-A.O.Empresarial-2.0.php";

$sql = "SELECT distinct(ambientes.grupo) FROM ambientes INNER JOIN credenciais ON ambientes.ambiente = credenciais.ambiente WHERE ambientes.situacao = 'Ativado' AND credenciais.situacao = 'Ativado' AND credenciais.usuario = '$usuario'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value='".$row['grupo']."'>".$row['grupo']."</option>";
    }
}
$con->close();

include "includes/conexao-A.O.EAD-2.0.php";

$sql = "SELECT distinct(ambientes.grupo) FROM ambientes INNER JOIN credenciais ON ambientes.ambiente = credenciais.ambiente WHERE ambientes.situacao = 'Ativado' AND credenciais.situacao = 'Ativado' AND credenciais.usuario = '$usuario'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($res = $result->fetch_assoc()) {
        echo "<option value='".$res['grupo']."'>".$res['grupo']."</option>";
    }
}
$con->close();

include "includes/conexao-A.O.Projetos-2.0.php";

$sql = "SELECT distinct(ambientes.grupo) FROM ambientes INNER JOIN credenciais ON ambientes.ambiente = credenciais.ambiente WHERE ambientes.situacao = 'Ativado' AND credenciais.situacao = 'Ativado' AND credenciais.usuario = '$usuario'";
$res = $con->query($sql);

if ($res->num_rows > 0) {
    // output data of each row
    while($info = $res->fetch_assoc()) {
        echo "<option value='".$info['grupo']."'>".$info['grupo']."</option>";
    }
}
$con->close();
?>
    </select>
    <input type="password" id="senha" name="senha" placeholder="Digite sua senha"></input>
    <p style="text-align:center;">
      <button class="funcao" type="submit" style="background:#4a4;opacity:1;border-radius:50%;cursor:pointer;" title="iniciar sessão para o grupo empresarial selecionado."><i class="fa fa-unlock-alt"></i></button>
      <button class="funcao" style="border:1px dotted #fff;border-radius:5px;cursor:pointer;" title="Fechar todas as informações e sessões do sistema, eu já terminei meus serviços."><i class="fa fa-sign-out"></i></button>
    </p>
  </form>
</div>
<div id="coluna-direita">
  <h3>A sessão do grupo empresarial foi fechado, a qualquer momento você pode digitar sua senha para acessar uma nova sessão.</h3>
  <hr style="width:60%;border:2px solid #4a4;">
  <i class="fa fa-keyboard-o" style="font-size:40px;cursor:pointer;" onclick="$('#coluna-direita').fadeOut('slow');$('#coluna-esquerda').fadeIn('slow');"></i>
</div>
<div id="versao-AO">
  <h4>Ambiente Online V 2.0</h4>
</div>
</body>
</html> 
