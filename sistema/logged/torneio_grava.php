<? include "db_/db.php"; 

$ID_TORNEIO = strtoupper($_GET["id_torneio"]);
$NOME = strtoupper($_GET["nome"]);
$TH = strtoupper($_GET["th"]);
$ID_TEMPORADA = $_GET["id_temporada"];

$ID_REGRAS = $_GET["id_regras"];
$ID_PREMIACAO = $_GET["id_premiacao"];
$ID_AGENDA = $_GET["id_agenda"];
$LINK_BRACKET = $_GET["link_bracket"];
$ID_STATUS = $_GET["id_status"];

switch ($TH) {
    case 9:
        $IMG_TH = 'th9.png';
        break;
    case 10:
        $IMG_TH = 'th10.png';
        break;
    case 11:
        $IMG_TH = 'th11.png';
        break;
    case 12:
        $IMG_TH = 'th12.png';
        break;
    case 13:
        $IMG_TH = 'th13.png';
        break;
}


if($ID_TORNEIO == ""){
    $insert_torneio = $db_heroes->query("INSERT INTO torneio (NOME, TH, ID_TEMPORADA, ID_REGRAS, ID_PREMIACAO, ID_AGENDA, ID_BRACKET, ID_STATUS, IMG) VALUES ('" .$NOME. "','" .$TH. "','" .$ID_TEMPORADA. "','" .$ID_REGRAS. "','" .$ID_PREMIACAO. "','" .$ID_AGENDA. "','" .$LINK_BRACKET. "','" .$ID_STATUS. "', '" .$IMG_TH. "')");

    if(!$insert_torneio){
        echo 0;
    }
    else{
        echo 1;
    }

}else{
   $update_torneio = $db_heroes->query("UPDATE torneio SET NOME = ('".$NOME."'), TH = ('".$TH."'), ID_TEMPORADA = ('".$ID_TEMPORADA."'),  ID_REGRAS = ('".$ID_REGRAS."'), ID_PREMIACAO = ('".$ID_PREMIACAO."'), ID_AGENDA = ('".$ID_AGENDA."'), LINK_BRACKET = ('".$LINK_BRACKET."'), ID_STATUS = ('".$ID_STATUS."'), IMG_TH = ('".$IMG_TH."')  WHERE ID_TORNEIO = ('".$ID_TORNEIO."')");

    if(!$update_torneio){
        echo 0;
    }
    else{
        echo 2;
    }
}



?>
