function chamarTerminal(acao) {
  if(acao == 1) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if(this.responseText != "false") {
          var credencialTI = this.responseText;
          document.getElementById("corpo-terminal").innerHTML = "<form onsubmit='return chamarTerminal(2)'><fieldset><legend>"+email+"#</legend><span style='width:90%;float:left;'><input style='border:none;border-bottom:1px solid #333;width:100%;height:40px;' id='comando'></input></span><span style='width:10%;float:right;'><button type='submit' style='width:100%;border:none;background:none;font-size:28px;color:#4a4;'><i class='fa fa-arrow-right'></i></button></span></fieldset></form><span style='width:100%;height:200px;padding:10px;' id='resposta-comando'></span>";
        } else {
          document.getElementById("alerta-autenticacao").innerHTML = "Esse usuário não possui autorização para acesso, inicie uma sessão com um usuário que tenha privilégio de técnico suporte nível 1";
        }
      }
    };
    xmlhttp.open("GET", "terminal-AOpj-2.0.php?acao=1&ambiente="+ambiente+"&usuario="+usuario, true);
    xmlhttp.send();
  } else if (acao == 2){
    var comando = document.getElementById("comando").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("resposta-comando").innerHTML = this.responseText;
        document.getElementById("comando").value = "";
      }
    };
    xmlhttp.open("GET", "terminal-AOpj-2.0.php?acao=comando&comando="+comando+"&ambiente="+ambiente+"&usuario="+usuario, true);
    xmlhttp.send();
  } else {

  }
  return false;
}

