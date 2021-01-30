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

$Mailer->Body='<img src="https://s2.glbimg.com/6Kih1YiwCcxIfpF4Fb-PKJAvkvs=/512x320/smart/e.glbimg.com/og/ed/f/original/2020/01/28/gettyimages-980825530.jpg" alt="">
';

//Destinatário
$Mailer->AddAddress($email);
$Mailer->Send();

// if($Mailer->Send()){
    
// }else{
//     echo 'erro'.$Mailer->ErrorInfo;
// }

?>


