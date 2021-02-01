<?

$sql = $db_heroes->prepare("SELECT NOME, TH, ID_TEMPORADA, ID_REGRAS, ID_PREMIACAO, ID_AGENDA, ID_BRACKET, ID_STATUS FROM torneio WHERE ID_TORNEIO = '" . addslashes($_GET["id_torneio"]) . "' ");
$sql->execute();
$row = $sql->fetch(PDO::FETCH_NUM);

if(!$row){
  $nome = "";
  $th = "";
  $id_temporada = "";
  $id_regras = "";
  $id_premiacao = "";
  $id_agenda = "";
  $bracket = "";
  $status_ = "";
  
}else{
  $nome = $row[0];
  $th = $row[1];
  $id_temporada = $row[2];
  $id_regras = $row[3];
  $id_premiacao = $row[4];
  $id_agenda = $row[5];
  $id_bracket = $row[6];
  $status_ = $row[7];

}

?>