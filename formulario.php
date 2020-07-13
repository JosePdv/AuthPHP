	<?php 
	require 'Conexao.php';
	require 'usuario.php';
	$u = new Usuario();

	if(isset($_SESSION['idUser'])){



 	
}else{
	header("location: login.php");


}


?>
<html> 

<head>
<title> Prefeitura Rio Branco</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="icon" href="icon/icon4.png" type="image/icon type">
	<link rel="stylesheet"  href="css/grid.css">
	<link rel="stylesheet"  href="css/formulario2.css">
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
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="icon/slide1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="icon/slide2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      					<img src="icon/slide3.png" class="d-block w-100" alt="...">
    			</div>
  			</div>
		</div>


      <div class="">
		<h2 class="pi">Cadastrar Funcionario</h2>
		<form  method="post" action="cadastro.php">
	<p class="font-weight-bold font-italic">Nome<input class="form-control" type="text" name="nome" placeholder="José s..."></p>
	
	<p class="font-weight-bold font-italic" >Sobrenome<input class="form-control" type="text" name="sobrenome" placeholder="Cunha..."></p>
	
	<p class="font-weight-bold font-italic">Cpf<input class="form-control" type="text" name="cpf" placeholder="002 3443 384 10..."></p>
	
	<p class="font-weight-bold font-italic">Cargo<input class="form-control" type="text" name="cargo" placeholder="Analista ..."></p>
	<input type="submit" name="cadastrar" value="Cadastrar"class="btn btn-primary btn-sm">
	

		
		</div>
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

	