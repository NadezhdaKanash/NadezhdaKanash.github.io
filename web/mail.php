<?php
	//Принимаем постовые данные
	$from=$_POST['from'];
	$name=$_POST['user_name'];
	$email=$_POST['user_email'];
	$user_message=$_POST['user_message'];
	//Тут указываем на какой ящик посылать письмо
	$to = "kozimirovdima23@gmail.com";
	//Далее идет тема и само сообщение
	// Тема письма
	$subject = "Заявка с сайта";
	// Сообщение письма
	$message = "
	<p>Форма: ".htmlspecialchars($from)."</p>
	<p>Имя пользователя: ".htmlspecialchars($name)."</p>
	<p>E-mail: <a href='tel:$phone'>".htmlspecialchars($email)."</a></p>
	<p>Сообщение: ".htmlspecialchars($user_message)."</p>";
	// Отправляем письмо при помощи функции mail();
	$headers = "From: kozimirovdima.com <message@kozimirovdima.com>\r\nContent-type: text/html; charset=UTF-8 \r\n";
	mail ($to, $subject, $message, $headers);
	// Перенаправляем человека на страницу благодарности и завершаем скрипт
	//header('Location: thanks.html');
	exit();
?>