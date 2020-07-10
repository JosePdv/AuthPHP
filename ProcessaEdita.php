<?php
$conexao = new PDO('mysql:host=localhost;dbname=atividade',
					'root',
					'');
$id=$_POST['id'];
$nome = $_POST['nome'];
$sobrenome= $_POST['sobrenome'];
$cpf= $_POST['cpf'];
$cargo= $_POST['cargo'];
$comando = $conexao->prepare('UPDATE cadastro SET nome = :n, sobrenome = :s, cpf = :c, cargo = :cg WHERE id = :i');
$comando->bindParam(':n', $nome);
$comando->bindParam(':s', $sobrenome);
$comando->bindParam(':c', $cpf);
$comando->bindParam(':cg', $cargo);
$comando->bindParam(':i', $id);
$comando->execute();


header('location: lista.php');

?>