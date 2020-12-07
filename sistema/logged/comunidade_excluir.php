<? include "db_/db.php"; 

$id_comunidade =  addslashes($_GET["id"]);



$del_comunidade=  $db_heroes->query("DELETE FROM comunidade WHERE ID_POST = '".$id_comunidade."'");

// echo "DELETE FROM noticia WHERE ID_NOTICIA = '".$id_noticia."'";
if (!$del_comunidade)
{
    echo 1;
}else
{ 
    echo 0;
};



?>
