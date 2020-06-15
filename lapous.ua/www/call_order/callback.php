<?

//Если поступили данные..
	if( isset($_POST['name'],$_POST['phone'])){
		
		$name = trim( htmlspecialchars( substr($_POST['name'], 0, 40) ) );
		$phone = trim( htmlspecialchars( substr($_POST['phone'], 0, 40) ) );

		if( $name != '' AND $phone != '' ){
			
			$email = "klinikalapous@gmail.com";
			$domen = "lapous.com.ua";

			$message = 'Имя: '.$name.'<br>Телефон: '.$phone;
			$headers  = "Content-type: text/html; charset=utf-8 \r\n";
			$headers .= "From: ".$domen." <robot@".$domen.">\r\n";
			$subject = "Обратный звонок";
			mail($email, $subject, $message, $headers);
			echo 1;

		}else echo 0;
	}
