<?php  
    require_once('../PHP/classes/Produto.php');

    header("Location: index-restrito.php");

    $produto = new Produto();

    $produto->setDesc($_POST['descProduto']);
    $produto->setTexto($_POST['textoProduto']);
    
    $nome = $_FILES['fotoProduto']['name'];
    
    $arquivo = $_FILES['fotoProduto']['tmp_name'];

    $caminhoimagem = "imagens/produtos/" . $nome;
      
    move_uploaded_file($arquivo, $caminhoimagem);
    //mova o $arquivo para a pasta indicada com o nome indicado
        
    $produto->setFoto($caminhoimagem);

    $produto->cadastrar($produto);

?>