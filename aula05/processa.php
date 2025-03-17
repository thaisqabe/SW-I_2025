<?php

    $email = $_POST['cxemail'];
    $senha = $_POST['cxsenha'];

    if ($email == "aluno@gmail.com" && $senha == "1234") {
        $nome = 'aluno';
        header('Location: privada.php?nome=' .$nome);


    } else {
        header('Location: erro.php');
    }

?>