<?php  
    require_once('../PHP/classes/Servico.php');

    header("Location: index-restrito.php");

    $servico = new Servico();

    $servico->setDesc($_POST['descServico']);
    $servico->setTexto($_POST['textoServico']);
    
    $nome = $_FILES['fotoServico']['name'];
    
    $arquivo = $_FILES['fotoServico']['tmp_name'];

    $caminhoimagem = "imagens/servicos/" . $nome;
      
    move_uploaded_file($arquivo, $caminhoimagem);
    //mova o $arquivo para a pasta indicada com o nome indicado
        
    $servico->setFoto($caminhoimagem);

    $servico->cadastrar($servico);

?>