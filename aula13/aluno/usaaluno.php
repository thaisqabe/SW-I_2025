<?php

    include_once "Aluno.class.php";

    $aluno1 = new Aluno("fulano", 5, 7);

    // echo "<p>" . $aluno1->getNome() . "</p>";

    // echo $aluno1->calculaMedia();

    // echo $aluno1->calculaMedia($aluno1->getNota1(), $aluno1->getNota2());

    // $aluno1->verificarSituacao($aluno1->calculaMedia($aluno1->getNota1(), $aluno1->getNota2()));

    echo "<p>Olá " . $aluno1->getNome() . "!</p>";
    echo "<p>A média de notas é: " .  $aluno1->calculaMedia($aluno1->getNota1(), $aluno1->getNota2()) . "</p>";
    echo "<p>";
    $aluno1->verificarSituacao($aluno1->calculaMedia($aluno1->getNota1(), $aluno1->getNota2()));
    echo "</p>";
 

?>