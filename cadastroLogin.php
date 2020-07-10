<?php

$login = $_POST['login'];
$senha= $_POST['senha'];
$tp= $_POST['tipo'];
$tipo=0;
$tipo=$tp;

$conexao = new PDO('mysql:host=localhost;dbname=atividade',
					'root',
					'');



$comando = $conexao->prepare("INSERT INTO usuario (login, senha, tipo )
	VALUES (:l, :s, :t)");
$comando->bindParam(':l', $login);
$comando->bindParam(':s', $senha);
$comando->bindParam(':t', $tipo);
$comando->execute();

if ($linha = $comando->fetch()) {
	Header('Location: http://localhost/atividade/Index.html?erro=1');
	exit();
}

	Header('Location: http://localhost/atividade/login.php');
?>