<? ini_set('error_reporting', 0);
session_start();
header('Content-Type: text/html; charset=UTF-8');
 if($_SESSION['id_user'] == ""){ ?>
    <script>window.parent.location.assign("https://localhost/sistema/");</script>
 <? } else{
$db_confi= new PDO('mysql:host=localhost;dbname=tornei30_config; charset=utf8', "root", ""); 
$db_heroes= new PDO('mysql:host=localhost;dbname=tornei30_heroes; charset=utf8', "root", ""); 

$id_user = $_SESSION['id_user'];
$nome_user = $_SESSION['nome_user'];
$img = $_SESSION['img'];
 }


?>