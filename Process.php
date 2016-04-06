<?php 

session_start();


if(!isset($_SESSION['randnum'])){
	$_SESSION['randnum'] = rand(0,100);
}


$_SESSION['guess'] = $_POST['guess'];


echo $_SESSION['guess']." ".$_SESSION['randnum'];

header('Location: PHP-GreatNumberGame.php');



 ?>