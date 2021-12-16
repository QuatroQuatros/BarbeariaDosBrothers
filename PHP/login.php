<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    if( ($email == 'adm') && ($senha == '123') ){
        session_start();
        header("Location: ../restrito/index-restrito.php");
        $_SESSION['login-session'] = $email;
        $_SESSION['senha-session'] = $senha;
    }
    else{
        header("Location: ../index.php?msg=<script>alert('Sessão expirada');</script>");
    }
?>