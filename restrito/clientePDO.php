<?php  
    
    require "../PHP/classes/Cliente.php";
   header("Location: index-restrito.php");
	

	$cliente = new Cliente();
    
    $cliente->setNome($_POST['nome']);
    $cliente->setCPF($_POST['cpf']);
    $cliente->setTelefone($_POST['telefone']);

    echo ($cliente->cadastrar($cliente));




?>