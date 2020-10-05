<?php
require_once '../ayarlar.php';

if(isset($_SESSION['login']) && $_SESSION['login'] == true){
	include 'header.php';
	include 'sidebar.php';
	
	if(empty($_GET['sayfa'])){
		include 'main.php';
	}else{
		if(file_exists('sayfa/'.$_GET['sayfa'].'.php')){
			include 'sayfa/'.$_GET['sayfa'].'.php';
		}else{
			include 'main.php';
		}
	}
	
	include 'footer.php';
}else{
	include 'giris.php';
}
?>
