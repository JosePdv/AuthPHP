<?php 
if(isset($_POST['login'])&& !empty($_POST['login']) && isset($_POST['senha']) && !empty($_POST['senha'])){
require 'Conexao.php';
require 'usuario.php';

$u = new Usuario();

$login=$_POST['login'];
$senha=$_POST['senha'];


if($u->login($login,$senha )== true ){
	if(isset($_SESSION['idUser'])){
		header("location: formulario.php");
		
	}else{
		header("location: login.php");
	}
	//if(isset($_sassion['idUser'])){
		//header("location:Index.html");
}else{
	header("location: login.php");
}

//
	//}else{
	//	header("location: login.php");


	//}else{
	//header("location: login.php");



//}
}else{
		header("location: login.php");
	}	


?>