<?php
include ('db.php');
//include ('lib/PHPMailer/src/PHPMailer.php');
//include ('lib/PHPMailer/src/SMTP.php');
//include ('lib/PHPMailer/src/Exception.php');
//
//
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

//Вход в админку
if(isset($_GET) && $_GET['btn_enter_admin'] == 'enter'){
	 $chek = mysqli_query($connection, "SELECT * FROM `user` 
	 									WHERE `name` = '$_GET[login]' 
	 									AND `password` = '$_GET[password]'");	

    if (mysqli_num_rows($chek)) {
    		setcookie("admin", "acses", time() + 3600*24, '/');
            header('location: /admin-part/admin-panel.php');
    }	
}

// ---------------------------------------  админка -------------------------------//

//загрузка новостей
if (isset($_POST) && $_POST['btn'] == 'add_news' && !empty($_POST['title'])){
	//var_dump($_SERVER['DOCUMENT_ROOT']);die;
	if(isset($_FILES['image']) && !empty($_FILES['image'])){
	$img_name = $_FILES['image']['name'];
	$img_local = $_FILES['image']['tmp_name'];
	
	$img_upload = $_SERVER['DOCUMENT_ROOT'].'/img/';//куда будем загружать картинку
	move_uploaded_file($img_local, $img_upload.$img_name);

	$_POST[image] = str_replace($_SERVER['DOCUMENT_ROOT'], '', $img_upload.$img_name);
	}
	
	mysqli_query($connection, "INSERT INTO news (`title` , `content`, `image`,`meta-title`,`meta-description`,`link`,`category`)
							   VALUES ('$_POST[title]','$_POST[content]','$_POST[image]','$_POST[meta_title]','$_POST[meta_description]','/news/$_POST[good_link].html','$_POST[select_category]')");
				
	header('location: /admin-part/admin-panel.php');
}

//загрузка фото
if(isset($_POST) && $_POST['btn_image'] == 'add_image' && !empty($_FILES['image'])){
	$image_name = $_FILES['image']['name'];
	$image_local = $_FILES['image']['tmp_name'];

	$image_upload = $_SERVER['DOCUMENT_ROOT'].'/img/fotogallery/';//куда будем загружать картинку

	$image_sql = str_replace($_SERVER['DOCUMENT_ROOT'], '', $image_upload.$image_name);

	mysqli_query($connection, "INSERT INTO fotogallery (`image-name`,`image-path`) 
							    VALUES ('$image_name','$image_sql')");

	move_uploaded_file($image_local, $image_upload.$image_name);
	header('location: /admin-part/admin-panel.php');

}else{
		$error_download_image = '';
	}



//загрузка прайса и удаление предыдущего файла
if(isset($_FILES['price']) && isset($_POST) && !empty($_FILES['price'])){
	$file_name = $_FILES['price']['name'];
 	$price_file_type = explode('.',$_FILES['price']['name']);
 	//var_dump($price_file_type);die;
	$price_local = $_FILES['price']['tmp_name'];
	
	$price_upload = $_SERVER['DOCUMENT_ROOT'].'/price/';//куда будем загружать прайс

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

		move_uploaded_file($price_local, $price_upload. date('d.m.y').'.'.$price_file_type[1]);
		header('location: /admin-part/admin-panel.php');
}

//cкачать подписчиков
if(isset($_GET) && $_GET['dispath'] == 'all'){

	$file = fopen('dispath.txt','w');
	$file_content = file_get_contents('dispath.txt');

	$disp = mysqli_query($connection, "SELECT email FROM dispatch");
	
	$array = array();
	while ($dispath = mysqli_fetch_assoc($disp)) {
		$array []= $dispath;
	}
	foreach ($array as $value ) {

		$file_content .= $value['email']."\n
		";
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


//скачивание прайса и подсчет кликов по кнопке Скачать прайс
if(isset($_GET) && $_GET['price'] == 'receive'){
	//счетчик нажатий
	$count = file_get_contents('count.txt'); // читаем файл count.txt
    $count++; // увеличиваем на еденицу
    file_put_contents('count.txt', $count); // записываем новое значение в count.txt
	
	$file_place = scandir($_SERVER['DOCUMENT_ROOT'].'/price/');
	$file = $_SERVER['DOCUMENT_ROOT'].'/price/'.$file_place[2];
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

	$count = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/admin-part/count.txt');
}

// ---------------------------------------  страница лендинга -------------------------------

//подписчики на рассылку прайса
if(isset($_POST) && $_POST['send_dispath'] == 'dispath' && !empty($_POST['email_dispatch'])){

	$_POST['send_dispath'] = trim(strtolower($_POST['send_dispath']));
	mysqli_query($connection, "INSERT INTO dispatch (`email`) 
							   VALUES ('$_POST[email_dispatch]')");
	header('location: /');
}else{
	//выдавать ошибку
}

//отправка формы на почту
//if (isset($_POST) && $_POST['btn_send_contact'] == 'contact' && !empty($_POST['name'])){


	/*$mail = new PHPMailer();

	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = '';
	$mail->Password = '';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;

	$mail->CharSet = 'UTF-8';
	$mail->From = '';
	$mail->FromName = $_POST['name'];
	$mail->addAddress('');
	$mail->addReplyTo($_POST['email']);
	$mail->SMTPDebug = 2;

	$mail->isHTML(true);

	$mail->Subject = 'Подписчик с сайта '.$_POST['name'].'. Почта - '.$_POST['email'];
	$mail->Body = $_POST['about'];
	//var_dump($mail);
	header('location: /');*/

//}else{
	//выдавать ошибку
//}

//вывод название прайса в кнопку Скачать прайс
$file_place = scandir($_SERVER['DOCUMENT_ROOT'].'/price/');
$name_prise = explode('.',$file_place[2]);

//------------------------- Новости (страница) --------------------

//полная новость
//if(isset($_GET) && $_GET['page']){
	

	//$page_info_sql = mysqli_query($connection, "SELECT * FROM news WHERE id = '$_GET[page]'");
	//$page_info = mysqli_fetch_assoc($page_info_sql);
	//var_dump($page_info) ;die;

	


// -------- редактирование

if(isset($_POST) && $_POST['news_redact_btn']){
	//var_dump($_POST);

	$id = $_POST['news_redact_btn'];
	

	if ($_POST['title']){
		
		mysqli_query($connection, "UPDATE news SET title = '$_POST[title]' 
								   WHERE id = $id");
	}

	if ($_POST['content_redact']){
	
		mysqli_query($connection, "UPDATE news SET content = '$_POST[content_redact]' 
								   WHERE id = $id");
	}

	if ($_POST['select_category']){
		
		mysqli_query($connection, "UPDATE news SET category = '$_POST[select_category]' 
								   WHERE id = $id");
	}
	if ($_POST['meta_title']){
		
		mysqli_query($connection, "UPDATE news SET `meta-title` = '$_POST[meta_title]' 
								   WHERE id = $id");
	}
	if ($_POST['meta_description']){
		
		mysqli_query($connection, "UPDATE news SET `meta-description` = '$_POST[meta_description]' 
								   WHERE id = $id");
	}

	if($_POST['good_link']){
		mysqli_query($connection, "UPDATE news SET `link`='/news/$_POST[good_link].html' WHERE id = $id");
	}

	if ($_FILES['image'] && !empty($_FILES['image']['tmp_name'])){
		$img_path_sql = mysqli_query($connection, "SELECT image FROM news 
												   WHERE id = $id");
		$img_path = mysqli_fetch_assoc($img_path_sql); //массив с идентификатором ['image']
		@unlink($_SERVER['DOCUMENT_ROOT'].$img_path['image']); // удаление картинки

		$img_name_redact = $_FILES['image']['name'];//новая картинка
		$img_local_redact = $_FILES['image']['tmp_name'];//место новой картинки
		
		$img_upload_redact = $_SERVER['DOCUMENT_ROOT'].'/img/';//куда будем загружать картинку



		move_uploaded_file($img_local_redact, $img_upload_redact.$img_name_redact);

		$image_redact = str_replace($_SERVER['DOCUMENT_ROOT'], '', $img_upload_redact.$img_name_redact);
		//var_dump($image_redact,$_FILES['image'], $_POST);die;
		
		mysqli_query($connection, "UPDATE news SET  image = '$image_redact' 
								   WHERE id = $id");

		
	}
header('location: /news.php');
}

//     Удаление новости
if(isset($_GET) && $_GET['delete']){
	mysqli_query($connection, "DELETE FROM news 
							   WHERE id = '$_GET[delete]'");
	header('location: /news.php');

}
//     Удаление картинки
if(isset($_GET) && $_GET['delete_img']){
	mysqli_query($connection, "DELETE FROM fotogallery 
							   WHERE id = '$_GET[delete_img]'");
	header('location: /photo.php');

}
//     Удаление подписчика
if(isset($_GET) && $_GET['delete_dispath']){
	mysqli_query($connection, "DELETE FROM dispatch 
							   WHERE id = '$_GET[delete_dispath]'");
	header('location: /admin-part/admin-panel.php');

}
//красивые ссылки

if (isset($_GET) && $_GET['page']) {
	$sql_result = mysqli_query($connection, "SELECT `link` FROM `news` WHERE `id` ='" . $_GET['page'] . "'");
	$result = mysqli_fetch_assoc($sql_result);
	//var_dump($result);
	header('location:' . $result['link']);
}
