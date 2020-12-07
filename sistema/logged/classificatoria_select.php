<?

$sql_torneio = $db_heroes->prepare("SELECT 
classificatoria.NOME, 
classificatoria.DATA_CLASSIFICATORIA,
torneio.ID_TORNEIO,
torneio.ID_STATUS
FROM classificatoria 
INNER JOIN torneio ON torneio.ID_TORNEIO = classificatoria.ID_TORNEIO
WHERE classificatoria.ID_CLASSIFICATORIA = '" . addslashes($_GET["id_classificatoria"]) . "' ");
$sql_torneio->execute();
$row_torneio = $sql_torneio->fetch(PDO::FETCH_NUM);

if(!$row_torneio){
  $nome = "";
  $data = "";
  $torneio_ = "";
  $status_ = "";
}else{
  $id_classificatoria = $_GET["id_classificatoria"];
  $nome = $row_torneio[0];
  $data = $row_torneio[1];
  $torneio_ = $row_torneio[2];
  $status_ = $row_torneio[3];



}

// $fabricante = '<option value="' . $rowfabricante[0] . '">' . utf8_encode($rowfabricante[1]) . '</option>';
?>