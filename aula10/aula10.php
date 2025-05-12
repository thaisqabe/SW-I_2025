<?php
    include_once "Conta.class.php";

    $conta1 = new Conta();

    $conta1->Nome = "Fulano";
    $conta1->Cpf = "123.456.789-10";


    // $conta1->Saldo = 15000000;
    
    $conta1->MostrarSaldo();

    echo '<hr>';
    echo $conta1->Depositar(500);
    echo '<hr>';

    $conta1->MostrarSaldo();
    echo '<hr>';

    echo $conta1->Sacar(500);

?>