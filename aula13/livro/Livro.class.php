<?php

    class Livro{
        private $Titulo;
        private $Autor;
        private $Disponivel;

        public function __construct($titulo, $autor, $disponivel = false){
            $this->Titulo = $titulo;
            $this->Autor = $autor;
            $this->Disponivel = $disponivel;
        }

        public function getTitulo(){
            return $this->Titulo = $titulo;
        }

        public function getDisponivel(){
            return $this->Disponivel = $disponivel;
        }

        public function emprestarLivro(){
            if ($this->Disponivel == true){
                $this->Disponivel = false;
            }else{
                echo "Não foi possível";
            }
        }

        public function devolverLivro(){
                $this->Disponivel = true;
        
        }

        public function exibirStatus(){

        }
    }

?>