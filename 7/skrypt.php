<?php
session_start();
	$_SESSION['wybor'] = $_GET['wybor'];
	$_SESSION['email'] = $_GET['email'];
	$_SESSION['pobyt'] = $_GET['pobyt'];
	if (isset($_GET['godzina'])){
		$_SESSION['godzina_przyjazdu']=$_GET['godzina'];
	}
	else{
		$_SESSION['godzina_przyjazdu']= "brak";
	}
	if (isset($_GET['dziecko'])){
		$_SESSION['dziecko']="tak";
	}
	else{
		$_SESSION['dziecko']= "nie";
	}
	if (isset($_GET['udogodnienia'])){
		$_SESSION['udogodnienia']=$_GET['udogodnienia'];
	}
	
	if($_SESSION['wybor'] == 1){
		header("Location: formularz1.php");
	}
	elseif($_SESSION['wybor'] == 2){
		header("Location: formularz2.php");	
	}
	elseif($_SESSION['wybor'] == 3){
		header("Location: formularz3.php");
	}
	elseif($_SESSION['wybor'] == 4){
		header("Location: formularz4.php");
	}
	
?>