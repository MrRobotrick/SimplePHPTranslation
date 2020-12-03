<?php
	if (session_status() === PHP_SESSION_NONE){
		session_start();
	}
	if(!isset($_SESSION['lang'])){
		$_SESSION['lang']='ar';
	}
	else if(isset($_GET['lang']) && $_SESSION['lang'] !== $_GET['lang'] && !empty($_GET['lang'])){
		if($_GET['lang'] === 'en'){
			$_SESSION['lang']='en';
		}
		else if($_GET['lang'] === 'ar'){
			$_SESSION['lang']='ar';
		}
		else if($_GET['lang'] === 'fr'){
			$_SESSION['lang']='fr';
		}
		//You can add all the symbol of languages you want
	}	
	require_once "lang/".$_SESSION['lang'].".php";
?>