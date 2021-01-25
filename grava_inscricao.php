<? include "db/db.php"; 


$id_torneio =  $_GET["id_torneio"];
$nome =  utf8_decode($_GET["nome"]);
$tag_vila =  '#'.$_GET["tag_vila"];
$email =  $_GET["email"];
$discord_nome =  $_GET["discord_nome"];
$twitter =  $_GET["twitter"];
$data_nascimento = $_GET["data_nascimento"];
$discord_tag = '#'.$_GET["discord_tag"];

//Busca nome da vila para evitar erro no ajax
$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjVjMmMzYWVkLTJlNzEtNDI3ZC05OTVlLTFjOGQxMTFjMWYxYyIsImlhdCI6MTYxMTUyNDU2OSwic3ViIjoiZGV2ZWxvcGVyLzE0YTdhZjExLTU0MzQtYTc0MC0wNWVjLTEzMmM5MmJjNmUyOSIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjE3Ny4yMjEuMjE3Ljk2Il0sInR5cGUiOiJjbGllbnQifV19.RkeZT6zwBN7LPvOnxQ9m1lHyKAOoVlYTB5RYfAVajbt5SGKXg4t2NhfprvfhM36AbWs9sD82CSIttBtfHHDd_g";

$url = "https://api.clashofclans.com/v1/players/" . urlencode($tag_vila);

$ch = curl_init($url);

$headr = array();
$headr[] = "Accept: application/json";
$headr[] = "Authorization: Bearer ".$token;

curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

$res = curl_exec($ch);
$data = json_decode($res, true);
curl_close($ch);

$nome_vila = $data["name"];
////////////////////

$valida_email = $db_heroes->prepare("SELECT count(*) FROM inscricao WHERE ID_TORNEIO = '".$id_torneio."'  AND EMAIL = '".$email."' ");
$valida_email->execute();
$rowvalida_email = $valida_email->fetch(PDO::FETCH_NUM);

$valida_vila = $db_heroes->prepare("SELECT count(*) FROM inscricao WHERE ID_TORNEIO = '".$id_torneio."'  AND TAG_VILA = '".$tag_vila."' ");
$valida_vila->execute();
$rowvalida_vila = $valida_vila->fetch(PDO::FETCH_NUM);

if($rowvalida_email[0] > 0){
    echo 0;

} else if($rowvalida_vila[0] > 0){
    echo 1;
}

else{
    $insert_inscricao = $db_heroes->query("INSERT INTO inscricao (ID_TORNEIO, NOME, TAG_VILA, EMAIL, DISCORD_NOME, TWITTER, DATA_NASCIMENTO, NOME_VILA, DISCORD_TAG) VALUES ('" . $id_torneio . "','" . $nome."', '" . $tag_vila."', '" . $email."', '" . $discord_nome."', '" . $twitter."', '" . $data_nascimento ."', '" . $nome_vila ."', '" . $discord_tag ."')");
    echo 2;
}


?>