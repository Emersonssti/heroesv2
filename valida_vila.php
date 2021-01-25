
<?

$tag_vila =  '#'.$_GET["tag_vila"];
$cv_torneio =  $_GET["cv_torneio"];
// $tag_vila =  "#RLR2GOCC";


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

if (isset($data["reason"])) {

  echo 0;

}else{

    $th = $data["townHallLevel"];

    if($th != $cv_torneio){

      echo 1;
    }else{

      $th = $data["townHallLevel"];
      $nick = $data["name"];
      echo $th.'-'.$nick;

    }
  
}

?>
