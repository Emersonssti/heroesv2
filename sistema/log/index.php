<?  include "../db/db.php";


$login = $db_confi->prepare("SELECT ID_USUARIO, NOME from usuario WHERE usuario = '".addslashes($_GET["usuario"])."' AND  senha=sha1('".addslashes($_GET["senha"])."') ");
$login->execute();
$row_login = $login->fetch(PDO::FETCH_NUM);


if(!$row_login){
    $_SESSION['id_user'] = "";
    echo 0;
}else{

    $_SESSION['id_user'] = $row_login[0];
    $_SESSION['nome_user'] = $row_login[1];
    echo 1;
}

?>



