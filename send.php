<?
<<<<<<< HEAD
	function mna($fromname, $fromaddress, $toname, $toaddress, $subject, $message)
		{
		   $headers  = "MIME-Version: 1.0\n";
		   $headers .= "Content-type: text/html; charset=UTF-8\n";
		   //$headers .= "X-Priority: 1\n";
		   //$headers .= "X-MSMail-Priority: Normal\n";
		   //$headers .= "X-Mailer: php\n";
		   $headers .= "From: \"".$fromname."\" <".$fromaddress.">\n";
		   return mail($toaddress, $subject, $message, $headers);
		}

$name = '';
$email = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$action = isset($_POST['action']) && $_POST['action'] ? $_POST['action'] : null;
	$name = isset($_POST['name']) && $_POST['name'] ? strip_tags($_POST['name']) : null;
	$email = isset($_POST['email']) && $_POST['email'] ? strip_tags($_POST['email']) : null;
	$captcha = isset($_POST['captcha']) && $_POST['captcha'] ? strip_tags($_POST['captcha']) : null;
	$message = isset($_POST['message']) && $_POST['message'] ? strip_tags($_POST['message']) : null;
	
	if($action == 'send_contactform'){

		$subject = 'Поступила новая заявка с '.$_SERVER['HTTP_HOST'];
	
		$text = '<br>
			Поступила новая заявка со страницы <a href="http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'">'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'</a>
			<br>
			<br>
			';
	
		$text .= 'Имя: '.$name.'<br><br>';
		$text .= 'Email: '.$email.'<br><br>';
		$text .= 'Запрос: '.$message.'<br><br>';
		
		
		$text .= '-----------------------------------<br>
							Интернет-служба сайта '.$_SERVER['HTTP_HOST'];
		
		$stat_email = false;


		if($name && $email && $message && $_SESSION["wbch:captcha"]==$captcha){
			$email = 'info@cognitiorerum.xyz';
			$stat_email = mna($_SERVER['HTTP_HOST'], 'info@'.$_SERVER['HTTP_HOST'], "Info", $email, $subject, $text);
		}
		
		if($stat_email){
			$mess= 'Уважаемый '.$name.', ваше сообщение было успешно отправленно.<br>';
			$name = '';
			$email = '';
			$message = '';
		}else{
			$mess= 'Уважаемый '.$name.', ваше сообщение не было отправленно. Проверьте правильность заполения формы.<br>'; 
		}
		echo '<center><p class="text">'.$mess.'</p><br>';
	}
=======
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

 echo '<center><p class="text">'.$mess.'</p><br>';
   
>>>>>>> 1e3025060692d3510d875a0b5e6a1efa917dd682
}
?>
