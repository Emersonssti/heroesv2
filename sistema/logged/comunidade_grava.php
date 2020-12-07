<? include "db_/db.php"; 

$titulo = $_GET["titulo"];
$texto = $_GET["texto"];
$id_comunidade = $_GET["id_comunidade"];
$url = $_GET["url"];

if($id_comunidade == ""){
    $insert_comunidade = $db_heroes->query("INSERT INTO comunidade (TITULO, TEXTO, LINK_FOTO, USER) VALUES ('" .$titulo. "','" .$texto. "','" .$url. "','" .$id_user. "')");

    if(!$insert_comunidade){
        echo 0;
    }
    else{
        echo 1;
    }

}else{
   $update_comunidade= $db_heroes->query("UPDATE comunidade SET TITULO = ('".$titulo."'), TEXTO = ('".$texto."'), LINK_FOTO = ('".$url."')  WHERE ID_POST = ('".$id_comunidade."')");

    if(!$update_comunidade){
        echo 0;
    }
    else{
        echo 2;
    }
}



?>
