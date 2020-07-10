<?php

$conexao = new PDO('mysql:host=localhost;dbname=atividade',
					'root',
					'');
$id=$_GET['id'];
$comando=$conexao->prepare("SELECT nome,sobrenome FROM cadastro WHERE id = :i");
$comando->bindParam(':i',$id);
$comando->execute();
while ($linha = $comando->fetch(PDO::FETCH_ASSOC)){
	
 					echo$nome=$linha["nome"];

 					echo $sobrenome=$linha["sobrenome"];
 						//echo$linha["cpf"];
 						//echo$linha["cargo"];
 						//echo$linha["data"];
 					
 						echo "<br>Toda esta linha será alterada!";
 						}

?>
<html> 

<head>
<title> Atividade</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
<header > 
	<a href="logout.php"><p>sair</p></a>
	<a href="Index.html"><h5>Atividade</h5></a>
 </header>



<table class="form">
	<tr><td>
<form  method="post" action="ProcessaEdita.php">
	<p>Nome<input class="form-control"type="text" name="nome" placeholder="José s..."></p>
	
	<p>Sobrenome<input class="form-control"type="text" name="sobrenome" placeholder="Cunha..."></p>
	
	<p>Cpf<input class="form-control" type="text" name="cpf" placeholder="002 3443 384 10..."><p>
	
	<p>Cargo<input class="form-control" type="text" name="cargo" placeholder="Analista ..."></p>
	<input type="hidden" name="id" value="<?= $id?>">
	<input type="submit" name="alterar" value="altera"class="btn btn-primary btn-sm">

</form>
</tr></td>
</tables>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>