<?php 
include ('db.php');
include ('mailer/src/PHPMailer.php');
include ('mailer/src/SMTP.php');
include ('mailer/src/Exception.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


//загрузка новостей
if (isset($_POST) && $_POST['btn'] == 'add_news' && !empty($_POST['title'])){
	//var_dump($_SERVER['DOCUMENT_ROOT']);die;
	if(isset($_FILES['image']) && !empty($_FILES['image'])){
	$img_name = $_FILES['image']['name'];
	$img_local = $_FILES['image']['tmp_name'];
	
	$img_upload = $_SERVER['DOCUMENT_ROOT'].'/work/img/';//куда будем загружать картинку
	move_uploaded_file($img_local, $img_upload.$img_name);

	$_POST[image] = str_replace($_SERVER['DOCUMENT_ROOT'], '', $img_upload.$img_name);
	}
	
	mysqli_query($connection, "INSERT INTO `news` (`title` , `content`, `image`) 
				VALUES ('$_POST[title]','$_POST[content]','$_POST[image]')");
				
	header('location: /work/admin-part/admin-panel.php');
}

if(isset($_GET) && $_GET['btn_enter_admin'] == 'enter'){
	 $chek = mysqli_query($connection, "SELECT * FROM `user` WHERE `name` = '$_GET[login]' AND `password` = '$_GET[password]'");
	

    if (mysqli_num_rows($chek)) {
            header('location: /work/admin-part/admin-panel.php');
    }
	
}

//отправка формы на почту
if (isset($_POST) && $_POST['btn_send_contact'] == 'contact' && !empty($_POST['name'])){
		//var_dump($_POST);
	$mail = new PHPMailer();

	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'denka.gorobtsoff@gmail.com';
	$mail->Password = 'gorob4ik1986';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = '465';

	$mail->CharSet = 'UTF-8';
	$mail->From = $_POST['email'];
	$mail->FromName = $_POST['name'];
	$mail->addAddress('d98220@gmail.com');
	$mail->addReplyTo($_POST['email']);

	$mail->isHTML(true);

	$mail->Subject = 'Подписчик с сайта '.$_POST['name'].'. Почта - '.$_POST['email'];
	$mail->Body = $_POST['about'];
	header('location: /work/index.php');

}


//загрузка прайса и удаление предыдущего файла
if(isset($_FILES['price']) && isset($_POST) && !empty($_FILES['price'])){
	$price_name = $_FILES['price']['name'];
	$price_local = $_FILES['price']['tmp_name'];
	
	$price_upload = $_SERVER['DOCUMENT_ROOT'].'/work/price/';//куда будем загружать прайс

	$folder_full = scandir($price_upload);
		if (count($folder_full)>2){
			foreach ($folder_full as $key => $file) {

				if($file == '.' || $file == '..'){
					unset($folder_full[$key]);continue;// удаляю ненужные значения из массива ( . и .. )

				}
				$folder_full[$key] = $file;// собираю новый массив
			}

				if(isset($folder_full)){
					foreach ($folder_full as $file) {
						$delete = $file;
					}
				$delete_file = $price_upload.$delete;
				unlink($delete_file);
				}

		}

		move_uploaded_file($price_local, $price_upload.$price_name);
		header('location: /work/admin-part/admin-panel.php');
}


//скачивание прайса и подсчет кликов по кнопке Скачать прайс
if(isset($_GET) && $_GET['price'] == 'receive'){
	//счетчик нажатий
	$count = file_get_contents('count.txt'); // читаем файл count.txt
    $count++; // увеличиваем на еденицу
    file_put_contents('count.txt', $count); // записываем новое значение в count.txt
	
	$file_place = scandir($_SERVER['DOCUMENT_ROOT'].'/work/price/');
	$file = $_SERVER['DOCUMENT_ROOT'].'/work/price/'.$file_place[2];
	if (file_exists($file)){
		if (ob_get_level()) {
      ob_end_clean();
    }
    // заставляем браузер показать окно сохранения файла
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file)); 

    // читаем файл и отправляем его пользователю
    readfile($file);
    exit;
  }

  
}else{

	$count = file_get_contents('count.txt');
}

//подписчики на рассылку прайса
if(isset($_POST) && $_POST['send_dispath'] == 'dispath' && !empty($_POST['email_dispatch'])){
	mysqli_query($connection, "INSERT INTO `dispatch` (`email`) 
				VALUES ('$_POST[email_dispatch]')");
	header('location: /work');
}

//cкачать подписчиков
if(isset($_GET) && $_GET['dispath'] == 'all'){

	$file = fopen('dispath.txt','w');
	$file_content = file_get_contents('dispath.txt');

	$disp = mysqli_query($connection, "SELECT `email` FROM `dispatch`");
	
	$array = array();
	while ($dispath = mysqli_fetch_assoc($disp)) {
		$array []= $dispath;
	}
	foreach ($array as $value ) {

		$file_content .= $value['email'].'
';
		file_put_contents('dispath.txt', $file_content);
	}

	$file_txt = 'dispath.txt'; // читаемый файл 
	if (file_exists($file_txt)){
		if (ob_get_level()) {
      ob_end_clean();
    }
    // заставляем браузер показать окно сохранения файла
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($file_txt));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file_txt)); 

    // читаем файл и отправляем его пользователю
    readfile($file_txt);
    exit;
  }
	
}