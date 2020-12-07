<? include "db_/db.php"; 

$NOME = strtoupper($_GET["nome"]);
$TH = strtoupper($_GET["th"]);
$INICIO_INSC = $_GET["inicio_insc"];
$FINAL_INSC = $_GET["final_insc"];
$CLASSIFICATORIA = $_GET["classificatoria"];
$FASE_GRUPO = $_GET["fase_grupo"];
$SEMIFINAL = $_GET["semifinal"];
$FINAL = $_GET["final"];
$ID_STATUS = $_GET["status"];
$ID_TORNEIO = $_GET["id_torneio"];
$DESCRICAO = $_GET["descricao"];
$URL_IMG = $_GET["url_img"];
$primeiro = $_GET["primeiro"];
$segundo = $_GET["segundo"];
$terceiro = $_GET["terceiro"];
$url_primeiro = $_GET["url_primeiro"];
$url_segundo = $_GET["url_segundo"];
$url_terceiro= $_GET["url_terceiro"];
$regras= $_GET["regras"];
$calendario= $_GET["calendario"];
$premios= $_GET["premios"];

if($ID_TORNEIO == ""){
    $insert_torneio = $db_heroes->query("INSERT INTO torneio (NOME, TH, INICIO_INSCRICAO, FINAL_INSCRICAO, INICIO_CLASSIFICATORIA, INICIO_FASE_GRUPO, INICIO_SEMIFINAL, DATA_FINAL, ID_STATUS, DESCRICAO, URL_IMG, ID_USER, PRIMEIRO, SEGUNDO, TERCEIRO, URL_IMG_PRIMEIRO, URL_IMG_SEGUNDO, URL_IMG_TERCEIRO, REGRAS, CALENDARIO, PREMIOS) VALUES ('" .$NOME. "','" .$TH. "','" .$INICIO_INSC. "','" .$FINAL_INSC. "','" .$CLASSIFICATORIA. "','" .$FASE_GRUPO. "','" .$SEMIFINAL. "','" .$FINAL. "','" .$ID_STATUS. "','" .$DESCRICAO. "', '" .$URL_IMG."','" .$id_user. "','" .$primeiro. "','" .$segundo. "','" .$terceiro. "', '" .$url_primeiro. "', '" .$url_segundo. "', '" .$url_terceiro. "', '" .$regras. "', '" .$calendario. "', '" .$premios. "')");

    if(!$insert_torneio){
        echo 0;
    }
    else{
        echo 1;
    }

}else{
   $update_torneio = $db_heroes->query("UPDATE torneio SET NOME = ('".$NOME."'), TH = ('".$TH."'), INICIO_INSCRICAO = ('".$INICIO_INSC."'),  FINAL_INSCRICAO = ('".$FINAL_INSC."'), INICIO_CLASSIFICATORIA = ('".$CLASSIFICATORIA."'), INICIO_FASE_GRUPO = ('".$FASE_GRUPO."'), INICIO_SEMIFINAL = ('".$SEMIFINAL."'), DATA_FINAL = ('".$FINAL."'), ID_STATUS = ('".$ID_STATUS."'), DESCRICAO = ('".$DESCRICAO."'), ID_USER = ('" .$id_user."'), URL_IMG = ('" .$URL_IMG."'), PRIMEIRO = ('" .$primeiro."'), SEGUNDO = ('" .$segundo."'), TERCEIRO = ('" .$terceiro."'), URL_IMG_PRIMEIRO = ('" .$url_primeiro."'), URL_IMG_SEGUNDO = ('" .$url_segundo."'), URL_IMG_TERCEIRO = ('" .$url_terceiro."'), REGRAS = ('" .$regras."'), CALENDARIO = ('" .$calendario."'), PREMIOS = ('" .$premios."')  WHERE ID_TORNEIO = ('".$ID_TORNEIO."')");

    if(!$update_torneio){
        echo 0;
    }
    else{
        echo 2;
    }
}



?>
