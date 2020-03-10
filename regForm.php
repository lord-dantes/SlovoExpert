<?php
	$name = $_POST["name"];
	$phone = $_POST["phone"];
//  Cheking valid fields
	if($name=="" or $phone==""){
		echo "Заполните все поля"; // Fill in the fields
    }
	else{
// 		E-mails
		$ev = 'evgeniymeo@gmail.com'; // e-mail owner
		$bs = 'info@buy-sell.com.ua'; // e-mail company
		$sb = 'slava.bandura1@gmail.com'; // e-mail dev

		$to = $bs . ', ' . $ev; /* Адрес, куда отправляем письма*/
		// $to = $sb; /* Адрес, куда отправляем письма*/
		$subject = "[Slovo] " . $name . " | " . $phone;
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
		$headers .= "From: <manager@bm.slovo.expert>\r\n";/*ОТ КОГО*/

		/*ВО ВНУТРЬ ПЕРЕМЕННОЙ $message ЗАПИСЫВАЕМ ДАННЫЕ ИЗ ПОЛЕЙ */
		$message .=
		"Имя пользователя: " . $name . "<br>"
		. "Телефон: ".$phone."<br>";

		/*ДЛЯ ОТЛАДКИ ВЫ МОЖЕТЕ ПРОВЕРИТЬ ПРАВИЛЬНО ЛИ ЗАПИСАЛИCM ДАННЫЕ ИЗ ПОЛЕЙ*/

		$send = mail($to, $subject, $message, $headers);
	}

?>