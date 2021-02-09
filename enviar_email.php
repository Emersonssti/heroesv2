<? require './vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

$Mailer = new PHPMailer();

$Mailer->IsSMTP();


//Configuração
$Mailer->Priority = '2';
$Mailer->SMTPAuth=true;
$Mailer->SMTPSecure='ssl';
$Mailer->Host='mail.torneioheroes.com';
$Mailer->Port="465";
$Mailer->Username='contato@torneioheroes.com';
$Mailer->Password='88%E9HTl_lkX';
$Mailer->CharSet = 'UTF-8';
$Mailer->IsHTML(true);

//Remetente
$Mailer->From='contato@torneioheroes.com';
$Mailer->FromName = 'Torneio Heroes';
$Mailer->Subject='Inscrição Torneio Heroes';

$Mailer->Body='<img src="http://torneioheroes.com/assets/img/welcome_t5.jpeg" alt="">
';

//Destinatário
$Mailer->AddAddress($email);
$Mailer->Send();

// if($Mailer->Send()){
    
// }else{
//     echo 'erro'.$Mailer->ErrorInfo;
// }

?>


