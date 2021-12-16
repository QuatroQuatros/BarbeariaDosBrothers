<?php  
    require_once('../PHP/classes/Agenda.php');
    require_once '../PHP/classes/Cliente.php';
    require_once '../PHP/classes/Servico.php';

    header("Location: index-restrito.php");

    $agenda = new Agenda();
    $agenda->setData($_POST['dataAgenda']);
    $cliente = new Cliente();
    $servico = new Servico();

    $idCliente = $_POST['nomeCliente'];
    $idServico = $_POST['nomeServico'];


    $nomeCliente = $cliente->getNameById($idCliente);
    $nomeServico = $servico->getNameById($idServico);

    $cliente->setIdCliente($idCliente);
    $servico->setIdServico($idServico);

    $cliente->setNome($idCliente);
    $servico->setTexto($idServico);

    $agenda->setCliente($cliente);
    $agenda->setServico($servico);


    $agenda->cadastrar($agenda, $cliente, $servico);

?>