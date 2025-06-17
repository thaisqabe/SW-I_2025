<?php

    include_once "Retangulo.class.php";

    $retangulo = new Retangulo(10, 5);

    $retangulo->exibirResultados();

    $retangulo->setAltura(4);

    echo "<hr>";
    $retangulo->exibirResultados();
?>