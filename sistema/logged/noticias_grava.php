<? include "db_/db.php"; 

$titulo = $_GET["titulo"];
$data = $_GET["data"];
$fonte = $_GET["fonte"];
$url_foto = $_GET["url_foto"];
$url_fonte = $_GET["url_fonte"];
$id_noticia = $_GET["id_noticia"];

if($id_noticia == ""){
    $insert_noticia = $db_heroes->query("INSERT INTO noticia (TITULO, NOME_GERADOR, URL_FONTE, URL_IMG, DATA_POSTAGEM, ID_USER) VALUES ('" .$titulo. "','" .$fonte. "','" .$url_fonte. "','" .$url_foto. "','" .$data. "','" .$id_user. "')");

    if(!$insert_noticia){
        echo 0;
    }
    else{
        echo 1;
    }

}else{
   $update_noticia = $db_heroes->query("UPDATE noticia SET TITULO = ('".$titulo."'), NOME_GERADOR = ('".$fonte."'), URL_IMG = ('".$url_foto."'),  URL_FONTE = ('".$url_fonte."'), DATA_POSTAGEM = ('".$data."')  WHERE ID_NOTICIA = ('".$id_noticia."')");

    if(!$update_noticia){
        echo 0;
    }
    else{
        echo 2;
    }
}



?>
