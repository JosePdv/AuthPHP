<?php
 //require"Conexao.php"


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

if ($linha = $comando->fetch()) {
	Header('Location: http://localhost/atividade/Index.html?erro=1');
	exit();
}

	Header('Location: http://localhost/atividade/lista.php');
?>