<html>
<?php


$conexao = new PDO('mysql:host=localhost;dbname=atividade',
					'root',
					'');

$id=$_GET['id'];
$deleta = $conexao->prepare("DELETE FROM cadastro WHERE id ='$id'");
$deleta->execute();

if($id == ''){
	echo'<h1 class ="test">erro</h1>';
}else{
	echo'<h5 >Deletado com sucesso</h5>';
}

?>


<head>
	<title>Atividade</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="corpo">
	<header > 
	<a href="Index.html"><h1>Atividade</h1></a>
 </header>
<button class="botao"><a href="Index.html">Voltar Cadastro </a></button>
<button class="botao"><a href="lista.php">Voltar Lista</a></button>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>