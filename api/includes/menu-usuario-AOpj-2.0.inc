<nav id="caixa-menu">
  <div id="barra-interna-menu">
    <a id="fechar-menu" style="cursor:pointer">FECHAR</a>
  </div>
  <ul id="itens-menu">
    <li class="item-menu">
      <a href="A.O.Empresarial.php">
        <i class="fa fa-home icone-menu"></i>
        <p class="titulo-item">Ambiente Online</p>
        <p class="descricao-item"></p>
      </a>
    </li>
    <li class="item-menu">
      <a href="diretorio-AOpj.php">
        <i class="fa fa-archive icone-menu"></i>
        <p class="titulo-item">Diretório</p>
        <p class="descricao-item"></p>
      </a>
    </li>
    <li class="item-menu">
      <a href="aplicacoes-AOpj-2.0.php">
        <i class="fa fa-shopping-basket icone-menu"></i>
        <p class="titulo-item">Aplicações</p>
        <p class="descricao-item"></p>
      </a>
    </li>
<!--
    <li class="item-menu">
      <a href="mensagens-AOpj.php">
        <i class="fa fa-envelope-o icone-menu"></i>
        <p class="titulo-item">Mensagens</p>
        <p class="descricao-item"></p>
      </a>
    </li>
-->
    <li class="item-menu">
      <a href="lixeira-AOpj.php">
        <i class="fa fa-recycle icone-menu"></i>
        <p class="titulo-item">Lixeira</p>
        <p class="descricao-item"></p>
      </a>
    </li>
    <li class="item-menu"></li>
    <li class="item-menu">
      <a data-target="#terminal" data-toggle="modal" style="color:#fff;cursor:pointer;">
        <i class="fa fa-terminal icone-menu"></i>
        <p class="titulo-item">Terminal</p>
        <p class="descricao-item">Terminal de comandos para execução de rotinas.</p>
      </a>
    </li>
    <li class="item-menu">
      <a href="suporte-AOpj.php">
        <i class="fa fa-life-saver icone-menu"></i>
        <p class="titulo-item">Suporte</p>
        <p class="descricao-item"></p>
      </a>
    </li>
    <li class="item-menu" id="sair">
      <span id="fechar">
        <a href="trocar-sessao-2.0.php" id="fechar-sessao">
          <i class="fa fa-lock icone-menu"></i>
          <p class="titulo-item">Fechar sessão</p>
          <p class="descricao-item">Fechar sua sessão para continuar trabalhando mais tarde.</p>
        </a>
        <a href="fechar-tudo-2.0.php" id="fechar-tudo">
          <i class="fa fa-sign-out icone-menu"></i>
          <p class="titulo-item">Fechar tudo</p>
          <p class="descricao-item">Fechar todas as sessões e informações para sair do sistema.</p>
        </a>
      </span>
      <a href="" id="item-sair">
        <i class="fa fa-power-off icone-menu"></i>
        <p class="titulo-item">Fechar</p>
        <p class="descricao-item">Escolha uma opção para fechar o sistema.</p>
      </a>
    </li>
  </ul>
</nav>

<div class="modal fade" id="terminal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style=";border-bottom:5px dashed orangered;color:orangered;">
        <h5 class="modal-title">Area restrita, acesso somente com autorização.</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body" id="corpo-terminal">
<?php
if($privilegio == "TI") {
  echo "<form onsubmit='return chamarTerminal(2)'><fieldset><legend>$email#</legend><span style='width:90%;float:left;'><input style='border:none;border-bottom:1px solid #333;width:100%;height:40px;' id='comando'></input></span><span style='width:10%;float:right;'><button type='submit' style='width:100%;border:none;background:none;font-size:28px;color:#4a4;'><i class='fa fa-arrow-right'></i></button></span></fieldset></form><span style='width:100%;height:200px;padding:10px;' id='resposta-comando'></span>";

} elseif ($privilegio == "ADM") {
  echo '
        <div style="margin:auto;width:90%;height:150px;box-shadow:2px 2px 2px #aaa;padding:20px;">
            <form onsubmit="return chamarTerminal(1)">
              <fieldset>
                <legend>Acesso para suporte técnico</legend>
          <span style="width:90%;float:left;">
                <input id="senha" style="width:100%;height:40px;border:none;border-bottom:1px solid #333;" value="'.$email.'"></input>
          </span>
          <span style="width:10%;float:right;"><button type="submit" style="width:100%;border:none;background:none;font-size:28px;color:#4a4;"><i class="fa fa-arrow-right"></i></button></span>
              </fieldset>
            </form>
            <p id="alerta-autenticacao" style="color:orangered;font-size:12px;"></p>
        </div>
  ';
} else {

}
?>
      </div>
    </div>
  </div>
</div>
