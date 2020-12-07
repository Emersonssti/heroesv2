<? include "db_/db.php"; 

$id_assista=  addslashes($_GET["id_assista"]);



$del_assista= $db_heroes->query("DELETE FROM assista WHERE ID_ASSISTA = '".$id_assista."'");

// echo "DELETE FROM noticia WHERE ID_NOTICIA = '".$id_noticia."'";
if (!$del_noticia)
{
    echo 1;
}else
{ 
    echo 0;
};



?>
