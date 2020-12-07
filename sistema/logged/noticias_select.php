<?
$sql_noticia = $db_heroes->prepare("SELECT TITULO, DATA_POSTAGEM, NOME_GERADOR, URL_IMG, URL_FONTE FROM noticia WHERE ID_NOTICIA = '" . addslashes($_GET["id_noticia"]) . "' ");
$sql_noticia->execute();
$row_noticia = $sql_noticia->fetch(PDO::FETCH_NUM);

if(!$row_noticia){
  $titulo = "";
  $data_postagem = "";
  $fonte = "";
  $url_img = "";
  $url_fonte = "";

  $id_noticia = "";
}else{
  $titulo = $row_noticia[0];
  $data_postagem = $row_noticia[1];
  $fonte = $row_noticia[2];
  $url_img = $row_noticia[3];
  $url_fonte = $row_noticia[4];

  $id_noticia = $_GET["id_noticia"];
}

?>