<?php 

$eltoken="246437680:AAGdvmfrO8kWmxCEOhFIi22khRgFxWkxF9I";
$tgpage="https://api.telegram.org/bot".$eltoken;
$chatID="7994112";



 echo '<form action="<?php echo $tgpage.\'/sendPhoto\'?>" method="post" enctype="multipart/form-data">
 	<input type="text" name="chat_id" value="7994112" >
	<input type="file" name="photo"/>
	<input type="submit" value="send" />
 </form>

 </form>';

  ?>