<?php

    class Funcionario{
        private $Nome;
        private $Salario;

    

    public function __construct($nome, $salario){
        $this->Nome = $nome;
        $this->Salario = ($salario>0);
    }


    public function getSalario(){
        return $this->Salario;
    }

    public function getNome(){
        return $this->Nome;
    }

    public function aumentarSalario($porcentagem){
        $porcentagemt = 1+($porcentagem/100);
        $this->Salario = $this->getSalario() * $porcentagemt; 
    }

    public function exibirInformacoes(){
        $nome = $this->getNome();
        $salariofinal = $this->Salario;
        echo "<p>Nome: " . $nome . ", Salário: R$" . $salariofinal . "</p>";
    }

}
?>