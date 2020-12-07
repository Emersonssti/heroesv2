<?
$sql_comunidade= $db_heroes->prepare("SELECT TITULO, TEXTO, LINK_FOTO FROM comunidade WHERE ID_POST = '" . addslashes($_GET["id_comunidade"]) . "' ");
$sql_comunidade->execute();
$row_comunidade= $sql_comunidade->fetch(PDO::FETCH_NUM);

if(!$row_comunidade){
  $titulo = "";
  $texto = "";
  $link_foto = "";
  $id_comunidade= "";
}else{
  $titulo = $row_comunidade[0];
  $texto = $row_comunidade[1];
  $link_foto = $row_comunidade[2];

  $id_comunidade= $_GET["id_comunidade"];
}

?>