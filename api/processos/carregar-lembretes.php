<?php
include "../portas/conexao-MySQLi.php";

$ambiente = $_POST['ambiente'];

$mysql = "SELECT lembrete, LEFT(texto,45) AS texto, validade, data, horario FROM lembretes WHERE ambiente = '$ambiente' AND situacao = 'ativado'";
$res = $con->query($mysql);

if($res->num_rows > 0) {
echo '
      <div class="lembretes" style="background:none;border:none;box-shadow:none;">
        <button style="font-size:48px;width:70%;height:70%;border-radius:50%;background:none;border:5px solid #aaa;color:#aaa;margin:15%;" onclick="novoLembrete(1);"><i class="fa fa-plus"></i></button>
      </div>
  ';
  while($info = $res->fetch_assoc()) {
    echo "
    <div class='lembretes'>
      <p>".$info['texto']."...</p>
      <div class='comandos'>";
    if($info['validade'] == 0) {
      echo "<button class='comando-lembrete' onclick='checarLembrete(".$info['lembrete'].",1);'><i class='fa fa-square-o'></i></button>";
    } else {
      echo "<button class='comando-lembrete' onclick='checarLembrete(".$info['lembrete'].",0);'><i class='fa fa-check-square-o'></i></button>";
    }
    echo "
        <button class='comando-lembrete' onclick='carregarLembrete(".$info['lembrete'].");'><i class='fa fa-eye'></i></button>
        <button class='comando-lembrete' onclick='excluirLembrete(".$info['lembrete'].");'><i class='fa fa-trash'></i></button>
      </div>
    </div>
    ";
  }
} else {
echo '
      <div class="lembretes" style="background:none;border:none;box-shadow:none;">
        <button style="font-size:48px;width:70%;height:70%;border-radius:50%;background:none;border:5px solid #aaa;color:#aaa;margin:15%;" onclick="novoLembrete(1);"><i class="fa fa-plus"></i></button>
      </div>
  ';
}
$con->close();
?>
