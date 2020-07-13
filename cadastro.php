<?php
 //require"Conexao.php"
if (!isset($_SESSION)) session_start();

$nome = $_POST['nome'];
$sobrenome= $_POST['sobrenome'];
$cpf= $_POST['cpf'];
$cargo= $_POST['cargo'];
$data= date("d/m/y");

$conexao = new PDO('mysql:host=localhost;dbname=atividade',
					'root',
					'');



$comando = $conexao->prepare('INSERT INTO cadastro (nome, sobrenome, cpf, cargo,data) VALUES (:n, :s, :c, :cg, :d)');
$comando->bindParam(':n', $nome);
$comando->bindParam(':s', $sobrenome);
$comando->bindParam(':c', $cpf);
$comando->bindParam(':cg', $cargo);
$comando->bindParam(':d', $data);
$comando->execute();

require 'usuario.php';
	$u = new Usuario();
	if(isset($_SESSION['tip']) && ($_SESSION['tip']== 1)){
		header('location: lista2.php');
	}else{
//if ($linha = $comando->fetch()) {
	//Header('Location: http://localhost/atividade/Index.html?erro=1');
	//exit();


	Header('Location: http://localhost/atividade/lista.php');
}
?>