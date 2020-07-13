
<?php 

require 'Conexao.php';
	require 'usuario.php';
	$u = new Usuario();

	if(isset($_SESSION['idUser'])){



 	
}else{
	header("location: login.php");


}
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
<html>
<head>
<title> Prefeitura Rio Branco </title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="icon" href="icon/icon4.png" type="image/icon type">
<link rel="stylesheet"  href="css/grid.css">
<link rel="stylesheet"  href="css/lista.css">
</head>  


<body>

<header class="cabecalho"> 
	<div class="container">
		<a  href="formulario.php"> <img src="icon/id.png"></a>
	<a  href="logout.php"><button  class="btn btn-outline-dark ">sair</button></a>
	<nav class="grid-16 menu">
        <ul>
          <li><a href="http://portaldaescola.pmrb.ac.gov.br/">Portal da escola</a></li>
          <li><a href="https://portalcovid.riobranco.ac.gov.br/">Portal da Transparência</a></li>
          <li><a href="http://portalcidadao.riobranco.ac.gov.br/faces/login.xhtml;jsessionid=NTqS8ClUAEBCxMPyBS3QDA+a.undefined">Portal cidadão</a></li>
          <li><a href="https://gmus.riobranco.ac.gov.br/consultapaciente#laboratorio">Resultados exames</a></li>
          
        </ul>

      </nav>
	</div>
 </header>


<div class="container">
	<div class="teste">	
		<h2>Lista Cadastro</h2>
<table class="table table-hover table-striped table-dark">
<tr >
	<td>Id</td>
	<td>Nome</td>
	<td>Sobrenome</td>
	<td>Cpf</td>
	<td>Data Cadastro</td>
	<td>Cargo</td>
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
		
	
	</tr>";
}
	?>
	
</table>
</div>
</div>

<footer >
	<div class="rodape">
		<div class="container">
		<div class="grid-4 footer_contato">
          <h3>Contato</h3>

          <ul>
            <li>-  (68) 3212-7040</li>
            <li>- contato@prefeitura.com</li>
            <li>- Rua Rui Barbosa, 285 – Centro - Rio Branco/AC - CEP: 69.900-901 </li>
          </ul>

        </div>
        <div class="grid-5 footer_redes">
          <h3>Redes Sociais</h3>

          <ul>

            <li>
              <a href="https://www.facebook.com/PrefeituraDeRioBranco" target="_blank"><img src="img/facebook.png"width="50" height="50" alt="Facebook"></a>
            </li>

            <li>
              <a href="https://www.instagram.com/prefriobranco/?hl=pt-br" target="_blank"><img src="img/instagram.png"width="50" height="50" alt="Instagram"></a>
            </li>

            <li>
              <a href="https://twitter.com/PrefRioBranco" target="_blank"><img src="img/twitter.png"width="50" height="50" alt="Twitter"></a>
            </li>

          </ul>
          
        </div>
         <div class="grid-4 mapa">
          <h3>Mapa</h3>

          <ul>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.691695061839!2d-67.81631828509636!3d-9.959588609296599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x917f8c594b602edf%3A0x3971998064cab1f8!2sCentro%20de%20Gest%C3%A3o%20Administrativa%20e%20Apoio%20ao%20Servidor!5e0!3m2!1spt-BR!2sbr!4v1594597078749!5m2!1spt-BR!2sbr" width="370" height="170" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        
          </ul>
          
        </div>
      </div>
      </div>
    </div>
		
	</div>


	<div class="copy">
	<p class="font-weight-bold font-italic">  --- Copright 2020 ---</p>
	</div>
</footer>











<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>