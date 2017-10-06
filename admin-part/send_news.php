<?php 
include ('db.php');


if (isset($_POST) && $_POST['btn'] == 'add_news' && !empty($_POST['title'])){
	//var_dump($_SERVER['DOCUMENT_ROOT']);die;
	if(isset($_FILES['image']) && !empty($_FILES['image'])){
	$img_name = $_FILES['image']['name'];
	$img_local = $_FILES['image']['tmp_name'];
	
	$img_upload = $_SERVER['DOCUMENT_ROOT'].'/work/img/';//куда будем загружать картинку
	move_uploaded_file($img_local, $img_upload.$img_name);
    $_POST['image'] = str_replace($_SERVER['DOCUMENT_ROOT'].'/work', "", $img_upload.$img_name);            
	}
	
	mysqli_query($connection, "INSERT INTO `news` (`title` , `content`, `image`) 
				VALUES ('$_POST[title]','$_POST[content]','$_POST[image]')");
				
	header('location: /work/admin-part/admin-panel.php');
}else{
	echo "Doesn`t WORK";
}