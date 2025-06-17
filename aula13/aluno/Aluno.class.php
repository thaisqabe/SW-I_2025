<?php

    class Aluno{
        private $Nome;
        private $Nota1;
        private $Nota2;

        public function __construct($nome, $nota1, $nota2){
            $this->Nome = $nome;
            $this->Nota1 = $nota1;
            $this->Nota2 = $nota2;
        }

        public function getNome(){
            return $this->Nome;
        }

        public function getNota1(){
            return $this->Nota1;
        }

        public function getNota2(){
            return $this->Nota2;
        }

        public function calculaMedia($nota1, $nota2){
            $media = ($nota1+$nota2)/2;
            return $media;
        }

        // public function calculaMedia(){
        //     $media = ($this->Nota1+$this->Nota2)/2;
        //     return $media;
        // }

        public function verificarSituacao($media){
            if ($media >= 7){
                echo "<p>Situação: <strong style='color:green;'>Aprovado</strong></p>";
            }else{
                echo "<p>Situação: <strong style='color:red;'>Reprovado</strong></p>";
            }
        }
    }

?>