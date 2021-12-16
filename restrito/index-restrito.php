<?php include_once("../PHP/valida-session.php");?>
<!doctype html>
<html lang="pt-br">
  <head>
    <link href="../css/carousel.css" rel="stylesheet">

    <link href="../css/sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Barbearia Dos Brothers</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

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

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        //To minimise the height of chatbox
        $(document).ready(function() {
            window.addEventListener('dfMessengerLoaded', function (event) {
            $r1 = document.querySelector("df-messenger");
            $r2 = $r1.shadowRoot.querySelector("df-messenger-chat");
            $r3 = $r2.shadowRoot.querySelector("df-messenger-user-input"); //for other mods
            var sheet = new CSSStyleSheet;
            // manage box height from here
            sheet.replaceSync( `div.chat-wrapper[opened="true"] { height: 450px }`);
            $r2.shadowRoot.adoptedStyleSheets = [ sheet ];
            });
        });

        $(document).ready(function(){
        $("#menu-toggle").click(function(e){
          e.preventDefault();
          //document.getElementById("wrapper").style.display = "block";
          $("#wrapper").toggleClass("menuDisplayed");
        });
      });
    </script>
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger
      chat-icon="https:&#x2F;&#x2F;icons.iconarchive.com&#x2F;icons&#x2F;icons8&#x2F;windows-8&#x2F;256&#x2F;Users-Talk-icon.png"
      intent="WELCOME"
      chat-title="BarbeariaDosBrothers"
      agent-id="b4b90968-0676-4459-b509-a5ee6896296e"
      language-code="pt-br"
    ></df-messenger>
   <style>
      df-messenger {
        --df-messenger-bot-message: gray;
        --df-messenger-button-titlebar-color: #4C5760;
        --df-messenger-chat-background-color: #9DA3A4;
        --df-messenger-input-box-color: #4C5760;
        --df-messenger-input-font-color:  white;
        --df-messenger-input-placeholder-font-color: white;
        --df-messenger-font-color: white;
        --df-messenger-send-icon: white;
        --df-messenger-user-message: #748CAB;
       }

    </style>

  </head>
  <body>
  <header>
    <div class = "top">
    <nav class="navbar navbar-expand-md navbar-dark fixed bg-dark">
      <div class="container-fluid">
        <a class="logo navbar-brand" href="index-restrito.php"><img src="../img/logo.png">
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
                        <a class="nav-link" href="cadastra-produto.php">Cadastrar Produto</a>
                      </div>
                      <div>
                        <a class="nav-link" href="cadastra-cliente.php">Cadastrar Cliente</a>
                      </div>
                      <div>
                        <a class="nav-link" href="cadastra-servico.php">Cadastrar Serviço</a>
                      </div>
                      <div>
                        <a class="nav-link" href="cadastra-agendamento.php">Fazer Agendamento</a>
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
          </ul>

      </div>  
    </nav>
    </div>



  </header>



<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img " width="140" height="140" src="../img/bemvindo.png" height=400px width=500px   preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>


       
      </div>
      <div class="carousel-item">
      <img class="bd-placeholder-img " width="140" height="140" src="../img/banner.png" height=400px width=500px   preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>


      </div>
      <div class="carousel-item">
      <img class="bd-placeholder-img " width="140" height="140" src="../img/pix.png" height=400px width=500px   preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>


      
      </div>
      <div class="carousel-item">
      <img class="bd-placeholder-img " width="140" height="140" src="../img/barba.png" height=400px width=500px   preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>


      
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container marketing">

    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="../img/number.png" height=400px width=500px   preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>

        <h2>Barbearia Numero 1</h2>
        <p>De todas as barbearias, estamos em primeiro lugar!</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="../img/MicrosoftTeams-image (6).png" height=400px width=500px   preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>

        <h2>Barbearia</h2>
        <p>A Barbearia Brothers foi o pioneiro em estética masculina no país. Esse segmento já é presente em vários países como Brasil, EUA e Itália  entre outros. Temos como objetivo oferecer serviços específicos ao homem contemporâneo, procurando proporcionar excelentes resultados em um ambiente exclusivo voltado ao seu Bem-Estar.
      .</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="../img/bilhar.jpg" height=400px width=500px   preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>

        <h2>Lazer</h2>
        <p>Lazer e curtição para todos os clientes!.</p>
        
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <hr class="featurette-divider">


    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Barbearia dos Brothers<br><span class="text-muted">Serviços</span></h2>
        <p class="lead">Confira nossa lista de serviços.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="../img/corte1.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Serviços</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
        <div class="iconbutton"><br><br><button type="button" class="btn btn-secondary btn-lg"><a class="colortext" class="nav-link" href="../servicos.php">Clique para ver mais</a></button></div>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Barbearia dos Brothers<br><span class="text-muted">Produtos</span></h2>
        <p class="lead">Confira nosso catálogo com os melhores produtos!</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="../img/catalogo.png" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Produtos</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
        <div class="iconbutton"><br><br><button type="button" class="btn btn-secondary btn-lg"><a class="colortext" class="nav-link" href="../produtos.php">Clique para ver mais</a></button></div>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Barbearia dos Brothers<br><span class="text-muted">Contatos</span></h2>
        <p class="lead">Entre em contato.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="../img/contato2.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Contatos</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
        <div class="iconbutton"><br><br><button type="button" class="btn btn-secondary btn-lg"><a class="colortext" class="nav-link" href="../contatos.php">Clique para ver mais</a></button></div>
      
      </div>
    </div>

    <hr class="featurette-divider">

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#"><img width="40" height="40"src="../img/arrow.svg"></a></p>
    <p>&copy; 2021 Trabalho de PW. &middot; &copy; &middot; </p>
  </footer>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/sidebar.js"></script>


      
  </body>
</html>
