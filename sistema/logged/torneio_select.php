<?

$sql_torneio = $db_heroes->prepare("SELECT NOME, TH, INICIO_INSCRICAO, FINAL_INSCRICAO, INICIO_CLASSIFICATORIA, INICIO_FASE_GRUPO, INICIO_SEMIFINAL, DATA_FINAL, ID_STATUS, DESCRICAO, URL_IMG, PRIMEIRO, SEGUNDO, TERCEIRO, URL_IMG_PRIMEIRO, URL_IMG_SEGUNDO, URL_IMG_TERCEIRO, REGRAS, CALENDARIO, PREMIOS FROM torneio WHERE ID_TORNEIO = '" . addslashes($_GET["id_torneio"]) . "' ");
$sql_torneio->execute();
$row_torneio = $sql_torneio->fetch(PDO::FETCH_NUM);

if(!$row_torneio){
  $nome = "";
  $th = "";
  $inicio_inscricao = "";
  $final_inscricao = "";
  $classificatoria = "";
  $fase_grupo = "";
  $semifinal = "";
  $final = "";
  $status_ = "";
  $id_torneio = "";
  $descricao = "";
  $url_img = "";
  $url_img_1 = "";
  $url_img_2 = "";
  $url_img_3 = "";
  $regras = "";
  $calendario = "";
  $premios = "";
}else{
  $nome = $row_torneio[0];
  $th = $row_torneio[1];
  $inicio_inscricao = $row_torneio[2];
  $final_inscricao = $row_torneio[3];
  $classificatoria = $row_torneio[4];
  $fase_grupo = $row_torneio[5];
  $semifinal = $row_torneio[6];
  $final = $row_torneio[7];
  $status_ = $row_torneio[8];
  $descricao = $row_torneio[9];
  $url_img = $row_torneio[10];
  $url_img_1 = $row_torneio[14];
  $url_img_2 = $row_torneio[15];
  $url_img_3 = $row_torneio[16];
  $regras = $row_torneio[17];
  $calendario = $row_torneio[18];
  $premios = $row_torneio[19];

  $id_torneio = $_GET["id_torneio"];


// $sql_primeiro= $db_heroes->prepare("SELECT 
// ID_INSCRICAO,
// ID_VILA, 
// jogador.NOME,
// vila.NOME_VILA
// FROM inscricao
// INNER JOIN vila ON vila.ID_VILA = torneio_inscricoes.ID_VILA
// WHERE torneio_inscricoes.ID_TORNEIO = '".$id_torneio."' AND torneio_inscricoes.ID_JOGADOR = '".$row_torneio[11]."' ");
// $sql_primeiro->execute();
// $row_primeiro = $sql_primeiro->fetch(PDO::FETCH_NUM);

// $sql_segundo= $db_heroes->prepare("SELECT 
// torneio_inscricoes.ID_JOGADOR,
// torneio_inscricoes.ID_VILA, 
// jogador.NOME,
// vila.NOME_VILA
// FROM torneio_inscricoes 
// INNER JOIN jogador ON jogador.ID_JOGADOR = torneio_inscricoes.ID_JOGADOR
// INNER JOIN vila ON vila.ID_VILA = torneio_inscricoes.ID_VILA
// WHERE torneio_inscricoes.ID_TORNEIO = '".$id_torneio."' AND torneio_inscricoes.ID_JOGADOR = '".$row_torneio[12]."' ");
// $sql_segundo->execute();
// $row_segundo = $sql_segundo->fetch(PDO::FETCH_NUM);

// $sql_terceiro= $db_heroes->prepare("SELECT 
// torneio_inscricoes.ID_JOGADOR,
// torneio_inscricoes.ID_VILA, 
// jogador.NOME,
// vila.NOME_VILA
// FROM torneio_inscricoes 
// INNER JOIN jogador ON jogador.ID_JOGADOR = torneio_inscricoes.ID_JOGADOR
// INNER JOIN vila ON vila.ID_VILA = torneio_inscricoes.ID_VILA
// WHERE torneio_inscricoes.ID_TORNEIO = '".$id_torneio."' AND torneio_inscricoes.ID_JOGADOR = '".$row_torneio[13]."' ");
// $sql_terceiro->execute();
// $row_terceiro = $sql_terceiro->fetch(PDO::FETCH_NUM);




// $primeiro = '<option value = "'.$row_torneio[11].'">'.$row_primeiro[2].' - '.$row_primeiro[3].'</option>';
// $segundo = '<option value = "'.$row_torneio[12].'">'.$row_segundo[2].' - '.$row_segundo[3].'</option>';
// $terceiro = '<option value = "'.$row_torneio[13].'">'.$row_terceiro[2].' - '.$row_terceiro[3].'</option>';


}

// $fabricante = '<option value="' . $rowfabricante[0] . '">' . utf8_encode($rowfabricante[1]) . '</option>';
?>