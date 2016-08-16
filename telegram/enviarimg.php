<?php 
$eltoken="246437680:AAGdvmfrO8kWmxCEOhFIi22khRgFxWkxF9I";
$tgpage="https://api.telegram.org/bot".$eltoken;
$chatID="7994112";
file_get_contents($tgpage.'/sendphoto?chat_id='.$chatID.'&text='.htmlspecialchars($_POST['mensaje']));
?>