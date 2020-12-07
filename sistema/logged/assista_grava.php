<? include "db_/db.php"; 

$titulo = $_GET["titulo"];
$canal = $_GET["canal"];
$id_assista = $_GET["id_assista"];
$url = $_GET["url"];

if($id_assista == ""){
    $insert_noticia = $db_heroes->query("INSERT INTO assista (TITULO, CANAL, LINK, USER) VALUES ('" .$titulo. "','" .$canal. "','" .$url. "','" .$id_user. "')");

    if(!$insert_noticia){
        echo 0;
    }
    else{
        echo 1;
    }

}else{
   $update_noticia = $db_heroes->query("UPDATE assista SET TITULO = ('".$titulo."'), CANAL = ('".$canal."'), LINK = ('".$url."'), USER = ('".$id_user."')  WHERE ID_ASSISTA = ('".$id_assista."')");

    if(!$update_noticia){
        echo 0;
    }
    else{
        echo 2;
    }
}



?>
