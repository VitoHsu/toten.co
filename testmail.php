<?php
include(��PHPMailerAutoload.php��); //�פJPHPMailer���O

$mail= new PHPMailer(); //�إ߷s����
$mail->IsSMTP(); //�]�w�ϥ�SMTP�覡�H�H
$mail->SMTPAuth = true; //�]�wSMTP�ݭn����
$mail->Host = ��mail.aming.idv.tw��; //�]�wSMTP�D��
$mail->Port = 25; //�]�wSMTP���A�w�]��25��
$mail->CharSet = ��big5��; //�]�w�l��s�X

$mail->Username = ��mark��; //�]�w���ұb��
$mail->Password = ��Abcd1234!��; //�]�w���ұK�X

$mail->From = mark@mail.aming.idv.tw; //�]�w�H��̫H�c
$mail->FromName = �����դH����; //�]�w�H��̩m�W

$mail->Subject = ��PHPMailer ���իH��; //�]�w�l����D
$mail->Body = ���j�a�n, �o�O�@�ʴ��իH��! ��; //�]�w�l�󤺮e
$mail->IsHTML(true); //�]�w�l�󤺮e��HTML
$mail->AddAddress(��mark@mail.aming.idv.tw��, ��mark��); //�]�w����̶l��ΦW��
if(!$mail->Send()) {
echo ��Mailer Error: �� . $mail->ErrorInfo;
} else {
echo ��Message sent!��;
}
?>