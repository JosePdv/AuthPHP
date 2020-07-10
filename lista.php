
<html> 
<?php 
$conexao = new PDO('mysql:host=localhost;dbname=atividade',
					'root',
					'');



 $comando = $conexao->prepare("SELECT * FROM cadastro");
 $comando->execute();

 		//while ($linha = $comando->fetch(PDO::FETCH_ASSOC)){
 						//echo$nome=$linha["nome"];
 						//echo$linha["sobrenome"];
 						//echo$linha["cpf"];
 						//echo$linha["cargo"];
 						//echo$linha["data"];

									//$nome=$linha['nome'];
									//$sobrenome=$linha['sobrenome'];
									//$cpf=$linha['cpf'];
									//$data=$linha['data'];
									//$cargo=$linha['cargo'];
									//$id=$linha['id'];
				
									//	}
	
?>
<head>
<title> Atividade </title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>  

<body class="corpo">

<header> 
	<a href="logout.php"><p>sair</p></a>
	<a href="Index.html"><h1>Lista Cadastro</h1></a>
 </header>

<table class="table table-striped table-dark">
<tr >
	<td>Id</td>
	<td>Nome</td>
	<td>Sobrenome</td>
	<td>Cpf</td>
	<td>Data Cadastro</td>
	<td>Cargo</td>

	<td>Opção</td>


</tr>
<?php
while ($linha = $comando->fetch(PDO::FETCH_ASSOC)){
 						//echo$nome=$linha["nome"];
 						//echo$linha["sobrenome"];
 						//echo$linha["cpf"];
 						//echo$linha["cargo"];
 						//echo$linha["data"];

									$nome=$linha['nome'];
									$sobrenome=$linha['sobrenome'];
									$cpf=$linha['cpf'];
									$data=$linha['data'];
									$cargo=$linha['cargo'];
									$id=$linha['id'];
		echo	"

	<tr>
		<td>     $id     </td>
		<td>  $nome </td>
		<td> $sobrenome </td>
		<td>  $cpf      </td>
		<td>  $data     </td>
		<td>  $cargo    </td>
		
	<td><a href='deleta.php?id=$id'>Deletar</a></td>
	<td><a href='edita.php?id=$id'>Editar</a></td>
	</tr>";
}
	?>
</tables>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>