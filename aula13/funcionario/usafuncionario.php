<?php

    include_once "Funcionario.class.php";

    $funcionario = new Funcionario('fulano de tal', 1000.00);

    $funcionario->aumentarSalario(10);

    $funcionario->exibirInformacoes()

?>