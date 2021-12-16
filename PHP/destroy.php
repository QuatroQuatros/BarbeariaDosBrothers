<?php
    session_start();
    header('Location: ../index.php');
    unset($_SESSION['login-session']);
    unset($_SESSION['senha-session']);
    session_destroy();
?>