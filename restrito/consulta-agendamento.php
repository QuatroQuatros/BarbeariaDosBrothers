<?php include_once("../PHP/valida-session.php");?>
<!DOCTYPE HTML>

<html>

<head> 
  <title>Agendamento</title> 
  <link rel="stylesheet" href="../css/agendamento.css">
  <link rel="stylesheet" href="../css/carousel.css">
  <link href="../css/sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="../fonts/icomoon/style.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head> 

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/carousel.css" rel="stylesheet">


  <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
  <style>
    table, th, td {
      border:1px solid black;
    }
</style>
  <body>
    <div class ="conteiner">
    <header>
      <div class = "top">
      <nav class="navbar navbar-expand-md navbar-dark fixed bg-dark">
        <div class="container-fluid">
          <a class="logo navbar-brand" href="../index.php"><img src="../img/logo.png">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="links collapse navbar-collapse" id="navbarCollapse">
            
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
              <a class="nav-link" href="../index.php">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../servicos.php">Serviços</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../produtos.php">Produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../contatos.php">Contatos</a>
              </li>
              <li class="nav-item">
                <aside class="sidebar">
                <div class="toggle">
                  <a href="#" class="nav-link js-menu-toggle menu-toggle">
                    <span class="icon-list text-white"></span>
                  </a>
                </div>
                <div class="side-inner">

                  <div class="share">
                    <h2>OLÁ ADM</h2>
                    <h3>O QUE DESEJA?</h3>
                    <nav>
                      <div>
                        <a class="nav-link" href="Cadastra-produto.php">Cadastrar Produto</a>
                      </div>
                      <div>
                        <a class="nav-link" href="Cadastra-cliente.php">Cadastrar Cliente</a>
                      </div>
                      <div>
                        <a class="nav-link" href="Cadastra-servico.php">Cadastrar Serviço</a>
                      </div>
                      <div>
                        <a class="nav-link" href="Cadastra-agendamento.php">Fazer Agendamento</a>
                      </div>
                      <div>
                        <a class="nav-link" href="consulta-agendamento.php">Consultar Agendamento</a>
                      </div>
                      <div>
                        <a class="login-link nav-link" href="../PHP/destroy.php">Sair</a>
                      </div>
                    </nav>
                  </div>
                </div>   
              </aside>
              </li>
            </div>
          </div>
        </nav>
      </div>
    </header>

      <br>
      <br>
      <center><h1 class="italico">CONSULTA AGENDAMENTO</h1></center>
      <br>
      <br>
      <div class ="form-agenda">
        <table border="2">
          <th> id agendamento </th>
          <th> data agendamento </th>
          <th> Nome cliente </th>
          <th> Nome servico </th>


      <?php 
      require_once('../PHP/classes/Agenda.php');
      require_once('../PHP/classes/Cliente.php');
      require_once('../PHP/classes/Servico.php');
      $agenda = new Agenda();
      $cliente = new Cliente();
      $servico = new Servico();
      $lista = $agenda->listar($agenda);
      foreach ($lista as $item): 
      $nomeCliente = $cliente->getNameById($item["idCliente"]);
      $nomeServico = $servico->getNameById($item["idServico"]);?>
      <tr>
           <td><?php echo $item['idAgenda'] ?></td>
           <td><?php echo $item['dataAgenda'] ?></td>
           <td><?php echo $nomeCliente[0] ?></td>
           <td><?php echo $nomeServico[0] ?></td>
      </tr>
    <?php endforeach; ?>
      </table>
  </div>
      <hr class="featurette-divider">

  <footer class="container">
    <p class="float-end"><a href="#"><img width="40" height="40"src="../img/arrow.svg"></a></p>
   <p>&copy; 2021 Trabalho de PW. &middot; &copy; &middot; </p>
  </footer>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/sidebar.js"></script>

  </body>
</html>