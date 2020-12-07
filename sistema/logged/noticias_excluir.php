<? include "db_/db.php"; 

$id_noticia=  addslashes($_GET["id_noticia"]);



$del_noticia= $db_heroes->query("DELETE FROM noticia WHERE ID_NOTICIA = '".$id_noticia."'");

// echo "DELETE FROM noticia WHERE ID_NOTICIA = '".$id_noticia."'";
if (!$del_noticia)
{
    echo 1;
}else
{ 
    echo 0;
};



?>
