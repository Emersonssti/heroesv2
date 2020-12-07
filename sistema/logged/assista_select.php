<?
$sql_assista= $db_heroes->prepare("SELECT TITULO, CANAL, LINK FROM assista WHERE ID_ASSISTA = '" . addslashes($_GET["id_assista"]) . "' ");
$sql_assista->execute();
$row_assista= $sql_assista->fetch(PDO::FETCH_NUM);

if(!$row_assista){
  $titulo = "";
  $canal = "";
  $url_video = "";

  $id_assista= "";
}else{
  $titulo = $row_assista[0];
  $canal = $row_assista[1];
  $url_video = $row_assista[2];

  $id_assista= $_GET["id_assista"];
}

?>