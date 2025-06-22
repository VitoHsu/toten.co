<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <?php
		// include("admin/connMysql.php");
		// mysql_query("SET NAMES 'UTF8'");	
		// include("in-companyinfo.php");

		 ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
$nameinput=$_POST["nameinput"];
$exampleFormControlInput1=$_POST["exampleFormControlInput1"];
$city=$_POST["city"];
$myneed=$_POST["myneed"];
$exampleFormControlTextarea1=$_POST["exampleFormControlTextarea1"];



?>



<?php
/**
$date2 = date("Y-m-d H:s:i");
$sql_query = "INSERT INTO contact value('' ,";Abc
	$sql_query .="'".$name."',";
	$sql_query .="'".$company."',";
	$sql_query .="'".$county."',";
    $sql_query .="'".$phone."',";
	$sql_query .="'".$email."',";
	$sql_query .="'".$message."',";
	$sql_query .="'".$v1."',";
    $sql_query .="'".$date2."');";
  //echo $sql_query;
     $result = mysql_query($sql_query);**/
	 
?>

<?php


$msg="店家名稱或聯絡人名字:".$nameinput."\r\n電話:".$exampleFormControlInput1."\r\n企業商家實體店所在地 :".$city."\r\n想要服務項目 :".$myneed."\r\n需求描述 :".$exampleFormControlTextarea1;
mb_internal_encoding("UTF-8");
//$msg='';

$textfield7="mark@mail.aming.idv.tw";

//$to ="$email"; //收件者 
$to ="service@toten.co"; //收件者 
$subject = "企業商家實體店在地化行銷方案-連絡我們"; //信件標題 
//$msg = "smtp發信測試";//信件內容 
$headers = "From: ".$textfield7 ."\r\n"; //寄件者
//$headers .= "Bcc: mark@mail.aming.idv.tw";
if(mb_send_mail("$to", "$subject", "$msg", "$headers")){
?> 

<?php 
echo "信件已經發送成功。";//寄信成功就會顯示的提示訊息
}else{
echo "信件發送失敗！";//寄信失敗顯示的錯誤訊息 
}
?>


<script type="text/javascript">
alert("我們己收到你的信件,會盡快回覆你的");
//將網頁重新導向並結束網頁執行
location="index.php"
</script>

</body>
</html>
