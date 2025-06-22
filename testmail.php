<?php
include(“PHPMailerAutoload.php”); //匯入PHPMailer類別

$mail= new PHPMailer(); //建立新物件
$mail->IsSMTP(); //設定使用SMTP方式寄信
$mail->SMTPAuth = true; //設定SMTP需要驗證
$mail->Host = “mail.aming.idv.tw”; //設定SMTP主機
$mail->Port = 25; //設定SMTP埠位，預設為25埠
$mail->CharSet = “big5”; //設定郵件編碼

$mail->Username = “mark”; //設定驗證帳號
$mail->Password = “Abcd1234!”; //設定驗證密碼

$mail->From = mark@mail.aming.idv.tw; //設定寄件者信箱
$mail->FromName = “測試人員”; //設定寄件者姓名

$mail->Subject = “PHPMailer 測試信件”; //設定郵件標題
$mail->Body = “大家好, 這是一封測試信件! “; //設定郵件內容
$mail->IsHTML(true); //設定郵件內容為HTML
$mail->AddAddress(“mark@mail.aming.idv.tw”, “mark”); //設定收件者郵件及名稱
if(!$mail->Send()) {
echo “Mailer Error: ” . $mail->ErrorInfo;
} else {
echo “Message sent!”;
}
?>