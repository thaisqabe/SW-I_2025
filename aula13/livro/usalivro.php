<?php
    include_once 'Livro.class.php';
    $livro = new Livro('As vantagens de ser invisível', 'Stephen Chbosky', true);

    // echo "<pre>";
    // print_r($livro);
    // echo "</pre>";
    echo "Exibindo o status do Livro <br>";
    echo $livro->exibirStatus();
    echo "<hr>";
    echo "Fazendo um empréstimo <br>";
    $livro->emprestarLivro();
    echo "<hr>";
    echo "Exibindo o status do Livro <br>";
    echo $livro->exibirStatus();
    echo "<hr>";
    echo "Fazendo uma devolução <br>";
    $livro->devolverLivro();
    echo "<hr>";
    echo "Exibindo o status do Livro <br>";
    echo $livro->exibirStatus();
    echo "<hr>";
?>