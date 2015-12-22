<?
$send = $_POST['button'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$text = $_POST['text'];
if ($send != "button"){

$to = "oleksiisuprun@gmail.com"; 				// вставте свой емаил
$subject = "Письмо с сайта CognitioRerum";		// вставте Темy сообщения
$mailheaders .="Reply-To: $mailnn";

$msg .= "Имя отправителя:ntt$namen";
$msg .= "E-mail отправителя:ntt$mailn";
$msg .= "Сообщение: n$textnnn";


mail ($to, $subject, $msg, $mailheaders);

	$mess= "Уважаемый $name, ваше сообщение было успешно отправленно.<br>"; 

 echo "<center><p class="text">$mess</p><br>";
   
}
?>
