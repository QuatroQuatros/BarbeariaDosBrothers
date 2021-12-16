<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos</title>


    <link href="css/carousel.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
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
              <a class="nav-link" href="contatos.php">Contatos</a>
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

<center><h1 class="display-1">Produtos</h1></center><br><br>

<div class="container marketing">

<div class="Dropdive" >
<div class="row">
  <?php  
        require_once("PHP/classes/Produto.php");
        $produto = new Produto();
        $produtos = $produto->listarProdutos();

        foreach ($produtos as $p) {
                echo ("<div class= 'col-lg-4'>");
                echo("<img class='bd-placeholder-img rounded-circle' width='180' height='180' 
                  src= restrito/".$p["fotoProduto"]." height=400px width=500px><rect width='100%' height='100%'' fill='#777'/>");
                  echo("<h2>". $p["textoProduto"]."</h2>");
                  echo("<p>". $p["descProduto"]."</p>");
                  echo("<p><a class='btn btn-secondary' href='#'>Compre já Brother;</a></p>");
                  echo("</div><!-- /.col-lg-4 -->");
                }

        ?>


    
</div><!-- /.row -->
<hr class="featurette-divider">
</div>

<footer class="container">
    <p class="float-end"><a href="#"><img width="40" height="40"src="img/arrow.svg"></a></p>
    <p>&copy; 2021 Trabalho de PW. &middot; &copy; &middot; </p>
  </footer>

</body>
</html>