<?
$tag_vila =  '#'.$_GET["tag_vila"];

$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjVhOWFmZTAxLWI4MWUtNDJkZi04MDkxLTg0YmRlN2I1ZWE3NCIsImlhdCI6MTYyMzExMjU4OCwic3ViIjoiZGV2ZWxvcGVyLzE0YTdhZjExLTU0MzQtYTc0MC0wNWVjLTEzMmM5MmJjNmUyOSIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjIwMS4xMi42OC4xODEiXSwidHlwZSI6ImNsaWVudCJ9XX0.E7IrXz7QME18cCGFO7jPH9f1-uwquen7uyCA2oY9sk2KbJQEWjoHhFaXmpod7fR9xGHlAJc3To1Cug7wpC0soQ";

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

  echo 'erro ao buscar dados';

}else{

  echo $nick = $data["name"];

  
}

?>
