<?php

    include_once "Produto.class.php";

    $p1 = new Produto('Caderno', 39.99, 20);
    $p2 = new Produto('Folha Sulfite', 59.89, 50);



    $p1->adicionarEstoque(30);
    $p2->removerEstoque(10);


    $p1->MostrarDetalhes();
    $p2->MostrarDetalhes();

 


?>