<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contatos</title>
		<link rel="stylesheet" href="css/carousel.css">
		<link rel="stylesheet" href="css/contato.css">


    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
	<header>
	    <div class = "top">
	    <nav class="navbar navbar-expand-md navbar-dark fixed bg-dark">
	      <div class="container-fluid">
	        <a class="logo navbar-brand" href="index.php"><img src="img/logo.png">
	        </a>
	        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="links collapse navbar-collapse" id="navbarCollapse">
	          
	          <ul class="navbar-nav me-auto mb-2 mb-md-0">
	            <li class="nav-item">
	            <a class="nav-link" href="index.php">Início</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="servicos.php">Serviços</a>
	            </li>
	           	<li class="nav-item">
	              <a class="nav-link" href="produtos.php">Produtos</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="#">Contatos</a>
	            </li>
	          </ul>
	          <div class="login-links">
	            <ul class="navbar-nav">
	              <li class="nav-item">
	                <a class="login-link nav-link" href="PHP/form-login.php">Entrar</a>
	              </li>
	            </ul>
	          </div>
	        </div>
	      </div>
	    </nav>
	    </div>
  	</header>
		<div class="conteiner">
			<div class="contato">
				<h1>ENTRE EM CONTATO</h1>
			</div>
			<div class="form-contato">
				<br><br>
				<center><h1>Fale conosco</h1>
				<form>
					<div class="inputs w-50">
					  <input type="text" placeholder= "Nome*"class="form-control input-form" required>
					</div>
					<div class="inputs w-50">
					  <input type="email" placeholder= "Email*" class="form-control"placeholder="exemplo@examplo.com" required>
					</div>
					<div class="inputs w-50">
					  <input type="text" placeholder= "Assunto" class="form-control" required>
					</div>
					<div class="inputs w-50">
					  <textarea class="form-control" rows="10" placeholder= "Mensagem" required></textarea>
					</div>
					<button type="button" class=" inputs btn btn-warning">Enviar</button>
					<br><br>
				</form></center>
			</div>
				<hr class="featurette-divider">
		</div>


	<footer class="container">
    	<p class="float-end"><a href="#"><img width="40" height="40"src="img/arrow.svg"></a></p>
		<p>&copy; 2021 Trabalho de PW. &middot; &copy; &middot; </p>
  	</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>